<?php

namespace App\Http\Services\ReadFile;

class CSVDataMiner extends DataMiner
{

    public function extractData(): void
    {
        echo "Extract CSV";
    }

    public function parseData(): void
    {
        echo "Parse CSV";
    }
}
