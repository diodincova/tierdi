<?php

namespace App\Service;

class IntrovertService
{
    /** @var string */
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function read()
    {
        if (!file_exists($this->filename)) {
            return false;
        }

        return file_get_contents($this->filename);
    }

    public function write($data)
    {
        return file_put_contents($this->filename, $data);
    }
}