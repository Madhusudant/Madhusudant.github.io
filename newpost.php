
<?php
// require Facebook PHP SDK
// see: https://developers.facebook.com/docs/php/gettingstarted/
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/src/Facebook/');
require_once(__DIR__.'/src/Facebook/autoload.php');
 
// initialize Facebook class using your own Facebook App credentials
// see: https://developers.facebook.com/docs/php/gettingstarted/#install

 
$fb = new Facebook\Facebook([
 'app_id' => '783926365298351',
 'app_secret' => '8fde0e699f734080a22da4c0f0c8acb7',
 'default_graph_version' => 'v2.2',
]);

$pageAccessToken ='EAALIZBhSInq8BAIW6uiPXxhRi9osI8gpAgOAo1k5iXyKa994OPabwg3Euvs1EqBR3GqTJ4FfY7EE7RUanZCoZANrwrEUbuCpqOaGrYg27RaHtXbZA6rZAi4YZBzQVECZBZBta0sFKxKWJje9EgnZBgTarY7Hig6MSKmxqJw2QdyVUikVwRVk3PxJgXWdfdBvEZCZCFb9kC7xTaSMDYKiIUs8TUSOv37Aw3PJSkZD';
 
// define your POST parameters (replace with your own values)
$params = [
   // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => "nostalgic - SIH2K17",
  "link" => "https://www.aicte-india.org/",
  "picture" => "",
  "name" => "How to Auto Post on Facebook with PHP",
  "caption" => "Facebook Post using php sdk",
  "description" => "Automatically post on Facebook with PHP using Facebook PHP SDK."
];
 
// post to Facebook
// see: https://developers.facebook.com/docs/reference/php/facebook-api/
try {
 $response = $fb->post('/me/feed', $params, $pageAccessToken);
  echo 'Successfully posted to Facebook';
} catch(Exception $e) {
  echo $e->getMessage();
}
?>