<?php

namespace Tests\Feature\Models;

use App\Models\Post;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function test_set_name_in_lowercase(): void
    {
        $post = new Post;
        $post->name = 'PROYECTO EN PHP';

        $this->assertEquals('proyecto en php', $post->name);
    }

    public function test_get_slug(): void
    {
        $post = new Post;
        $post->name = 'PROYECTO EN PHP';

        $this->assertEquals('proyecto-en-php', $post->slug);
    }
}
