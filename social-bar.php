<?php

// Plugin developed and coded by Jake, https://jakee.pw/
// Tested with wonderCMS 2.4.0
if(defined('VERSION'))
	define('version', VERSION);
	defined('version') OR die('Direct access is not allowed.');
	global $Wcms;
	$Wcms->addListener('css', 'LoadSocialBarCSS');
	$Wcms->addListener('css', 'LoadSocialBarHTML');
	 
function LoadSocialBarCSS($args) {
	global $Wcms;
	$script = <<<EOT
	<link rel="stylesheet" href="{$Wcms->url('plugins/social-bar/css/bar.css')}" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
EOT;

	if(version<'2.0.0')
		array_push($args[0], $script);
	else
		$args[0].=$script;
	return $args;
}

// EDIT YOUR LINKS BELOW
// Or remove the ones you don't need
function LoadSocialBarHTML($args) {
    $script = <<<EOT
	
    <div class="social-bar">
        <ul class="social-icons">
    		<li>
    		    <a href="https://twitter.com/YourUserNameHere"> <i class="fa fa-twitter"></i></a>
    		</li>

    		<li>
    		    <a href="https://instagram.com/YourIG"> <i class="fa fa-instagram"></i></a>
    		</li>

    		<li>
    		    <a href="https://youtube.com/c/YourChannelURL"> <i class="fa fa-youtube"></i></a>
    		</li>

    		<li>
    		    <a href="https://twitch.tv/yourTwitchUsername"> <i class="fa fa-twitch"></i></a>
    		</li>

    		<li>
    		    <a href="https://facebook.com/YourFacebookURL"> <i class="fa fa-facebook"></i></a>
    		</li>
    		
    		<li>
    		    <a href="https://linkedin.com"> <i class="fa fa-linkedin"></i></a>
    		</li>
        </ul>
    </div>
	<div class="spacer-custom"></div>
EOT;
	if(version<'2.0.0')
		array_push($args[0], $script);
	else
		$args[0].=$script;
	return $args;
}

?>