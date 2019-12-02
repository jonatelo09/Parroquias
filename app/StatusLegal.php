<?php

namespace App;

use App\Temple;
use Illuminate\Database\Eloquent\Model;

class StatusLegal extends Model {
	public function temples_estatus() {
		return $this->hasMany(Temple::class);
	}
}
