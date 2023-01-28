<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /* если пользователь не авторизован, будем отправлять его на страницу логина админ-панели. Если же он авторизован, но не является админом – отправим его на главную страницу сайта*/
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!isset($user)) {
            return redirect('login');
        }

        if (!$user->isAdmin()) {
            return redirect('/');
        }
        //dump($next($request));
        //exit;
        return $next($request);
    }
}
