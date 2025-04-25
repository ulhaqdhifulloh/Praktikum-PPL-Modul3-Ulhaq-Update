<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesDeleteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenotes
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
            ->click('#delete-1')
            ;
        });
    }
}
