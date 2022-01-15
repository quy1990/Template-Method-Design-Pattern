<?php

namespace App\Http\Services\ReadFile;

class PDFDataMiner extends DataMiner
{

    public function openFile(string $path): void
    {
        echo "opening " . $path;
        $this->file = "PDF";
    }

    public function extractData(): void
    {
        echo "Extract " . $this->file;
        $this->rawData = "PDF";
    }

    public function parseData(): void
    {
        echo "Parse " . $this->rawData;
    }
}
