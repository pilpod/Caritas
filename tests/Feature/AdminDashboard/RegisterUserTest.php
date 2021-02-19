<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use App\Models\User;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminCanAccessRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testCreatesAdminUser()
    {
        $user = [
            'name' => 'giacomo',
            'email' =>'giacomo@dffd.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
        $response = $this->post('register', $user);
        $this->assertDatabaseCount('users', 1)
            ->assertDatabaseHas('users', ['name' => 'giacomo']);
        

        $response->assertStatus(302)
                ->assertViewIs('Backoffice.dashboard');

    }
}
