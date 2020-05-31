<?php


namespace freddymu\Press\Fields;


use Illuminate\Support\Carbon;

class Date
{
    public static function process($type, $value)
    {
        return [
            $type => Carbon::parse($value),
            'parsed_at' => Carbon::now(),
            'foo' => 'bar'
        ];
    }
}