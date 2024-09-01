<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Images;

class Creator extends Model
{
    use SoftDeletes, Notifiable;

    protected $guarded = [];
    protected $table = 'creators';

    public function relatedImages(): HasMany
    {
        return $this->hasMany(Images::class, 'creator_id', 'id');
    }

}
