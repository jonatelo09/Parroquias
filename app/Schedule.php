<?php

namespace App;

use App\Attention;
use App\Temple;
use App\WeekDay;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model {
	public function weekday() {
		return $this->belongsTo(WeekDay::class);
	}
	public function attention_schedule() {
		return $this->belongsTo(Attention::class);
	}
	public function temple_schedule() {
		return $this->belongsTo(Temple::class);
	}
}
