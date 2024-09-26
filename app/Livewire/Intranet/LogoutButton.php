<?php

namespace App\Livewire\Intranet;

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{
    public $message;
    public function logout()
    {
        // Llama al action Logout
        (new Logout())->__invoke();

        // Redirige al usuario a la página de inicio
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.intranet.logout-button');
    }
}
