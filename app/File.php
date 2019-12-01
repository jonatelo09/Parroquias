<?php

namespace App;

use App\Folder;
use Illuminate\Database\Eloquent\Model;

class File extends Model {
	public function folder() {
		return $this->belongsTo(Folder::class);
	}
}
