<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResetPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminCanSeeRequestResetView()
    {
        $response = $this->get(route('password.request'));

        $response->assertStatus(200)
        ->assertViewIs('Auth.resetPassword');

    }
}
