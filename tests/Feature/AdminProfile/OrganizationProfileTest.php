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

    protected User $user;
    protected Role $role;

    public function setUp(): void
    {
        parent::setUp();
        $this->role = Role::factory()->create();
        $this->user = User::factory()->create();
    }
    public function testAdminCanAccessDashboardAfterLoggedIn()
    {

        $response = $this->actingAs($this->user)->get('/dashboard');

        $response->assertStatus(200)
            ->assertViewHas('user', $this->user);
    }

    public function testIfNoProfileAdminCanSeeCreateProfileSection()
    {

        $response = $this->actingAs($this->user)->get('/dashboard');

        $response->assertStatus(200)
            ->assertSee("Crear perfil de l'organització");
    }

    public function testAdminCanAccessToCreateProfileForm()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.create'))
            ->assertStatus(200)
            ->assertViewIs(('Backoffice.profileCreate'));
    }
}
