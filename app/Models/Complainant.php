<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complainant extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['appeal_id', 'name', 'email', 'phone_number', 'is_anonymous'];
}
