<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

use App\Models\User;
use App\Models\Role;
use App\Models\Language;
use App\Models\ContentSection;
use App\Models\CatalanData;



class ExplainTheProjectTest extends TestCase
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
                'section_name' => 'explain-the-project',
            ]
        );
    }


    public function testIfAdminCanAccessExplainTheProjectEditSection()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->actingAs($this->user)->get(route('explainTheProject'));
        $response->assertStatus(200);
    }

    public function testAdminCanCreateExplainTheProjectSection()
    {
        $this->withoutExceptionHandling();
        $data = [
            'spanish_explainTheProject_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
            'catalan_explainTheProject_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
        ];

        $response = $this->actingAs($this->user)->post(route('explainTheProject.store', $data));
        $response->assertStatus(200);
    }

    public function testAdminCanUpdateTextInSectionExplainTheProjectCatalan()
    {
        $this->withoutExceptionHandling();
        $catalanData = CatalanData::factory()->create([
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ]);
        $data = [
            'title_content' => $catalanData->title_content,
            'text_content' => 'This is catalan explain the project text',
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ];
       
        $response = $this->actingAs($this->user)->put(route('explainTheProject.update', $catalanData->id), $data)
        ->assertStatus(200);
        $this->assertDatabaseHas('catalan_data', [
            'text_content' => 'This is catalan explain the project text'
        ]);
    }
}
