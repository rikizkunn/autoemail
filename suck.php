<?php
//HARGAI AUTHOR BABI
system(@clear);
print("\e[0;32mcoded by rzyz
error? contact : fb.me/rikizkun\e[0m\n\n");
sleep(3);
print("Contoh Link phising/scam ->
https://asepbalon.tk/login.php \n");
 
$url = readline("\e[0;30;44mLINK SCAM\e[0m : ");
if (strpos($url, '.php') === false && strpos($url, '.html') === false){
	echo 'URL SALAH!!';
	exit();
} else {
	
$limit = readline("\e[0;30;44mLIMIT\e[0m : ");
$kata = readline("\e[0;30;44mKATA-KATA\e[0m : ");

function curl($url, $data){
$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$x = curl_exec($ch);
	return $x;

}
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}

$uri = file_get_contents($url);

preg_match_all('/class\="form-control\" name\="(.*?)\"/', $uri, $res);

$proses = getStr($uri, '<form action="', '"');

$spamurl = parse_url($url);

foreach($res[1] as $k){
	$data .= "$k=$kata&";
}

$i = 1;
while ($i <= $limit){
	$i++;
	$exp = curl($spamurl["host"].'/'.$proses, $data);
	print("\e[0;32m[+] \e[0mSENDED\n");
}
}
?>
