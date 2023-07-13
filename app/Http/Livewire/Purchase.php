<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Purchase extends Component
{
    public $currentStep = 2;
    public $program = 1;
    public $user_levels;
    public $users;
    public $user_level;
    public $user;
    public $successMsg = '';

    public function mount() {
        $this->user_levels = collect(['Admin', 'Tutor', 'Moderator', 'User']);
        $this->users = collect();
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

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->currentStep = 4;
    }

    public function submitForm()
    {
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

    public function updatedUserLevel($value)
    {
        $this->users = User::where('user_level', $value)->get();
        $this->user = $this->users->first()->id ?? null;
    }
}
