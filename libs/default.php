<?php

/*function wtf($array,$stop=false) {
	echo '<pre>'.print_r($array,1).'</pre>'; // sozdali funkciju vivoda massiva na ekran, chtobi 20 raz ne pisatj odno i tozhe
	if (!stop) {
		exit();
	}
}

wtf($array,1); // vivedetsja massiv 
wtf ($array); // ne vivedetsja. srabotaet exit

*/


function trimAll($el) {
	if(!is_array($el)){
		$el=trim($el);
		} else {
			$el=array_map('trimAll', $el);
		}
		return $el;
}

function intmAll($el) {
	if(!is_array($el)){
		$el=(int)($el);
		} else {
			$el=array_map('intmAll', $el);
		}
		return $el;
}

function floatmAll($el) {
	if(!is_array($el)){
		$el=(float)($el);
		} else {
			$el=array_map('floatAll', $el);
		}
		return $el;
}

function es($el) {									// es = mysqli_real_escape_string
	if(!is_array($el)){
		global $link2;
		$el=mysqli_real_escape_string($link2,$el);
		} else {
			$el=array_map('es', $el);
		}
		return $el;
}

function hc($el) {									// hc = htmlspecialchars
	if(!is_array($el)){
		$el=htmlspecialchars($el);
		} else {
			$el=array_map('hc', $el);
		}
		return $el;
}


function myHash($var) {
	$salt='ABC';
	$salt2='CBAAA';
	$var = crypt(md5($var.$salt),$salt2);
	return $var;
}

class Mail {
	static $subject='Tema pisjma';
	static $to='latiwnea@yandex.ru';
	static $from='latiwnea@yandex.ru';
	static $text='Tekst pisjma';
	static $headers='';

	static function send() {

		self::$subject='=?utf-8?b?'.base64_encode(self::$subject).'?=';

		self::$headers="Content-type: text/html; charset=\"utf-8\"\r\n";
		self::$headers.="From:".self::$from."\r\n";
		self::$headers.="MIME-Version:1.0\r\n";
		self::$headers.="Date:".date('D, d M Y h:i:s O')."\r\n";
		//self::$headers.="Precenence: bulk \r\n"; - esli pisjmo rassilochnoe, odnorazovoe

		return mail(self::$to,self::$subject,self::$text,self::$headers);
		}


}




?>