<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbjadCard extends Model
{use HasFactory;

    // protected $guarded = [
    //     'id'
    // ];
    protected $fillable = [
        'abjad',
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
