<?php

namespace App\Models;

/*
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * THIS FILE IS AUTO-GENERATED BY AUTOMODEL:TABLE COMMAND
 * ANY CHANGES MADE TO THIS FILE MAY BE LOST
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */

use Illuminate\Database\Eloquent\Model;

/**
 * No description found in the table comment.
 *
 * Class Bayar
 * @package App\Models
 *
 * @property integer $id
 * @property integer $id_sewa
 * @property \Carbon\Carbon $tanggal_bayar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\DetailBayar[] $detailBayars
 * @property \App\Models\Sewa $sewa
 */
class Bayar extends Model 
{

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'bayar';


	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['pivot'];


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
	protected $dates = ['tanggal_bayar', 'created_at', 'updated_at'];



	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function detailBayars()
	{
		return $this->hasMany(
			// Model
			'App\Models\DetailBayar',
			// Foreign key
			'id_bayar',
			// Local key
			'id'
		);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function sewa()
	{
		return $this->belongsTo(
			// Model
			'App\Models\Sewa',
			// Foreign key
			'id',
			// Other key
			'id_sewa'
		);
	}



}
