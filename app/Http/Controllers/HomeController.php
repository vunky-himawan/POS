<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return response()->view("welcome", [
            "categories" => [
                [
                    "id" => 1,
                    "name" => "Food Beverage",
                    "slug" => "food-beverage",
                ],
                [
                    "id" => 2,
                    "name" => "Beauty Health",
                    "slug" => "beauty-health",
                ],
                [
                    "id" => 3,
                    "name" => "Home Care",
                    "slug" => "home-care",

                ],
                [
                    "id" => 4,
                    "name" => "Baby Kid",
                    "slug" => "baby-kid",
                ],
            ]
        ]);
    }
}
