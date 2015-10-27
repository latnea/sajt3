<script> 	
	window.onload=function() {
	document.getElementById('kurs1').onclick=function () {
		var x=document.getElementById('kurss');
				if(x.style.display=='none') {
					x.style.display='block';
					} else { x.style.display='none';}
					}
	}

</script> 

<div id="kurs1" style="float:left;">
 <a class="kursa" href="#" > Курс валют </a> 


							<div id="kurss" style=" display:none;">
							<?php 
								  // Получаем текущие курсы валют в rss-формате с сайта www.cbr.ru 
								  $content = get_content(); 
								  // Разбираем содержимое, при помощи регулярных выражений 
								  $pattern = "#<Valute ID=\"([^\"]+)[^>]+>[^>]+>([^<]+)[^>]+>[^>]+>[^>]+>[^>]+>[^>]+>[^>]+>([^<]+)[^>]+>[^>]+>([^<]+)#i"; 
								  preg_match_all($pattern, $content, $out, PREG_SET_ORDER); 
								  $dollar = ""; 
								  $euro = ""; 
								  foreach($out as $cur) 
								  { 
								    if($cur[2] == 840) $dollar = str_replace(",",".",$cur[4]); 
								    if($cur[2] == 978) $euro   = str_replace(",",".",$cur[4]); 
								  }
								  echo '<b style="color:#ffffff;">Доллар - '.$dollar.' p</b><br>'; 
								  echo '<b style="color:#ffffff;">Евро - '.$euro.' p</b><br>'; 
								  
								  function get_content() 
								  { 
								    // Формируем сегодняшнюю дату 
								    $date = date("d/m/Y"); 
								    // Формируем ссылку 
								    $link = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=$date"; 
								    // Загружаем HTML-страницу 
								    $fd = fopen($link, "r"); 
								    $text=""; 
								    if (!$fd) echo "Запрашиваемая страница не найдена"; 
								    else 
								    { 
								      // Чтение содержимого файла в переменную $text 
								      while (!feof ($fd)) $text .= fgets($fd, 4096); 
								    } 
								    // Закрыть открытый файловый дескриптор 
								    fclose ($fd); 
								    return $text; 
								  } 
								?>
					</div>
	</div>