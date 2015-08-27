<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'key' => '',
		'secret' => '',
	],
	'facebook' => [
	    'client_id' => env('FACEBOOK_ID', ''),
	    'client_secret' => env('FACEBOOK_SECRET', ''),
	    'redirect' => 'http://www.medadvisors.com/auth/facebook/callback',
	],
	'twitter' => [
	    'client_id' => env('TWITTER_ID', ''),
	    'client_secret' => env('TWITTER_SECRET', ''),
	    'redirect' => 'http://www.medadvisors.com/auth/twitter/callbak',
	],
	'google' => [
	    'client_id' => env('GOOGLE_ID', ''),
	    'client_secret' => env('GOOGLE_SECRET', ''),
	    'redirect' => 'http://www.medadvisors.com/auth/google/callback',
	],
];
