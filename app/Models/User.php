<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\HasConfig;
use Filament\Models\Contracts\FilamentUser;
use Akaunting\Module\Facade as Module;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Laravel\Cashier\Billable;
use Spatie\WelcomeNotification\ReceivesWelcomeNotification;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasConfig;
    use Billable;
    use ReceivesWelcomeNotification;

    protected $modelName="App\Models\User";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    public function company()
    {
        if($this->hasRole('owner')){
            return $this->hasOne(Company::class);
        }else{
            //staff
            return $this->hasOne(Company::class,'id','company_id');
        }
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function plan()
    {
        return $this->hasOne(\App\Models\Plans::class, 'id', 'plan_id');
    }

    public function mplanid()
    {
        return $this->plan_id ? $this->plan_id : intval(config('settings.free_pricing_id'));
    }

    public function getExtraMenus(){
        $menus=[];
        if($this->hasRole('admin')){
            foreach (Module::all() as $key => $module) {
                if(is_array($module->get('adminmenus'))){
                    foreach ($module->get('adminmenus') as $key => $menu) {
                        if(isset($menu['onlyin'])){
                            if(config('app.'.$menu['onlyin'])){
                                array_push($menus,$menu);
                            }
                        }else{
                            array_push($menus,$menu);
                        }
                       
                    }
                }
            }
        }else if($this->hasRole('client')){
            foreach (Module::all() as $key => $module) {
                if(is_array($module->get('clientmenus'))){
                    foreach ($module->get('clientmenus') as $key => $menu) {
                        if(isset($menu['onlyin'])){
                            if(config('app.'.$menu['onlyin'])){
                                array_push($menus,$menu);
                            }
                        }else{
                            array_push($menus,$menu);
                        }
                       
                    }
                }
            }
        }else if($this->hasRole('owner')){
            $allowedPluginsPerPlan = auth()->user()->company?auth()->user()->company->getPlanAttribute()['allowedPluginsPerPlan']:null;
            foreach (Module::all() as $key => $module) {
                if( is_array($module->get('ownermenus'))  &&  ($module->get('alwayson') ||  $allowedPluginsPerPlan==null || in_array($module->get('alias'),$allowedPluginsPerPlan)) ){
                    foreach ($module->get('ownermenus') as $key => $menu) {
                       
                        if(isset($menu['onlyin'])){
                            if(config('app.'.$menu['onlyin'])){
                                array_push($menus,$menu);
                            }
                        }else{
                            array_push($menus,$menu);
                        }
                    }
                }
            }
        }
        else if($this->hasRole('staff')){
            foreach (Module::all() as $key => $module) {
                if(is_array($module->get('staffmenus'))){
                    foreach ($module->get('staffmenus') as $key => $menu) {
                       array_push($menus,$menu);
                    }
                }
            }
        }
        return $menus;
    }

    public function setImpersonating($id)
    {
        Session::put('impersonate', $id);
    }

    public function stopImpersonating()
    {
        Session::forget('impersonate');
    }

    public function isImpersonating()
    {
        return Session::has('impersonate');
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}

