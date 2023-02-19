<?php

$random = mt_rand(0,100000);
$headers = array (

"User-Agent: AuutyMizk{$random}",

"Host: www.xn--42c9bsq2d4f7a2a.com",

"X-Requested-With: XMLHttpRequest",

"Sec-Fetch-Site: same-origin",

"Sec-Fetch-Mode: cors",

"Sec-Fetch-Dest: empty",

"Referer: https://www.xn--42c9bsq2d4f7a2a.com/",

"Accept-Language: th-TH, th;q=0.9, en;q=0.8, de;q=0.7, *;q=0.5"


);


system('clear');


function Post($url,$headers,$data) {
    $ch = curl_init();
    $curl = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_COOKIEJAR => "cookie.txt",
        CURLOPT_COOKIEFILE => "cookie.txt"
    );
    $ar = curl_setopt_array($ch, $curl);
    $post = curl_exec($ch);
    return $post;
   }
  
function Get($url,$headers) {
    $ch = curl_init();
    $curl = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_COOKIEJAR => "cookie.txt",
        CURLOPT_COOKIEFILE => "cookie.txt"
    );
    $ar = curl_setopt_array($ch, $curl);
    $get = curl_exec($ch);
    return $get;
   }


echo "       AUUTY MIZK Script    TH";

echo "\n \n";



 Get('https://www.xn--42c9bsq2d4f7a2a.com',$headers);

  $device = Get('https://www.xn--42c9bsq2d4f7a2a.com/ajax/device.php',$headers);

$json = json_decode($device, true);

$user_code =  $json["user_code"];
$code =  $json["user_code"];



$verify = ("https://www.facebook.com/device?user_code={$user_code}");





echo " _____________ \n";


echo "     Copy วาง บนเบราว์เซอร์      \n ";

echo "       \n";

echo $verify;

echo "\n          ";

echo "_________________ \n";

$check = readline(" \n    หากกดดำเนินการต่อแล้ว พิมพ์  => y หรือ Y  \n   ");


echo "               ";


if ($check == "y" || $check == "Y"){


$id_post = readline(" ID โพสต์ : ");
echo "\n \n";


$select_emoji = readline(" เลือก รีแอคชั่น  
\n  [1] ไลค์  \n
\n [2] รัก  \n
\n [3] ฮา \n
\n [4] ว้าว  \n
\n [5] เศร้า  \n
\n [6] โกรธ  \n
");

 
echo  "           ";

echo "____________________";


if ($select_emoji == "1") {
$emoji = "LIKE";
}  

if ($select_emoji == "2") {
$emoji = "LOVE";
}  

if ($select_emoji == "3") {
$emoji = "HAHA";
}  

if ($select_emoji == "4") {
$emoji = "WOW";
}  

if ($select_emoji == "5") {
$emoji = "SAD";
} 

if ($select_emoji == "6") {
$emoji = "ANGRY";
}  
 
echo "\n \n";









$data = "code={$code}";

 Post("https://www.xn--42c9bsq2d4f7a2a.com/ajax/confirmLogin.php",$headers,$data);


$sb = "idpost={$id_post}&type={$emoji}";


echo "\n  \n";



for ($x = 310; $x > 0; $x--) {

echo Post("https://www.xn--42c9bsq2d4f7a2a.com:443/ajax/reaction.php",$headers,$sb);

echo   " \r รอ  $x    วิ \r ";

echo "\n    \n";


}


} else {

exit;

}










?>