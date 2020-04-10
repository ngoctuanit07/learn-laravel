<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to johnnguyenn.com'];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('johnnguyenn.pdf');
    }
}
