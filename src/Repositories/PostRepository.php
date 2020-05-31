<?php


namespace freddymu\Press\Repositories;


use freddymu\Press\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PostRepository
{
    public function save($post)
    {
        Post::updateOrCreate([
            'identifier' => $post['identifier']
        ], [
            'slug' => Str::slug($post['title']),
            'title' => $post['title'],
            'body' => $post['body'],

            // the prop extra already cast to array in the model properties
            // no need to use json_encode
            'extra' => $this->extra($post)
        ]);
    }

    private function extra($post)
    {
        $extra = $post['extra'] ?? [];
        $attributes = Arr::except($post, ['title', 'body', 'identifier', 'extra']);

        return array_merge($extra, $attributes);
    }
}