<?php

namespace App;

use App\Folder;
use App\Temple;
use Illuminate\Database\Eloquent\Model;

class File extends Model {
	public function folder() {
		return $this->belongsTo(Folder::class);
	}
	public function temple() {
		return $this->belongsTo(Temple::class);
	}
}
