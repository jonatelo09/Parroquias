<?php

namespace App;

use App\Category;
use App\ImageProp;
use App\Temple;
use Illuminate\Database\Eloquent\Model;

class Prop extends Model {
	public function images_pros() {
		return $this->hasMany(ImageProp::class);
	}

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function temple() {
		return $this->belongsTo(Temple::class);
	}
}
