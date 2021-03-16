<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Role;
use App\Models\Language;
use App\Models\ContentSection;

class PartnerSectionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp(): void
    { 
        
        parent::setUp();
        $this->role = Role::factory()->create();
        $this->user = User::factory()->create();
        $this->spanishLanguage = Language::factory()->create(
            [
                'language_code' => 'es',
            ]
        );
        $this->catalanLanguage = Language::factory()->create(
            [
                'language_code' => 'cat',
            ]
        );
        $this->section = ContentSection::factory()->create(
            [
                'section_name' => 'partner',
            ]
        );
    }


    public function testIfAdminCanAccessPartnerEditSection()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->actingAs($this->user)->get(route('partner'));
        $response->assertStatus(200)
        ->assertViewIs('Backoffice.partner');
    }

    public function testAdminCanCreatePartnerSection()
    {
        $this->withoutExceptionHandling();
        $data = [
            'spanish_partner_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
            'catalan_partner_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
        ];

        $response = $this->actingAs($this->user)->post(route('partner.store', $data));
        $response->assertStatus(200);
    }

}
