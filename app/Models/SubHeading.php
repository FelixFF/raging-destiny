<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubHeading extends Model
{
    use HasFactory;

    const SUB_HEADINGS = [
        'news' => 'WELCOME TO THE DRIFT',
        'history' => 'RD HISTORY',
        'store' => 'STORE',
        'library' => 'THE BOOKS',
        'characters' => 'CHARACTER SELECT',
        'popCulturePauseScreen' => 'POP CULTURE PAUSE SCREEN',
        'contact' => 'CONTACT'
    ];

    public static function getViewSubHeading($view)
    {
        $heading = '';

        try {
            $heading = self::SUB_HEADINGS[$view];
        } catch (Exception $e) {
            throw $e;
        }

        return $heading;
    }
}
