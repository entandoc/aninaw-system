<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['appeal_id', 'message', 'logged_by'];

    public function appeal() {
        return $this->belongsTo(Appeal::class);
    }
}
