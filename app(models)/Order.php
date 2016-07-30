<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //This Model is Order Table
	protected $table='orders';
	protected $fillable=['id', 'customer_id', 'name'];
	
	//Calling a another inside Order table Model in order to build relationship
	public function customer(){
		return $this->belongsTo('App\Customer');
	}
	
}
