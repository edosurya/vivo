<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'path',
        'thumbnail',
        'title',
        'desc',
        'creator',
        'location'
    ];

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


    const IMAGE_CATEGORY = [
        self::CATEGORY1   => 'Portrait Photography',
        self::CATEGORY2   => 'Street Life Photography',
        self::CATEGORY3   => 'Series Photography',
        self::CATEGORY4   => 'Still Life Photography',
        self::CATEGORY5   => 'Night Photography',
        self::CATEGORY6   => 'Nature & Architecture Photography',
    ];

    public static function getCategoryIdBySlug($slug)
    {
        return array_search($slug, self::TYPE);
    }
}