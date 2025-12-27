<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        return match ($user->role) {
            'super_admin' => redirect()->route('super_admin.dashboard'),
            'seller'      => redirect()->route('seller.dashboard'),
            default       => redirect()->route('user.dashboard'),
        };
    }
}
