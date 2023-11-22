<?php
$cityId = '5A';
$playId = $_GET['id'];

if (empty($playId)) {
  die('Missing playId parameter');
}

$relativeId = $playId;
$type = '1';
$appId = "kdds-chongqingdemo";
$url = 'http://portal.centre.bo.cbnbn.cn/others/common/playUrlNoAuth?cityId=5A&playId=' . $playId . '&relativeId=' . $relativeId . '&type=1';

// Generate the sign
$timestamps = round(microtime(true) * 1000);
$sign = md5('aIErXY1rYjSpjQs7pq2Gp5P8k2W7P^Y@appId' . $appId . "cityId" . $cityId . "playId" . $playId . "relativeId" . $relativeId . "timestamps" . $timestamps . "type" . $type);

// Initialize cURL
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'appId: kdds-chongqingdemo',
    'sign: ' . $sign,
    'timestamps:' . $timestamps,
    'Content-Type: application/json;charset=utf-8'
  ),
));

// Execute cURL request
$response = curl_exec($curl);

// Check for cURL errors
if ($response === false) {
  die('cURL error: ' . curl_error($curl));
}

// Close cURL
curl_close($curl);

// Decode the response
$responseData = json_decode($response);

// Check if the response contains the expected data
if (isset($responseData->data->result->protocol[0]->transcode[0]->url)) {
  $videoUrl = $responseData->data->result->protocol[0]->transcode[0]->url;
  header('Location: ' . $videoUrl);
  exit;
} else {
  die('Unable to retrieve video URL');
}
?>
