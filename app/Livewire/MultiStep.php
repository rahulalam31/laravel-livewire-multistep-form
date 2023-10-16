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



    protected $listeners = [
        'fileUpload'     => 'handleFileUpload',
        'ticketSelected',
    ];


    public function handleFileUpload($imageData)
    {
        $this->photo = $imageData;
    }

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


    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'email'=>'required|string',
                'country'=>'required|string',
                'phone'=>'required',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'editor'=>'required',
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'photo'=>'required'
              ]);
        }
    }

    public function register(){
        // if($this->currentStep == 4){
        User::create([
            'country' => $this->country,
            'phone' => $this->phone,
            'detail' => $this->editor,
            'photo' => $this->photo,
            'email' => $this->email,
        ]);


        $data = ['email'=>$this->email, 'country' => $this->country, 'phone' =>$this->phone,'detail'=>$this->editor];
        return redirect()->route('registration.success', $data);
    // }
    }

}
