<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view('pages.home');
    }

    public function loaiSanpham() {
        return view('pages.loai_sanpham');
    }
}
