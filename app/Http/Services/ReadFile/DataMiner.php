<?php

namespace App\Http\Services\ReadFile;

abstract class DataMiner
{
    private $file;
    private $rawData;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @param mixed $rawData
     */
    public function setRawData($rawData): void
    {
        $this->rawData = $rawData;
    }

    public function mine(string $path)
    {
        $this->openFile($path);
        $this->extractData();
        $this->parseData();
        $this->closeFile();
    }

    public function openFile(string $path)
    {
        echo "Open " . $path;
    }

    abstract public function extractData();

    abstract public function parseData();

    public function closeFile()
    {
        echo "Close file\n";
    }
}
