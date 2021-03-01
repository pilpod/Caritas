<?php

namespace Tests\Feature\Feature\AdminProfile;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use phpDocumentor\Reflection\Types\Null_;

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

    public function testAdminCanStoreCaritasProfile()
    {
        $data = [
            'user_id'=> 1,
            'direction' => 'carrer blablabla',
            'city' => 'Badalona',
            'phone' => '123123123',
            'bankAccount' => 'ES191231123232',
            'bizum' => '123123123',
            'logo' => null
        ];
        $response = $this->actingAs($this->user)->post(route('dashboard.store'), $data)
        ->assertStatus(201);
        $this->assertDatabaseCount('profiles', 1);
        $this->assertDatabaseHas('profiles', $data);
    }
}
