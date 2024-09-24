<?php

namespace App\Livewire\Intranet;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{
    public function logout()
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session to prevent reuse
        request()->session()->invalidate();

        // Regenerate session token to prevent CSRF attacks
        request()->session()->regenerateToken();

        // Redirect to the home page ('/')
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.intranet.logout-button');
    }
}
