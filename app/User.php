<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*use Mail;
use Illuminate\Auth\Notifications\ResetPassword;*/

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
    /*public function sendPasswordResetNotification($token)
    {
        $user = new User();
        Mail::send('auth.passwords.email', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');
            $m->to($user->email, $user->name)->subject('Your Password Reset!');
        });
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('444.')
            ->action('Rcc', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('vv.');
    }*/
}
