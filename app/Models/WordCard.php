<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'word',
        'description_video',
        'description',
        'image_url',
        'video_url',
        
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function descriptions()
    {
        return $this->hasMany(ReportDescription::class);
    }
}
