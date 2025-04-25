<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     * @group registration
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->waitForLink('Register', 5)
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->waitFor('input[name="name"]', 5)
                    ->type('name', 'Dhifulloh Dhiya Ulhaq')
                    ->type('email', 'ulworld5mail@gmail.com')
                    ->type('password', '12345')
                    ->type('password_confirmation', '12345')
                    ->waitFor('button[type="submit"]', 5)
                    ->press('REGISTER')
                    ->waitForLocation('/dashboard', 5)
                    ->assertPathIs('/dashboard')
                    ->assertAuthenticated();
        });
    }
}
