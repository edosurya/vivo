<?php

namespace App\Traits;

use App\Models\Reservation;


trait RegistrationNumber
{
    protected static function bootRegistrationNumber()
    {
        static::creating(static function ($model) {
            $number = '00001';
            $date = date("Y");
            $reservation = Reservation::where('created_at', 'like', '%' . $date . '%')
                ->latest('id')->lockForUpdate()->first();

            if ($reservation) {
                $number = str_pad(substr($reservation->reservation_code, -5) + 1, 5, '0', STR_PAD_LEFT);
            }

            $model->reservation_code = "AIDAY" . date('y') . "" . $number;
        });
    }
}
