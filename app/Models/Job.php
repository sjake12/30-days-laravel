<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    /** @use HasFactory<\Database\Factories\JobFactory> */

    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = [
      'title',
      'description'
    ];

    public function employer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
