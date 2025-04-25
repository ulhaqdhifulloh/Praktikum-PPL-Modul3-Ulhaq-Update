<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotestEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tesnote
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
                    ->assertSee('Dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->click('@edit-1')
                    ->assertPathIs('/edit-note-page/1')
                    ->type('title', 'Praktikum PPL Modul 3')
                    ->type('description', 'Modul 3 PPL ini bikin lelah')
                    ->press("UPDATE")
                    ;
        });
    }
}
