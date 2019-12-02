<?php

namespace App;

use App\Schedule;
use Illuminate\Database\Eloquent\Model;

class WeekDay extends Model {
	public function schedule() {
		return $this->hasMany(Schedule::class);
	}
}
