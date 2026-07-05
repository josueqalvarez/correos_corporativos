<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogTest extends TestCase
{
    public function test_blog_page_renders(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee('Blog sobre Correos Corporativos');
    }
}
