<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model {
	public function files() {
		return $this->hasMany(File::class);
	}
}
