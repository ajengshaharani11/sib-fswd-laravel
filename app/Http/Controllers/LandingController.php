<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $products = [
            [
                "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
                "category" => "Diskon",
                "name" => "Dikta dan Hukum",
                "price" => 950000,
                "sale_price" => 76000,
                "brands" => "Dhian Farah",
                "rating" => 4
            ],
            [
                "id" => "105aea64-0b01-4883-b536-9889f06498d7",
                "category" => "cellphone",
                "name" => "sang pemanah",
                "price" => 120000,
                "sale_price" => 100000,
                "brands" => "Paulo",
                "rating" => 4
            ],
            [
                "id" => "bb2d6c9e-4a86-485c-bde6-2a83c2b30dd5",
                "category" => "tablet",
                "name" => "Asmaraloka",
                "price" => 60000,
                "sale_price" => 55000,
                "brands" => "Arata",
                "rating" => 5
            ],
            [
                "id" => "c2209c46-99b1-4cf5-a1cb-243c4d6ff3bb",
                "category" => "wearable",
                "name" => "Fair Unfair",
                "price" => 84000,
                "sale_price" => 75000,
                "brands" => "Apple",
                "rating" => 3
            ],
            [
                "id" => "8fc7a400-d1e4-4fa1-926a-2ecfdc3266d4",
                "category" => "laptop",
                "name" => "EAVESDROP",
                "price" => 89000,
                "sale_price" => 83000,
                "brands" => "Asus",
                "rating" => 4
            ],
            [
                "id" => "976448e1-8e60-48a3-b379-1d1e6973c268",
                "category" => "accessories",
                "name" => "",
                "price" => 59000,
                "sale_price" => 46000,
                "brands" => "Logitech",
                "rating" => 4
            ],
            [
                "id" => "5f6f1894-f66b-438e-9e12-964273a76f3d",
                "category" => "laptop",
                "name" => "Lenovo V14 G2 AMD Ryzen 3",
                "price" => 7999000,
                "sale_price" => 6667000,
                "brands" => "Lenovo",
                "rating" => 5
            ],
            [
                "id" => "f73bf72e-73c9-4f33-b5f3-9746a4cf6112",
                "category" => "wearable",
                "name" => "Samsung Galaxy Watch5 44mm",
                "price" => 3999000,
                "sale_price" => 3709000,
                "brands" => "Samsung",
                "rating" => 4
            ],
            [
                "id" => "68f00d3c-cf44-46e6-816c-57fdc82f9eae",
                "category" => "tablet",
                "name" => "Samsung Galaxy Tab A7 Lite 3/32GB",
                "price" => 2499000,
                "sale_price" => 2229000,
                "brands" => "Samsung",
                "rating" => 5
            ],
            [
                "id" => "bf572054-0d4b-4ada-abe8-01021daac303",
                "category" => "accessories",
                "name" => "Baseus Bowie WM05 True Wireless Bluetooth",
                "price" => 1489000,
                "sale_price" => 499000,
                "brands" => "Baseus",
                "rating" => 5
            ]
        ];

        return view('landing', compact('products'));
    }
}
