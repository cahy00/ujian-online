<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
		protected $fillable = [
			'classromm_id',
			'nisn',
			'name',
			'password',
			'gender'
		];
}
