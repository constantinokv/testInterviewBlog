<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItStoresPostWithAllFields()
    {
        $data = [
            'titulo' => 'Test Title',
            'autor' => 'Test Author',
            'fecha' => '2023-11-16',
            'contenido' => 'Test Content',
        ];

        $response = $this->post('/posts/store', $data);

        $response->assertRedirect('/posts/create');
        $this->assertDatabaseHas('posts', $data);
    }

    public function testItRequiresTitle(()
    {
        $response = $this->post('/posts/store', [
            'autor' => 'Test Author',
            'fecha' => '2023-11-16',
            'contenido' => 'Test Content',
        ]);

        $response->assertSessionHasErrors('titulo');
    }

    public function testItRequiresContent()
    {
        $response = $this->post('/posts/store', [
            'titulo' => 'Test Title',
            'autor' => 'Test Author',
            'fecha' => '2023-11-16',
        ]);

        $response->assertSessionHasErrors('contenido');
    }
}
