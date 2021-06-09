<?php

namespace Tests\Unit;

use App\Http\Controllers\PostController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;;

class PostTest extends TestCase
{
    public function test_posts_can_be_listed()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
    }

    public function regQuick()
    {
        return $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    }

    public function test_posts_can_be_created()
    {
        $response = $this->post('/testposts/saverecord', [
            'title' => 'Created Via Test',
            'content' => 'Blah Blah Blah',
            'category' => 'Article',
            'author_id' => 13
        ]);

        $response->assertRedirect('/posts/created-via-test');
    }

    public function test_posts_can_be_updated()
    {
        $response = $this->post('/testposts/updaterecord',
            [
                'title' => 'Created Via Test',
                'content' => 'Blah Blah Blah - then updated',
                'category' => 'Article',
                'author_id' => 13
            ],
            [
                'id' => 1,
                "title" => 'Created Via Test',
                "content" => 'Blah Blah Blah',
                "category" => 'Article',
                "slug" => 'created-via-test',
                "author_id" => "13"
            ]);

        $response->assertRedirect('/posts');
    }
}
