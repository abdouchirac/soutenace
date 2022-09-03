<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\postes;
use App\Models\historiques;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class Register extends Component
{   public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public $postes='';
    public $state = [];
    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/dashboard');
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email:rfc,dns|unique:users']);
    }
    
    public function register()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
           
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);

        $user = User::create([
            'first_name' =>$this->first_name,
            'last_name' =>$this->last_name,
            
            'email' =>$this->email,
           
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(10),
        ]);

        $historiques=historiques::create([

            'poste_id' => $user->id,
            'user_id' => $user->id,

        ]);

       

        $validator = Validator::make($this->state, [
            'poste_libele' => 'required|max:100',
        ])->validate();

        postes::create($this->state);
        session()->flash('message','postes avec succès!');
        $this->reset('state');
        $this->postes = postes::all();

        auth()->login($user);

        return redirect('/profile-example');
    }

    public function render()
    {
        $dest = postes::all();
        return view('livewire.auth.register', compact('dest'));
    }
}
