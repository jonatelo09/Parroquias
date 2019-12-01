<?php

namespace App;

use App\Temple;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model {
	public function temples() {
		return $this->hasMany(Temple::class);
	}
}
