<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment',
        'state',
        'company',
        'country',
        'contact',
        'image',
    ];

    public function follows() {
        return $this->hasMany(Follow::class);
    }
}
