<?php
include("./inc/SSSApiClient.php");

$app_key = "41990c40c0487ab972be"; // put app key here
$app_secret = "29373907e2f52bd6d70aef4c2ac05765d0528470"; // put app secret here
$data = $_POST['data'];

$client = new SSSApiClient($app_key, $app_secret);

//���ӵ�����������������
//������������ 10.161.237.86
//������������ 114.215.208.175
//���˴�����û�����ˡ�����
//$client->setProxy("114.215.208.175:1080");

$JSONResponse = $client->processData($data);

//parse $JSONResponse to determine if a stamp was found. We just echo it here.
echo $JSONResponse;