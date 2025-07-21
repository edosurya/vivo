<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Creator;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'path', 'image', 'creator_id', 'title', 'desc'];

    const CATEGORY1   = 1;
    const CATEGORY2   = 2;
    const CATEGORY3   = 3;
    const CATEGORY4   = 4;
    const CATEGORY5   = 5;
    const CATEGORY6   = 6;

    const TYPE = [
        self::CATEGORY1   => 'portrait-photography',
        self::CATEGORY2   => 'street-life-photography',
        self::CATEGORY3   => 'series-photography',
        self::CATEGORY4   => 'still-life-photography',
        self::CATEGORY5   => 'night-photography',
        self::CATEGORY6   => 'nature-architecture-photography',
    ];

    public function relatedCreator(): BelongsTo
    {
        return $this->belongsTo(Creator::class, 'creator_id', 'id');
    }

}
