<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'news',
    ];

    public function work() {
        return $this->belongsTo(Work::class);
    }
}
