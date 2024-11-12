<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function formatDate($created_at): string
    {
        $created_at = Carbon::parse($created_at);
        $now = Carbon::now();

        // Si la date de publication est inférieure à 24 heures
        if ($now->diffInHours($created_at) < 24) {
            return Carbon::parse($now)->diffInHours($created_at) . ' heure' . ($now->diffInHours($created_at) > 1 ? 's' : '');
        }

        // Si la date de publication est supérieure à 24 heures mais inférieure à un an
        if ($now->diffInDays($created_at) < 365) {
            return $created_at->format('j M');
        }

        // Si la date de publication est supérieure à un an
        return $created_at->format('j M Y');
    }

    public static function formatFullDate($created_at): string
    {
        $created_at = Carbon::parse($created_at);
        return $created_at->format('j M Y');
    }
}
