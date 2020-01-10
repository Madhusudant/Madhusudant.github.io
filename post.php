
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

 // using mysqli_query instead



 

//getting id from url
$id = $_GET['id'];


 
//selecting data associated with this particular id


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($new))
{


    $cname = $res['cname'];
            $cemail = $res['cemail'];
            $phone = $res['phone'];
             $burID = $res['burID'];
              $cellID = $res['cellID'];
               $delID = $res['delID'];
                $nameEvent = $res['nameEvent'];
                 $typeEvent = $res['typeEvent'];
                  $sDate = $res['sDate'];
                   $eDate = $res['eDate'];
                    $sTime = $res['sTime'];
                     $eTime = $res['eTime'];
                     $lEvent = $res['lEvent'];
                      $venues = $res['venues'];

                $addr = $res['addr'];
                 $canteenID = $res['canteenID'];
                  $cater = $res['cater'];
                  $message = $res['message'];
                  $checkbox1 = $res['meal'];
}





define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/src/Facebook/');
require_once(__DIR__.'/src/Facebook/autoload.php');
$fb = new Facebook\Facebook([
 'app_id' => '783926365298351',
 'app_secret' => '8fde0e699f734080a22da4c0f0c8acb7',
 'default_graph_version' => 'v2.2',
]);


//Post property to Facebook
$linkData = [
 'link' => 'www.yoururl.com',
 'message' => 'jh'
  
];
$pageAccessToken ='EAALIZBhSInq8BAIW6uiPXxhRi9osI8gpAgOAo1k5iXyKa994OPabwg3Euvs1EqBR3GqTJ4FfY7EE7RUanZCoZANrwrEUbuCpqOaGrYg27RaHtXbZA6rZAi4YZBzQVECZBZBta0sFKxKWJje9EgnZBgTarY7Hig6MSKmxqJw2QdyVUikVwRVk3PxJgXWdfdBvEZCZCFb9kC7xTaSMDYKiIUs8TUSOv37Aw3PJSkZD';

try {
 $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 echo 'Graph returned an error: '.$e->getMessage();
 exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 echo 'Facebook SDK returned an error: '.$e->getMessage();
 exit;
}
$graphNode = $response->getGraphNode();

?>