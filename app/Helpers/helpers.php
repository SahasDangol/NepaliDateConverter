<?php

use App\Http\Controllers\DateController;

if (!function_exists('get_nepali_date')) {
    function get_nepali_date($date)
    {
        $bsdate = new DateController();
        return $bsdate->eng_to_nep($date);

    }
}

if (!function_exists('get_english_date')) {
    function get_english_date($date)
    {
        $bsdate = new DateController();
        return $bsdate->nep_to_eng($date);

    }
}
