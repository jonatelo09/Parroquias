<?php

namespace App;

use App\Prop;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $fillable = ['name_cat'];
	public function props() {
		return $this->hasMany(Prop::class);
	}
}
