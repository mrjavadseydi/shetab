<?php

namespace App\Providers;

use App\permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin',function ($user){
            if (permission::where('user_id',$user->id)->count()>0) {
                if (permission::where('user_id', $user->id)->first()->role == "admin")
                    return true;
                else
                    return false;
            }else{
                return false;
            }
        });
        //
    }
}
