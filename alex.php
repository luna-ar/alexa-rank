<?php
@system("clear");
error_reporting(0);
define("red","\e[1;31m");
define("green","\e[1;32m");
define("yellow","\e[1;33m");
define("blue","\e[1;34m");
define("purple","\e[1;35m");
define("cyan","\e[1;36m");
define("grey","\e[90m");
define("white","\e[0m");
//Alexa rank Cli By Luna AR
/*{url_encode}
$domain = urlencode($argv[1]);
if(isset($argv[1])) {}
else {
	echo "\e[1;32mexe Tools php ─► php file.php url.co.li\n";
}*/
echo cyan."╔═╗╦  ╔═╗═╗ ╦╔═╗ ╦═╗╔═╗╔╗╔╦╔═\n"; 
echo red."╠═╣║  ║╣ ╔╩╦╝╠═╣ ╠╦╝╠═╣║║║╠╩╗\n"; 
echo yellow."╩ ╩╩═╝╚═╝╩ ╚═╩ ╩ ╩╚═╩ ╩╝╚╝╩ ╩\n".white;
echo "<_ Coded by Luna AR\n";
echo "<_ Thanks to Restu ID\n\n";
$live = 1;
$list = 2;
echo "(\e[1;31m1\e[0m) Live target\n";
echo "(\e[1;31m2\e[0m) List target\n";
echo "Pilih opsi : \e[1;31m";
$opsi = trim(fgets(STDIN));
if($opsi == $live){
echo "\e[0mdomain	: \e[1;31m";
$domain = trim(fgets(STDIN, 1024));	
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.alexa.com/siteinfo/$domain");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$exec = curl_exec($curl);
curl_close($curl);
preg_match_all("/<a href='(.*?)' title='(.*?)'>(.*?)<\/a>/", $exec, $hasil);
preg_match_all('/<strong class="(.*?)">\n(.*?)<\/strong>/', $exec, $hasil2);
preg_match_all('/<strong class="(.* ?)">\n(.* ?)>\n(.*?)<\/strong>/', $exec, $hasil3);
 print "\033[0mDomain       : \033[1;32m $domain \n";
 print "\033[0mCountry      : \033[1;32m ".$hasil[3][0]."\n";
 print "\033[0mLocal Rank   :\033[1;33m ".$hasil2[2][0]."\033[0m \n";
 print "Global Rank  : \033[1;31m".$hasil3[3][0]."\033[0m \n\n";
}
if($opsi == $list){
echo "\e[0mMasukan list : \e[1;31m";
$list = trim(fgets(STDIN));
$contents = file_get_contents($list);
$convert_str = explode("\n", $contents);
foreach($convert_str as $domain){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.alexa.com/siteinfo/$domain");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$exec = curl_exec($curl);
curl_close($curl);
preg_match_all("/<a href='(.*?)' title='(.*?)'>(.*?)<\/a>/", $exec, $hasil);
preg_match_all('/<strong class="(.*?)">\n(.*?)<\/strong>/', $exec, $hasil2);
preg_match_all('/<strong class="(.* ?)">\n(.* ?)>\n(.*?)<\/strong>/', $exec, $hasil3);
 print "\033[0mDomain       : \033[1;32m $domain \n";
 print "\033[0mCountry      : \033[1;32m ".$hasil[3][0]."\n";
 print "\033[0mLocal Rank   :\033[1;33m ".$hasil2[2][0]."\033[0m \n";
 print "Global Rank  : \033[1;31m".$hasil3[3][0]."\033[0m \n\n";
}
}
?>