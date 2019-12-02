<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model {
	protected $fillable = ['name_fol', 'description_fol'];
	public function files() {
		return $this->hasMany(File::class);
	}
}
