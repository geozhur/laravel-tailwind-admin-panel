<?php

namespace App\Services\Auth;

use Auth;

class AuthenticatedSessionService {

    public function checkNotBan()
    {
        $user = Auth::user();

        if($user && $user->hasBan()) {
            Auth::logout();
            return redirect()->route('login')
                ->withErrors(['email' => 'Your account has been Banned. Please contact administrator.']);
        }

    }
}
