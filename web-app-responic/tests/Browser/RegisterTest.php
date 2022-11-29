<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    public function user_can_register_with_valid_data()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('name', 'RivanTest')
                ->type('email', 'rivan@example.com')
                ->type('password', 12345678)
                ->type('password_confirmation', 12345678)
                ->press('SIGN UP')
                ->pause(1000)
                ->assertPathIs('/verify-email');
            $browser->logout();
        });
    }
}
