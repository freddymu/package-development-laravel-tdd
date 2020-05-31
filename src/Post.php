<?php


namespace freddymu\Press;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $casts = [
        'extra' => 'array'
    ];

    public function extra($field)
    {
        //return optional($this->extra)->$field;
        return $this->extra[$field] ?? null;
    }
}