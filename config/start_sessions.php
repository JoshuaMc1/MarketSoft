<?php
// session_cache_limiter('private');
// $cache_limiter = session_cache_limiter();
// session_cache_expire(30);
// $cache_expire = session_cache_expire();
// session_start();

//Set the session timeout for 2 seconds

// $timeout = 2;

// //Set the maxlifetime of the session

// ini_set( "session.gc_maxlifetime", $timeout );

// //Set the cookie lifetime of the session

// ini_set( "session.cookie_lifetime", $timeout );

// //Start a new session
// session_start();

// //Set the default session name
// $s_name = session_name();

// //Check the session exists or not
// if(isset( $_COOKIE[ $s_name ] )) {
//     setcookie( $s_name, $_COOKIE[ $s_name ], time() + $timeout, '/' );
//     echo "Session is created for $s_name.<br/>";
// } else echo "Session is expired.<br/>";