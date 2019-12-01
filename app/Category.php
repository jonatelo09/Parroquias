<?php

namespace App;

use App\Prop;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	public function props() {
		return $this->hasMany(Prop::class);
	}
}
