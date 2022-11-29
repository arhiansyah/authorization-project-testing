<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    public function user_can_login_and_redirect_to_dashboard()
    {
        $user = User::factory()->create([
            'email' => 'rivan@mail.com'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('SIGN IN')
                ->assertPathIs('/dashboard');
            $browser->logout();
        });
    }
}
