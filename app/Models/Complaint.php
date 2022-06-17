<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['appeal_id', 'department_id', 'subject', 'description', 'image'];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function appeal() {
        return $this->belongsTo(Appeal::class);
    }
}
