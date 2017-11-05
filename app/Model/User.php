<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','first_name', 'last_name', 'gender', 'date_of_birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const gender = [
      'male' => 'Male',
        'female' => 'Female'
    ];

    /********************
     * Relations Start
     * ************
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leagues()
    {
        return $this->hasMany('App\Model\League');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany('App\Model\Team');
    }

    /******************
     * Relations End
     * **********
     */

    /**
     * @param $firstName
     * @param $lastName
     * @return string
     */
    static public function uniqueUsername($firstName, $lastName) {
        $username = Str::slug($firstName . "-" . $lastName);
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + 1;

        return ($countUser > 1) ? "{$username}-{$countUser}" : $username;
    }

    /*******************
     * Accessor Start
     * ***********
     */

    /**
     * @param $date
     * @return string
     */
    public function getDateOfBirthAttribute($date)
    {
        return Carbon::parse($date)->format('Y/m/d');
    }

    /*****************
     * Accessor End
     * *********
     */
}
