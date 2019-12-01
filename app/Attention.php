<?php

namespace App;

use App\Schedule;
use Illuminate\Database\Eloquent\Model;

class Attention extends Model {
	public function schedule() {
		return $this->hasMany(Schedule::class);
	}
}
