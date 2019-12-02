<?php

namespace App;

use App\Temple;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model {
	protected $fillable = ['firstname', 'image', 'lastname', 'phone', 'email', 'type'];
	public function temples() {
		return $this->hasMany(Temple::class);
	}
}
