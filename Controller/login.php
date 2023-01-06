<?php
if (route(0) == 'login'){
    if (isset($_POST['submit'])){
        add_session('hata', 'mesajınız eklendi!');
        $email = post('emailadress');
        $password = post('password');

        echo $email.' '.$password;

    }
    view('auth/login');
}