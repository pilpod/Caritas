<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
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
        $this->withoutExceptionHandling();

        Role::factory()->create();

        $user = [
            'name' => 'giacomo',
            'email' =>'giacomo@dffd.com',
            'password' => '123456789',
            'password_confirmation' => '123456789',
        ];
        $response = $this->post('register', $user);

        $this->assertDatabaseCount('users', 1)
            ->assertDatabaseHas('users', [
                'name' => 'giacomo',
                'id_role' => 1
                ]);
        

        $response->assertStatus(302)
                ->assertRedirect('dashboard');
    }

    public function testNewUserHasAdminRole() 
    {
        $this->withoutExceptionHandling();

        Role::factory()->create();

        $user = User::factory()->create();
       
        $response = $user->role->role;

        $this->assertEquals('admin', $response);

    }
}
