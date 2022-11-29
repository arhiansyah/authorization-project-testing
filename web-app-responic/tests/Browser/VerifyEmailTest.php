<?php

namespace Tests\Browser;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VerifyEmailTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    public function user_can_login_and_verify_email()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('name', 'RivanTest')
                ->type('email', 'rivan@example.com')
                ->type('password', 12345678)
                ->type('password_confirmation', 12345678)
                ->press('SIGN UP')
                ->pause(1000)
                ->assertPathIs('/verify-email')
                ->press('SEND VERIFICATION EMAIL');
            $user = User::where('email', 'rivan@example.com')->get();
            $user[0]->email_verified_at = Carbon::now();
            // dd($user);
            if ($user[0]->email_verified_at != null) {
                $browser->pause(1000)
                    ->pause(1000)
                    ->visit('/dashboard')
                    ->logout();
            }
            $browser->logout();
        });
    }
}
