<?php

namespace App\Helpers;

class NumberHelper
{
    public static function formatNumber($number): int|string
    {
        switch($number) {
            case $number < 900:
                //between 0 - 900
                return (int)number_format($number);
            case ($number < 900000):
                //between 0.9k - 850k
                return (string)number_format($number / 1000) . 'k';
            case $number < 900000000:
                //between 0.9m - 850m
                return (string)number_format($number / 1000000) . 'M';
            case $number < 900000000000:
                //between 0.9b - 850b
                return (string)number_format($number / 1000000000) . 'B';
            default:
                return (string)number_format($number / 1000000000000) . 'T';
        }
    }
}
