<?php

namespace Tests\Feature\Feature\AdminProfile;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class OrganizationProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminCanAccessDashboardAfterLoggedIn()
    {
        
        Role::factory()->create();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200)
            ->assertViewHas('user', $user);
    }
}
