
<?php
date_default_timezone_set("GMT+0");

$datetime = date("ymd").'T'.date("His").'Z';
$method = "GET";
$path = "/targets/wing/seller_api/apis/api/v1/marketplace/meta/categories";
$query = "categoryName=" . urlencode(원피스);

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

<script>
	var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://api-gateway.coupang.com/targets/wing/seller_api/apis/api/v1/marketplace/seller-products/574862683",
  "method": "GET",
  "headers": {
    "Authorization": "CEA algorithm=HmacSHA256, access-key=15e291a5-2f17-4ec3-93b6-06014161b366, signed-date=190311T140123Z, signature=eb2dc231dacde9eac6e246a7a47abcb2fb60139461fe1ce3747bb3d3178f953e",
    "X-Requested-by": "A00186473",
    "cache-control": "no-cache",
    "Postman-Token": "322dada8-1ba7-468c-820e-dd53543c148c"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
</script>