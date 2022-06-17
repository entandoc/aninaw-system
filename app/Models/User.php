<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'passkey', 'user_type', 'department_id'];

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
