<?php

namespace App\Http\Livewire;

use App\Models\OngoingProgram;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Livewire\Component;
use Livewire\WithFileUploads;

class Purchase extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $isAgree = 0;
    public $program = 3;
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
            'document' => 'file | nullable',
        ]);

        $this->currentStep = 4;
    }

    public function submitForm()
    {
        $validatedData = $this->validate([
            'purchaseMethod' => 'required'
        ]);

        $create = OngoingProgram::create([
            'user_id' => auth()->user()->id,
            'program_services_id' => $this->program,
            // 'tutor_id' => someone
            'payment_status' => 'pending',
            'program_session_id' => 1,
            'catatan' => $this->note,
            'file' => $this->document,
            'date' => $this->date,
            'is_tutor' => 0,
            'is_moderator' => 0,
        ]);

        if ($create) {
            echo "success";
        } else {
            dd($create);
        }

        $this->successMsg = 'Program successfully ordered!';

        $this->clearForm();

        $this->currentStep = 1;
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
                    $sesi[] = $jam->toDateTimeString();
                }
            }
        }

        $this->times = $sesi;

        if (!in_array($this->time, $this->times)) {
            $this->time = null;
        }
    }

    public function updatedCity($value)
    {
        if ($value == 'Malang') {
            $this->locations = collect(['Nakoa', 'Sarijan', 'Kopi Studio Sigura-gura', 'Kopi Studio Blimbing', 'Kopi Tuwo']);
        } else if ($value == 'Jakarta') {
            $this->locations = collect(['Djakarta Kafe', 'Blumchen Coffee', 'Cafe Batavia']);
        }
        $this->location = $this->locations->first() ?? null;
    }
}
