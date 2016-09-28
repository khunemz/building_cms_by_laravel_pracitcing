<?php

namespace App\Listeners;

// use App\Events\handle;
// use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class UpdateLastLoginOnLogin
{
    public function handle($user , $remember)
    {
        $user->last_login_at = Carbon::now();
        $user->save();
    }
}
