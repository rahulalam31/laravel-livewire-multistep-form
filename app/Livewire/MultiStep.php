<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStep extends Component
{
    use WithFileUploads;


    public $email;
    public $country;
    public $phone;
    public $editor;
    public $photo;

    public $totalSteps = 4;
    public $currentStep = 1;


    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step');
    }


    public function increaseStep()
    {
        $this->resetErrorBag();
        // $this->validateData();
        if ($this->currentStep < $this->totalSteps) {
        $this->currentStep++;
            // $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }


    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([
                'email' => 'required|string',
                'country' => 'required|string',
                'phone' => 'required|integer'
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'editor' => 'required',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'photo' => 'image|max:5500'
            ]);
        }
    }

    public function register()
    {
        $this->resetErrorBag();

        if($this->currentStep == 4){
            $this->validate([
                'photo'=>'required|mimes:jpeg,jpg,webp|max:5500'
            ]);
        }



        dd($this->all());
        $photo_name = 'CV_' . $this->photo->getClientOriginalName();
        $upload_cv = $this->photo->storeAs('photo', $photo_name);
        User::create([
            "email" => $this->email,
            "country" => $this->country,
            "phone" => $this->phone,
            "editor" => $this->editor,
            "photo" => $upload_cv->url(),
        ]);

          $this->reset();
          $this->currentStep = 1;
        $data = ['email' => $this->email, 'phone' => $this->country . ' - ' . $this->phone, 'Company Details' => $this->editor];
        return redirect()->route('registration.success', $data);
    }
}
