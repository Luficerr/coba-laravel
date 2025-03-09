<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AboutController extends Controller {
    public function index() {
        return view('about', [
            "title" => "About",
            "name" => "Lutfi Faiz Ziyadatullah",
            "email" => "20230810111@uniku.ac.id",
            "image" => "20240924_112600.jpg",
            "active" => "about"
        ]);
    }
}
