<?php


namespace freddymu\Press\Fields;


use freddymu\Press\MarkdownParser;

class Body
{
    public static function process($type, $value)
    {
        return [
            $type => MarkdownParser::parse($value)
        ];
    }
}