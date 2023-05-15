<?php

    function mySetCookie()
    {
        setcookie('name','Bob',time() + 3600, '/', '', 0);
    }
    function myDeleteCookie()
    {
        // setcookie('name','Bob',time() - 3600, '/', '', 0);
        unset($_COOKIE['name']);
    }

    function myGetCookie()
    {
        echo $_COOKIE['name'];
    }

    mySetCookie();
    // myDeleteCookie();
    myGetCookie();