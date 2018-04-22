<?php

namespace App\Models;

/*
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * THIS FILE IS AUTO-GENERATED BY AUTOMODEL:TABLE COMMAND
 * ANY CHANGES MADE TO THIS FILE MAY BE LOST
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * No description found in the table comment.
 *
 * Class User
 * @package App\Models
 *
 * @property integer $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\Role[] $roles
 * @property \App\Models\Sewa[] $sewas
 * @property \App\Models\Toko[] $tokos
 */
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'phone','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


	/**
	 * The attributes appended to the model's JSON form.
	 *
	 * @var array
	 */
	protected $appends = [];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['created_at', 'updated_at'];



	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function roles()
	{
		return $this->belongsToMany(
			// Model
			'App\Models\Role',
			// Pivot table
			'role_user',
			// "Our" key
			'user_id',
			// "Their" key
			'role_id'
		);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function sewas()
	{
		return $this->hasMany(
			// Model
			'App\Models\Sewa',
			// Foreign key
			'id_pembeli',
			// Local key
			'id'
		);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tokos()
	{
		return $this->hasMany(
			// Model
			'App\Models\Toko',
			// Foreign key
			'id_penjual',
			// Local key
			'id'
		);
	}



}