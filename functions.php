<?php

function get_nav() {
	return include('nav.php');
}

$operating_systems = array('Mac', 'Linux', 'Windows');
function get_operating_system() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform = "Unsupported";
    $os_array = array(
	    '/windows nt 6.3|windows nt 6.2|windows nt 6.1|windows nt 6.0|windows nt 5.2|windows nt 5.1|windows xp|windows nt 5.0|windows me|win98|win95|win16/i' => 'Windows',
	    '/macintosh|mac os x|mac_powerpc/i' =>  'Mac',
	    '/linux|ubuntu/i' => 'Linux'
	);

    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }   

    return $os_platform;
}