<?php


namespace freddymu\Press\Console;


use freddymu\Press\Facades\Press;
use freddymu\Press\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ProcessCommand extends Command
{
    protected $signature = 'press:process';

    protected $description = 'Update blog posts.';

    public function handle()
    {
        if (Press::configNotPublished()) {
            return $this->warn('Please publish the config file by running \'php artisan vendor:publish --tag=press-config\'');
        }

        try {

            $posts = Press::driver()->fetchPosts();

            foreach ($posts as $post) {

                Post::create([
                    'identifier' => $post['identifier'],
                    'slug' => Str::slug($post['title']),
                    'title' => $post['title'],
                    'body' => $post['body'],
                    'extra' => $post['extra'] ?? []
                ]);

            }

        } catch (\Exception $e) {

            $this->error($e->getMessage());

        }
    }
}