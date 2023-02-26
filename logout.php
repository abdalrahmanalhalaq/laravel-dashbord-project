<?php
/*
    public function Logout(){Go to my AuthController To see the operations} And Make route for this function ..

    ----------------------------------------------------------------------
        public function logout(Request $request)
        {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            /**
             * invalidate means :flush ,
             *  Flush means close or clear the session;

            return redirect()->guest(route('cms.login'));
            // Make him guest(Not admin) and redirect him to login page ;
        }
    ----------------------------------------------------------------------


        if you have'nt a parent his URI like this :
        Route::view('/', 'cms.parent')->name('parent');

        1- you will go to inside kernel
        2-in the protected routeMiddleware search about guest
        3- then go to inside it
        4- go to inside HOME in these line bellow:
               *---------------------------------------------*
                return redirect(RouteServiceProvider::HOME);
               *---------------------------------------------*
        5- Then u can edit it to your parent or blade route
            like this :
            ---------------------------------
            public const HOME = '/cms/admin';
            ---------------------------------

