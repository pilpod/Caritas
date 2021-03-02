<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class LoginUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminCanAccessLoginPage()
    {
        $this->withoutExceptionHandling();
        Role::factory()->create();
        
        $user = User::factory()->create();

        $response = $this->get(route('login'));

        $response->assertStatus(200)
            ->assertViewIs('Auth.login');
    }

 
    public function testNonAdminCanNotAccessDashboard()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->get(route('dashboard'));
        

        $response->assertStatus(302)
            ->assertRedirect('login');
    }

    public function testAdminCanAccessDashboard()
    {
        $this->withoutExceptionHandling();
        Role::factory()->create();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertStatus(200)
            ->assertViewIs('Backoffice.dashboard');
    }
}
