<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel;
use App\Models\ProductsModel;

class PageController extends Controller
{
    public function getIndex() {
        $slides = SlideModel::all();
        $new_product = ProductsModel::where('new',1)->get();
        return view('pages.home', compact('slides'));
    }

    public function loaiSanpham() {
        return view('pages.loai_sanpham');
    }

    public function chitiet_sanpham() {
        return view('pages.chitiet_sanpham');
    }

    public function lienhe() {
        return view('pages.lienhe');
    }
}
