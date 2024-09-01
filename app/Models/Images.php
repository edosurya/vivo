<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Creator;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'path', 'image', 'creator_id'];

    const CATEGORY1   = 1;
    const CATEGORY2   = 2;
    const CATEGORY3   = 3;
    const CATEGORY4   = 4;
    const CATEGORY5   = 5;
    const CATEGORY6   = 6;

    const TYPE = [
        self::CATEGORY1   => 'category1',
        self::CATEGORY2   => 'category2',
        self::CATEGORY3   => 'category3',
        self::CATEGORY4   => 'category4',
        self::CATEGORY5   => 'category5',
        self::CATEGORY6   => 'category6',
    ];

    public function relatedCreator(): BelongsTo
    {
        return $this->belongsTo(Creator::class, 'creator_id', 'id');
    }

}
