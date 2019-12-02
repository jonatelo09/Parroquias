<?php

namespace App;

use App\File;
use App\Manager;
use App\Prop;
use App\UsersTemple;
use Illuminate\Database\Eloquent\Model;

class Temple extends Model {
	protected $fillable = ['name_temple', 'address', 'email', 'phone', 'type'];
	public function props() {
		return $this->hasMany(Prop::class);
	}
	public function temple_user() {
		return $this->hasMany(UsersTemple::class);
	}
	public function manager() {
		return $this->belongsTo(Manager::class);
	}
	public function files() {
		return $this->hasMany(File::class);
	}
}
