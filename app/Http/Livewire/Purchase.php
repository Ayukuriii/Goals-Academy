<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\OngoingProgram;
use App\Models\OrderDetail;
use App\Notifications\NewOrderNotification;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Notification;

class Purchase extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $agreement;
    public $program;
    public $price;
    public $dates;
    public $date;
    public $times;
    public $time;
    public $cities;
    public $city;
    public $locations;
    public $location;
    public $note;
    public $document;
    public $purchaseMethods;
    public $purchaseMethod;
    public $successMsg = '';

    public function mount()
    {
        // $day1 = Carbon::today()->format('d-m-Y');
        // $day2 = Carbon::tomorrow()->format('d-m-Y');
        // $day3 = Carbon::tomorrow()->addDay()->format('d-m-Y');

        // $this->dates = collect([$day1, $day2, $day3]);
        $day1 = Carbon::today();

        // Check if day1 is a Saturday or Sunday
        if ($day1->isWeekend()) {
            // Add days until we reach a Monday
            while ($day1->isWeekend()) {
                $day1->addDay();
            }
        }

        $day2 = $day1->copy()->addWeekday(); // Add one weekday to day1
        $day3 = $day1->copy()->addWeekdays(2); // Add two weekdays to day1

        $this->dates = collect([$day1->format('d-m-Y'), $day2->format('d-m-Y'), $day3->format('d-m-Y')]);

        $this->times = collect();

        $this->cities = collect(['Malang', 'Jakarta']);
        $this->locations = collect();

        $this->purchaseMethods = collect([
            'virtual-account' => ['bni', 'bca', 'mandiri', 'permata-bank', 'cimb', 'maybank'],
            'e-money' => ['qris', 'ovo', 'shopeepay'],
            'cicilan' => ['kredivo', 'cicil'],
            'lainnya' => ['alfamart', 'indomaret', 'pos-indonesia'],
        ]);
    }

    public function render()
    {
        return view('livewire.purchase', []);
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'program' => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        if ($this->program == 3) {
            $validatedData = $this->validate([
                'city' => 'required',
                'location' => 'required',
            ]);
        }

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'note' => 'required',
            'document' => 'file | mimes:pdf,doc,docx | nullable',
        ]);

        if ($this->program == 1) {
            $this->price = 11;
        } else if ($this->program == 2) {
            $this->price = 12;
        } else if ($this->program == 3) {
            $this->price = 13;
        }

        $this->currentStep = 4;
    }

    public function submitForm()
    {
        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $validatedData = $this->validate([
            'purchaseMethod' => 'required',
            'agreement' => 'accepted'
        ]);

        // dd($this);

        $filepath = null;
        $origin = null;
        if ($this->document) {
            $origin = $this->document->getClientOriginalName();
            $path = $this->document->store('ongoing-files', 'public');
            $filepath = str_replace('ongoing-files/', '', $path);
        }

        $user = auth()->user();

        $randomNumber = rand(0, 9999);
        $rand = str_pad($randomNumber, 4, '0', STR_PAD_LEFT);

        $params = array(
            'transaction_details' => array(
                'order_id' => 'GA' . $rand,
                'gross_amount' => $this->price,
                // 'expiry' => array(
                //     'start_time' => date('Y-m-d H:i:s'), // The start time of the expiry duration (usually the current time)
                //     'unit' => 'minutes', // The unit of the expiry duration (can be 'minutes' or 'hours')
                //     'duration' => 60
                // )
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone_number,
            ),
            'payment_type' => 'qris',
        );

        $response = \Midtrans\CoreApi::charge($params);
        // dd($response);
        $responseToJson = json_encode($response);

        $order = OrderDetail::create([
            'ongoing_program_id' => null, // temporary set to null
            'jsonstring' => $responseToJson,
        ]);

        $data = OngoingProgram::create([
            'order_detail_id' => $order->id,
            'user_id' => $user->id,
            'program_services_id' => $this->program,
            'payment_status' => $response->transaction_status,
            'program_session' => $this->time,
            'catatan' => $this->note,
            'alias' => $origin,
            'file' => $filepath,
            'links' => $this->location,
            'date' => Carbon::parse($this->date)->format('Y-m-d'),
            'is_tutor' => 0,
            'is_moderator' => 0,
        ]);

        $order->ongoing_program_id = $data->id;
        $order->save();

        Notification::send(auth()->user(), new NewOrderNotification($order->id));

        return redirect()->route('payment.pending', $data->id);
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->program = '';
    }

    public function updatedDate($value)
    {
        if ($value) {

            $d = Carbon::now();

            // Set the desired times
            $s1 = Carbon::parse($value)->setTime(9, 0, 0); // 09:00
            $s2 = Carbon::parse($value)->setTime(11, 0, 0); // 11:00
            $s3 = Carbon::parse($value)->setTime(13, 0, 0); // 13:00
            $s4 = Carbon::parse($value)->setTime(15, 0, 0); // 15:00
            $s5 = Carbon::parse($value)->setTime(17, 0, 0); // 17:00
            $jamTersedia = [$s1, $s2, $s3, $s4, $s5];

            $sesi = [];
            foreach ($jamTersedia as $jam) {
                if ($jam > $d) {
                    $selisih = $jam->diffInHours($d);
                    if ($selisih >= 3) {
                        $sesi[] = $jam->format('H:i');
                    }
                }
            }

            $this->times = collect($sesi);

            $this->time = $this->times->first() ?? null;

            // if (!in_array($this->time, $this->times)) {
            //     $this->time = null;
            // }
        } else {
            $this->times = [];
        }
    }

    public function updatedCity($value)
    {
        if ($value) {
            if ($value == 'Malang') {
                $this->locations = collect(['Nakoa', 'Kopi Studio Sigura-gura', 'Kopi Studio Blimbing', 'Kopi Tuwo']);
            } else if ($value == 'Jakarta') {
                $this->locations = collect(['Djakarta Kafe', 'Blumchen Coffee', 'Cafe Batavia']);
            }
            $this->location = $this->locations->first() ?? null;
        } else {
            $this->locations = [];
        }
    }
}
