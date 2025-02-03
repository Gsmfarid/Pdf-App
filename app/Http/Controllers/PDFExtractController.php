<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFExtractController extends Controller
{
   public function extractPDF()
   {

    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile('resources/751275_com_2865_male_.pdf');

    $text = $pdf->getText();
    echo $text;

   }
}
