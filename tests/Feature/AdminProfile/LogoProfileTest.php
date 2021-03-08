<?php

namespace Tests\Feature\AdminProfile;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class LogoProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_AdminCanAccessToUploadLogoForm()
    {
        Role::factory()->create();
        $user = User::factory()->create();
        Profile::factory()->create();
        $profileId =  $user->profile->id;

        $response = $this->actingAs($user)->get(route('logo.edit', $profileId));

        $response->assertStatus(200)
            ->assertViewIs('Backoffice.logoEdit');
    }

    public function test_AdminCanUploadLogo()
    {
        Role::factory()->create();
        $user = User::factory()->create();
        Profile::factory()->create();
        $profileId =  $user->profile->id;

        Storage::fake('logo');
        $file = UploadedFile::fake()->image('bla.jpg');

        $this->actingAs($user)->post(route('logo.update', $profileId));

        Storage::disk('local');
        $this->assertFileExists(public_path('storage/logo'));
    }
}
