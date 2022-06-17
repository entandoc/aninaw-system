<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => 'Pending'
    ];

    protected $fillable = ['flag'];

    public function complainant() {
        return $this->hasOne(Complainant::class);
    }

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function complaint() {
        return $this->hasOne(Complaint::class);
    }

    public function log() {
        return $this->hasMany(Log::class);
    }
}
