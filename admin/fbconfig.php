<?php 
define('APP_ID','671624434292183');
define('APP_SECRET','b711e6774826664c7a46885302453679');
define('API_VERSION','v15.0');
define('FB_BASE_URL','http://localhost/smk-pgri-1-bkl/admin/login.php');

if(!session_id()){
	session_start();
	
};

require_once(__DIR__.'/Facebook/autoload.php');
$fb = new Facebook\Facebook([
'app_id' => APP_ID,
'app_secret' => APP_SECRET,
'default_graph_version' => API_VERSION,
]);

$fb_helper = $fb->getRedirectLoginHelper();

//try to get access token
try{
	if(isset($_SESSION['facebook_access_token']))
	{$accessToken = $_SESSION['facebook_access_token'];}
	else{$accessToken = $fb_helper->getAccessToken();}
}catch(FacebookResponseException $e){
	echo 'Facebook API Error: '. $e->getMessage();
	exit;
}catch(FacebookSDKException $e){
	echo 'Facebook SDK Error: ' . $e->getMessage();
	exit;
}
?>