<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;


class ProfileTest extends TestCase
{
    public function test_upload(): void
    {
        Storage::fake('local');
        $response = $this->post('profile2', [
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
        ]);

        $this->assertTrue(Storage::disk('local')->exists("profiles/{$photo->hashName()}"));

        $response->assertRedirect('profile2');
    }
}
