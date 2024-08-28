<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        Authorise.php
 * Location:        FILE_LOCATION
 * Project:         ym-SaaS-Vanilla-MVC
 * Date Created:    2024/08/28
 *
 * Author:          Yui_Migaki
 *
 */

namespace Framework\Middleware;

use Framework\Session;

class Authorise
{
    public static function isAuthenticated() {
        return Session::has('user');
    }

    public function handle($role) {
        if ($role === 'guest' && $this->isAuthenticated()) {
            return redirect('/');
        }

        if ($role === 'auth' && !$this->isAuthenticated()) {
            return redirect('auth/login');
        }
    }
}