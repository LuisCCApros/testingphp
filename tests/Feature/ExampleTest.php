<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testHome(): void
    {
        $response = $this->get(uri: '/');

        $response->assertStatus(status: 200);
    }

    public function testPage(): void
    {
        $response = $this->get(uri: 'nosotros');

        $response->assertStatus(status: 200);
    }
}
