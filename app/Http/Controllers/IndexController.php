<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function download(Request  $request)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<span>'.$request->txtarea.'</span>');
        return $pdf->download('sentence.pdf');
    }
}
