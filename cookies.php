<?php
    session_start();
    $cookieName = "testCookie";
    $cookieValue = "Test Cookie";
    $timespan = 60 * 60 * 24;//time value for a day in seconds
    
    //call function to create a cookie, supply the name, value and duration
    //full list of params name, value, expire, path, domain, secure, httponly
    //must call before any html tags
    setcookie($cookieName, $cookieValue, time() + $timespan); 

     if(!isset($_COOKIE["testCookie"]))
     {
        echo 'A COOKIE DOES NOT EXIST';
     }
     else
     {
         echo 'COOKIE VALUE IS : ' . $_COOKIE[$cookieName];//call the cookie by its name to acces value
     }
    //to destroy a cookie create a cookie with the same name and set its expiry to the past
    //     setcookie($cookieName, $cookieValue, time() - $timespan);
     ?> 