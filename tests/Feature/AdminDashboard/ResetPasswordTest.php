<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Role;


class ResetPasswordTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminCanSeeRequestResetView()
    {
        $response = $this->get(route('password.request'));

        $response->assertStatus(200)
        ->assertViewIs('Auth.requestResetPassword');

    }
    public function testAdminCanSeeNewPasswordView()
    {
        
        Notification::fake();
        Role::factory()->create();

        $user = User::create([
       'name' => 'alvaro',
       'email' => 'alvaro@org.org',
       'password' => '87538753',
       'password_confirmation' => '87538753',
       'role_id' => 1
   ]);
        $this->post(route('password.email', ['email' => $user->email]));
        
        $token = '';
        
        Notification::assertSentTo(
            $user,
            \Illuminate\Auth\Notifications\ResetPassword::class,
            function ($notification, $channels) use (&$token) {
                $token = $notification->token;
                
                return true;
            });
            

        $response = $this->get(route('password.reset', [
            'email' => $user->email,
            'token' => $token,
            'password' => '87538753',
            'password_confirmation' => '87538753'
        ]));

        $response->assertStatus(200)
         ->assertViewIs('Auth.newPassword');
    

    }

}
