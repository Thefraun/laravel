<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Spatie\Permission\Traits\HasRoles;

class Model extends Eloquent
{
	use HasRoles;

	protected $guarded = [];
	protected $guard_name = 'web';
}