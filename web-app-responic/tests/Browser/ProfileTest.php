<?php

namespace Tests\Browser;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    public function user_can_login_and_redirect_to_dashboard()
    {
        $user = User::factory()->create([
            'email' => 'rivan@example.com'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('SIGN IN')
                ->assertPathIs('/dashboard');
            $user = User::where('email', 'rivan@example.com')->get();
            $user[0]->email_verified_at = Carbon::now();
            // dd($user);
            if ($user[0]->email_verified_at != null) {
                $browser->pause(1000)
                    ->pause(1000)
                    ->visit('/profile')
                    ->type('name', 'arhiansyah')
                    ->type('email', 'enyot@example.com')
                    ->press('SAVE')
                    ->refresh()
                    ->pause(1000)
                    ->type('current_password', 12345678)
                    ->type('password', 12345789)
                    ->type('password_confirmation', 12345789);
            }
            $browser->logout();
        });
    }
}
