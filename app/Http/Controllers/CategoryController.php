<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage()
    {
        return 'Food and Beverage';
    }

    public function beautyHealth()
    {
        return 'Beauty and Health';
    }

    public function homeCare()
    {
        return 'Home Care';
    }

    public function babyKid()
    {
        return 'Baby and Kids';
    }
}
