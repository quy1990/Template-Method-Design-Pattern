<?php

namespace App\Http\Controllers;

use App\Http\Services\ReadFile\CSVDataMiner;
use App\Http\Services\ReadFile\PDFDataMiner;

class FileController extends Controller
{
    public function index()
    {
        $pdfDataMiner = new PDFDataMiner();
        $pdfDataMiner->mine("pdf path");

        $csvDataMiner = new CSVDataMiner();
        $csvDataMiner->mine("csv path");
    }
}
