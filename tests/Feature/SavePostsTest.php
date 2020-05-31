<?php


namespace freddymu\Press\Tests\Feature;


use freddymu\Press\Post;
use freddymu\Press\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SavePostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_can_be_created_with_the_factory()
    {
        $post = factory(Post::class)->create();

        $this->assertCount(1, Post::all());
    }

}