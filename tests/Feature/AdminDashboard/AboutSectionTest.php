<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;

class AboutSectionTest extends TestCase
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


    public function test_adminCanAccessAboutSectionView()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.about'));

        $response->assertStatus(200)
        ->assertViewIs('Backoffice.about');
    }

    public function test_adminCanSetupAboutSectionEs()
    {
        $data = [ 
                'content_title_es' => 'lorem spanish',
                'content_title_cat' => 'lorem catalan',
                'content_text_es' => 'Lorem ipsum dolor spanish.',
                'content_text_cat' => 'Lorem ipsum dolor catalan.',              
    ];

        $response = $this->actingAs($this->user)->post(route('dashboard.about', $data));
        $this->assertDatabaseHas( 'es_data', $data);
        $this->assertDatabaseHas( 'cat_data', $data);

        $response->assertStatus(201)
        ->assertViewIs('Backoffice.about')
        ->assertViewHasAll($data);

    }
}
