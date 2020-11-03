<?php

namespace Tests\Unit;

use App\Models\Post;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * @test
     */
    public function it_knows_if_it_is_scheduled()
    {
        $post = Post::factory()->create();

        $this->assertFalse($post->isScheduled());

        $post->published_at = now()->addWeek();

        $this->assertTrue($post->isScheduled());

        $this->travel(8)->days();

        //$this->travelTo(now()->addMonth());

        //$this->travelTo(now()->subMonth());

        $this->assertFalse($post->isScheduled());

        //$this->travelBack();
    }
}
