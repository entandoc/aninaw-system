<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function complaint() {
        return $this->hasOne(Complaint::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
