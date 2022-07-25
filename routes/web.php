<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    $user_data = [
        "name" => "Erica",
        "surname" => "Mancini",
        "subscription" => true,
    ];
    return view("home", [
        "user" => $user_data]);
})->name("home");

Route::get("/about-us", function() {
    return view("about_us");
})->name("about");

Route::get("/products", function() {
    $products_data = [
        [
            "name" => "SEBO ACTIVE DRY TOUCH",
            "description" => "Crema gel attiva sebo riequilibrante - finish asciutto a lunga durata",
            "price" => "20,00",
            "available" => true,
        ],
        [
            "name" => "WONDER C CREAM",
            "description" => "Crema viso alla vitamina C antiossidante e illuminante",
            "price" => "42,00",
            "available" => true,
        ],
        [
            "name" => "ZERO PIÙ",
            "description" => "Crema viso idratante e protettiva + SPF 30",
            "price" => "45,00",
            "available" => false,
        ],
        [
            "name" => "ZERO SMOG",
            "description" => "Crema viso leggera, idratante e protettiva",
            "price" => "45,00",
            "available" => true,
        ]
    ];
    return view("products", ["products" => $products_data]);
})->name("products");
