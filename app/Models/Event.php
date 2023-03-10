<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'category',
        'datetime'
    ];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
