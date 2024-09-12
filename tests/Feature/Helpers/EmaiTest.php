<?php

namespace Tests\Feature\Helpers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Helpers\Email;
use Tests\TestCase;

class EmaiTest extends TestCase
{
    public function test_email(): void
    {
        $result = Email::validate('test@example.com');
        $this->assertTrue($result);
    }
}
