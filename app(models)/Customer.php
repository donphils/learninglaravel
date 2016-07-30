<?php
//This Model is for Laravel Video Tutorial
namespace App;

use Illuminate\Database\Eloquent\Model;

Class Customer extends Model
{
	protected $table = 'customers';
	protected $fillable = ['id', 'Name'];
}
