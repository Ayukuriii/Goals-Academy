<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
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

    public function mount() {
        $day1 = Carbon::today();
        $day2 = Carbon::tomorrow();
        $day3 = Carbon::tomorrow()->addDay();

        $this->dates = collect([$day1, $day2, $day3]);
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
            'date' => 'required | after_or_equal:today',
            'time' => 'required |date_format:H.i',
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

        dd($this);

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
        $this->times = collect(['09.00', '12.00', '14.00', '16.00', '19.00']);
        $this->time = $this->times->first() ?? null;
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
