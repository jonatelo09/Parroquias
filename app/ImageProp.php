<?php

namespace App;

use App\Prop;
use Illuminate\Database\Eloquent\Model;

class ImageProp extends Model {
	public function prop() {
		return $this->belongsTo(Prop::class);
	}
}
