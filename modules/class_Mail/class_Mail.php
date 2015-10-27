<?php
class Mail {
	static $subject='Tema pisjma';
	static $to='./logs/mysql.log';
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