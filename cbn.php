<?php
$playId = $_GET['id']?? 'cctv1HD';
$timestamps = round(microtime(true) * 1000);
$sign = md5("aIErXY1rYjSpjQs7pq2Gp5P8k2W7P^Y@appIdkdds-chongqingdemocityId5A" . "playId" . $playId . "relativeId" . $playId . "timestamps" . $timestamps . "type1");
$headers = [
    "appId: kdds-chongqingdemo",
    "sign: $sign",
    "timestamps: $timestamps",
    "Content-Type: application/json;charset=utf-8"
];
$ch = curl_init("http://portal.centre.bo.cbnbn.cn/others/common/playUrlNoAuth?cityId=5A&playId=$playId&relativeId=$playId&type=1");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTPHEADER => $headers
]);
$response = curl_exec($ch);
curl_close($ch);
$playurl = json_decode($response)->data->result->protocol[0]->transcode[0]->url;
header("Location: $playurl");
?>
