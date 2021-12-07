<html>
<head>

<style>
html, body{ 
	background-color:#000000;
	color:#00FF00;
	font-size:72px;
}
</style>

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

</head>

<body>
<div class="ipip">
<?
$ip= ($_SERVER['HTTP_CF_CONNECTING_IP']?$_SERVER['HTTP_CF_CONNECTING_IP']:$_SERVER['REMOTE_ADDR']);
echo "$ip";
?>
</div>
</body>
</html>