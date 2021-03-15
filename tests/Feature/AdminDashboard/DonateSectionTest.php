<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use App\Models\ContentSection;
use App\Models\Language;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\CatalanData;
use App\Models\SpanishData;


class DonateSectionTest extends TestCase
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
                'section_name' => 'donate',
            ]
        );
    }


    public function testIfAdminCanAccessDonateEditSection()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->actingAs($this->user)->get(route('donate'));
        $response->assertStatus(200);
    }

    public function testAdminCanCreateDonateSection()
    {
        $this->withoutExceptionHandling();
        $data = [
            'spanish_donate_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
            'catalan_donate_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
        ];

        $response = $this->actingAs($this->user)->post(route('donate.store', $data));
        $response->assertStatus(200);
    }

    public function testAdminCanUploadDonateSectionImage()
    {
        $this->withoutExceptionHandling();
        Storage::fake('section');
        
        $file = UploadedFile::fake()->image('bla.jpg');
        $data = [
            'section_image' => $file
        ];
       
        $sectionId = $this->section->id;
        $response = $this->actingAs($this->user)->put(route('donate.updateImage', $sectionId), $data);
        Storage::disk('local');
        $this->assertFileExists(public_path('storage/section'));

    }

    public function testAdminCanUpdateTextInSectionDonateCatalan()
    {
        $this->withoutExceptionHandling();
        $catalanData = CatalanData::factory()->create([
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ]);
        $data = [
            'title_content' => $catalanData->title_content,
            'text_content' => 'This is catalan donate text',
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ];
       
        $response = $this->actingAs($this->user)->put(route('donate.update', $catalanData->id), $data)
        ->assertStatus(200);
        $this->assertDatabaseHas('catalan_data', [
            'text_content' => 'This is catalan donate text'
        ]);
    }
}
