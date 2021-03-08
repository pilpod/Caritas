<?php

namespace Tests\Feature\AdminDashboard;

use Carbon\Traits\Date;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;

class UpdateDataConnectionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    protected User $user;
    protected Role $role;

    public function setUp(): void
    {
        parent::setUp();
        $this->role = Role::factory()->create();
        $this->user = User::factory()->create();
    }
    public function testAdminCanAccessToUpdateView()
    {
        $response = $this->actingAs($this->user)->get(route('user-profile-information.edit'));

        $response->assertStatus(200)
            ->assertViewIs('Auth.updateUserProfile');
    }
    public function testAdminCanUpdateEmail()
    {
        $data = [
            'name' => 'Giacomo',
            'email' => 'gi@root.com'
        ];
        $response = $this->actingAs($this->user)->put(route('user-profile-information.update', $data));

        $response->assertStatus(302);
        
        $this->assertDatabaseHas('users', [
            'name' => 'Giacomo'
            ]);
    }

    public function testAdminCanUpdatePassword()
    {
        $user = $this->user;

        $data = [
            'current_password' => $user->password,
            'password' => '0123456789',
            'password_confirmation' => '0123456789',
        ];

        $response = $this->actingAs($user)->put(route('user-password.update', $data));

        $response->assertStatus(302);
        
    }
    
}
