<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRootRouteTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLoginRouteTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegisterRouteTest()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testRedirectToHomeAfterLogin()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/home');

        $user->delete();
        $response->assertStatus(200);

    }
}
