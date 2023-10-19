<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStep extends Component
{
    use WithFileUploads;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|string')]
    public $country;

    #[Rule('required')]
    public $phone;

    #[Rule('required|string')]
    public $editor;

    #[Rule('image|max:2055')]
    public $photo;

    public $imgurl;

    public $totalSteps = 4;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step');
    }


    public function increaseStep(){
        // $this->resetErrorBag();
        // $this->validateData();
         $this->currentStep++;
        //  if($this->currentStep > $this->totalSteps){
        //      $this->currentStep = $this->totalSteps;
        //  }
    }

    public function decreaseStep(){
        // $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }


    public function register(){

        if($this->photo) {
            $this->imgurl = $this->photo->store('public/upload');
        }
        User::create([
            'country' => $this->country,
            'phone' => $this->phone,
            'detail' => $this->editor,
            'photo' => $this->imgurl,
            'email' => $this->email,
        ]);


        $data = ['email'=>$this->email, 'country' => $this->country, 'phone' =>$this->phone,'detail'=>$this->editor];
        return redirect()->route('registration.success', $data);
    }

}
