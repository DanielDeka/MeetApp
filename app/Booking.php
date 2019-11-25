<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $table = 'bookings';
    protected $primaryKey = 'id_booking';
    public $timestamps = false;

    public function getMitra()
    {
    	return $this->hasOne('App\Mitra', 'id_mitra', 'id_mitra');
    }

    public function getPengguna()
    {
    	return $this->hasOne('App\User', 'id', 'id_pengguna');
    }
}
