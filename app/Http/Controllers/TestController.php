<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $english_date="2019-06-20";
        $nepali_date="2052-08-03";

        echo get_nepali_date($english_date);// A.D. to B.S.

        echo "\n";

        echo get_english_date($nepali_date);// B.S. to A.D.
    }
}
