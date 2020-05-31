<?php


namespace freddymu\Press;


use Illuminate\Support\Facades\File;

class PressFileParser
{
    private $filename;
    private $data;

    public function __construct($filename)
    {
        $this->filename = $filename;

        $this->splitFile();
    }

    public function getData()
    {
        return $this->data;
    }

    public function splitFile()
    {
        preg_match('/^\-{3}(.*?)\-{3}(.*)/s',
            File::get($this->filename),
            $this->data
        );
    }
}