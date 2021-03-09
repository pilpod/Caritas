<?php

namespace Tests\Feature\LanguageTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class SetUpLanguageTest extends TestCase
{
    Use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_DefaultLanguageIsES()
    {
        $response = App::getLocale();
        $this->assertEquals('es', $response);
    }

    public function test_languageChangeWhenUserSelectsLanguage()
    {
        $language = 'cat';
        $response = $this->get('/home/' . $language);
        $locale = App::getLocale();
        $this->assertEquals('cat', $locale);
        $response->assertRedirect();
    }
    
    public function test_UserSeeContentInLanguageChosen()
    {
        $language = 'es';
        $locale = App::setLocale($language);
        $response = $this->get('/');
        $response->assertSee('quien somos');


    }
}
