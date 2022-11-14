<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $data = [
            '0' => ['name' => "Student 1", 'Kelas' => "LG01", 'Nilai' => 90, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '1' => ['name' => "Student 2", 'Kelas' => "LG01", 'Nilai' => 85, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '2' => ['name' => "Student 3", 'Kelas' => "LG01", 'Nilai' => 50, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '3' => ['name' => "Student 4", 'Kelas' => "LG01", 'Nilai' => 60, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '4' => ['name' => "Student 5", 'Kelas' => "LG01", 'Nilai' => 75, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '5' => ['name' => "Student 6", 'Kelas' => "LG01", 'Nilai' => 70, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '6' => ['name' => "Student 7", 'Kelas' => "LG01", 'Nilai' => 64, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '7' => ['name' => "Student 8", 'Kelas' => "LG01", 'Nilai' => 40, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '8' => ['name' => "Student 9", 'Kelas' => "LG01", 'Nilai' => 70, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '9' => ['name' => "Student 10", 'Kelas' => "LG01", 'Nilai' => 78, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '10' => ['name' => "Student 11", 'Kelas' => "LG01", 'Nilai' => 70, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
            '11' => ['name' => "Student 12", 'Kelas' => "LG01", 'Nilai' => 78, 'image' => "https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"],
        ];
        return view('home', compact('data'));
    }
}
