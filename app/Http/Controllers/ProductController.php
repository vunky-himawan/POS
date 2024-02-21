<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function show(): Response
    {
        $category = str_replace("-", " ", basename(request()->path()));
        return response()->view(
            "product.products",
            [
                "datas" => [
                    "food-beverage" => [
                        "Bakso",
                        "Soto",
                        "Mie Ayam",
                        "Rawon"
                    ],
                    "beauty-health" => [
                        "Lip balm",
                        "Lip scrub",
                        "Lip mask",
                        "Sampo",
                        "Kondisioner"
                    ],
                    "home-care" => [
                        "Sapu",
                        "Pel-pelan",
                        "Pembersih Kaca",
                        "Pembersih Toilet"
                    ],
                    "baby-kid" => [
                        "Popok",
                        "Minyak Kayu Putih",
                        "Susu Formula"
                    ]
                ],
                "category" => $category,
                "categoryUrl" => basename(request()->path())
            ]
        );
    }
}
