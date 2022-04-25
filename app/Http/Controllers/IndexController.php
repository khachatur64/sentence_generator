<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function download(Request  $request)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<span>'.$request->txtarea.'</span>');
        return $pdf->download('sentence.pdf');
    }
}
