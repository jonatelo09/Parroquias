<?php

namespace App;

use App\Temple;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UsersTemple extends Model {
	protected $fillable = ['user_id', 'temple_id'];
	public function user() {
		return $this->belongsTo(User::class);
	}
	public function temple() {
		return $this->belongsTo(Temple::class);
	}
}
