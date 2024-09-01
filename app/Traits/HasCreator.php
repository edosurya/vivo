<?php

namespace App\Traits;

trait HasCreator
{
    public static function bootHasCreator()
    {
        // updating created_by when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('created_by')) {
                $model->created_by = auth()?->user()?->id;
            }
        });

        // static::updating(function ($model) {
        //     if (!$model->isDirty('updated_by')) {
        //         $model->updated_by = user()?->id;
        //     }
        // });

        // static::deleting(function ($model) {
        //     // if (property_exists($model, 'deleted_by')) {
        //     //     if (!$model->isDirty('deleted_by')) {
        //     //         $model->deleted_by = user()?->id;
        //     //         $model->save();
        //     //     }
        //     // }
        //     if (!$model->forceDeleting) {
        //         $model->deleted_by = user()?->id;
        //     }
        // });
    }
}
