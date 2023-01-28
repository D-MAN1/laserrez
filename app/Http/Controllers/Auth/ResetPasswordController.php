<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
//App\Http\Controllers\Auth\ResetPasswordController@showResetForm       
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Вы получаете это электронное письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.')
            ->action('Cброс пароля', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется.');
    }
}
