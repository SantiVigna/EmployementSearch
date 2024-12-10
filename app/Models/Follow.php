<?php

namespace App\Models;

use App\Models\Employment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment_id',
        'news',
    ];

    public function employment() {
        return $this->belongsTo(Employment::class);
    }
}
