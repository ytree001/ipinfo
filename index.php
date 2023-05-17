<?php 
$ip_info = isset($_SERVER['HTTP_IP']) ? $_SERVER['HTTP_IP'] : '未知';
$ip_city = isset($_SERVER['HTTP_IP_CITY']) ? $_SERVER['HTTP_IP_CITY'] : '未知';
$ip_asn = isset($_SERVER['HTTP_IP_ASN']) ? $_SERVER['HTTP_IP_ASN'] : '未知';
$ip_country = isset($_SERVER['HTTP_IP_COUNTRY']) ? $_SERVER['HTTP_IP_COUNTRY'] : '未知';
$ip_http = isset($_SERVER['HTTP_IP_HTTP']) ? $_SERVER['HTTP_IP_HTTP'] : '未知';
$ip_lat = isset($_SERVER['HTTP_IP_LAT']) ? $_SERVER['HTTP_IP_LAT'] : '未知';
$ip_lon = isset($_SERVER['HTTP_IP_LON']) ? $_SERVER['HTTP_IP_LON'] : '未知';
$ip_threat = isset($_SERVER['HTTP_IP_THREAT']) ? $_SERVER['HTTP_IP_THREAT'] : '未知';
$ip_time = isset($_SERVER['HTTP_IP_TIME']) ? $_SERVER['HTTP_IP_TIME'] : '未知';
$ip_ua = isset($_SERVER['HTTP_IP_UA']) ? $_SERVER['HTTP_IP_UA'] : '未知';
$ip_zip = isset($_SERVER['HTTP_IP_ZIP']) ? $_SERVER['HTTP_IP_ZIP'] : '未知';
$title = "我的IP信息"; 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="/style.css"> 
</head>
<body>
<div class="container">
<h1><?php echo $title; ?></h1>
<table>
<tr><td>IP</td><td><?php echo $ip_info; ?></td></tr>
<tr><td>城市</td><td><?php echo $ip_city; ?></td></tr>
<tr><td>国家</td><td><?php echo $ip_country; ?></td></tr>
<tr><td>ASN</td><td><?php echo $ip_asn; ?></td></tr>
<tr><td>HTTP</td><td><?php echo $ip_http; ?></td></tr>
<tr><td>经度</td><td><?php echo $ip_lon; ?></td></tr>
<tr><td>纬度</td><td><?php echo $ip_lat; ?></td></tr>
<tr><td>邮编</td><td><?php echo $ip_zip; ?></td></tr>
<tr><td>威胁指数</td><td><?php echo $ip_threat; ?></td></tr>
<tr><td>时区</td><td><?php echo $ip_time; ?></td></tr>
<tr><td>UA</td><td><?php echo $ip_ua; ?></td></tr>
</table>
</div>
</body>
</html> 
