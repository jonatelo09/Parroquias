<?php

namespace App;

use App\Temple;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UsersTemple extends Model {
	public function user() {
		return $this->belongsTo(User::class);
	}
	public function temple() {
		return $this->belongsTo(Temple::class);
	}
}
