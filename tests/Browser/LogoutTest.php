<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'ulworld5mail@gmail.com')
            ->type('password', '12345')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->click('#click-dropdown', 5)
            ->pause(1000)
            ->clickLink('Log Out')
            ->assertPathIs('/');
        });
    }
}
