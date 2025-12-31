<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\TwoFactorEnabledResponse as TwoFactorEnabledResponseContract;
use Illuminate\Http\RedirectResponse;

class TwoFactorEnabledResponse implements TwoFactorEnabledResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        return redirect('/laravel/profile');
    }
}
