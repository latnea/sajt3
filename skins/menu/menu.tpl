<div class="mmenu">
		<div class="b1">
			
				<div class="logo1">
					<a class="a111" href="index.php?modules=glavn&page=glavn"> <img style=" height:77px; width:90px; margin-top:3px;" src="./img/dom1.png" > </a>
				</div>
			

				<div class="menu1"> 
					<a class="a01" onmouseover="s01 ()" onmouseout="ss01 ()" href="index.php?modules=house1&page=house1"> ДОМА РЯДОМ С МКАД </a>  
					<a class="a02" onmouseover="s02 ()" onmouseout="ss02 ()" href="index.php?modules=house2&page=house2"> ДОМА - ХОРОШИЙ РЕМОНТ  </a>
					<a class="a03" onmouseover="s03 ()" onmouseout="ss03 ()" href="index.php?modules=house3&page=house3"> ДОМА - БОЛьШАЯ КВАДРАТУРА  </a>
					<a class="a04" onmouseover="s04 ()" onmouseout="ss04 ()" href="index.php?modules=zeml&page=zeml"> ЗЕМЛЯ </a>

					<p class="p01" style="display:none; text-align:center; color:#414540; "> Дома, расположенные в радиусе 8 км от МКАД </p>
					<p class="p02" style="display:none; text-align:center; color:#414540;"> Дома, с хорошим ремонтом или ремонтом по ключ</p>
					<p class="p03" style="display:none; text-align:center; color:#414540;"> Дома с большой квадратурой</p>
					<p class="p04" style="display:none; text-align:center; color:#414540;"> Земельные участки для покупки </p>
				</div>

				<script type="text/javascript"> 
					function s01() {
						var p01=$(".p01");
							if (p01.css({ display: "none" })) {
								p01.css({ display: "block" });
					} 
				}
					function ss01() {
							var p01=$(".p01");
							if (p01.css({ display: "block" })) {
								p01.css({ display: "none" });
					} 
				}
						function s02() {
						var p02=$(".p02");
							if (p02.css({ display: "none" })) {
								p02.css({ display: "block" });
					} 
				}
					function ss02() {
							var p02=$(".p02");
							if (p02.css({ display: "block" })) {
								p02.css({ display: "none" });
					} 
				}

				function s03() {
						var p03=$(".p03");
							if (p03.css({ display: "none" })) {
								p03.css({ display: "block" });
					} 
				}
					function ss03() {
							var p03=$(".p03");
							if (p03.css({ display: "block" })) {
								p03.css({ display: "none" });
					} 
				}

				function s04() {
						var p04=$(".p04");
							if (p04.css({ display: "none" })) {
								p04.css({ display: "block" });
					} 
				}
					function ss04() {
							var p04=$(".p04");
							if (p04.css({ display: "block" })) {
								p04.css({ display: "none" });
					} 
				}


				</script>
 			
				
					<div class="logo11">
						<img style=" height:77px; width:90px; margin-top:3px; " src="./img/dom2.png" >
					</div>
				
		</div>

			<div class="b21" style="border-top: 1px solid #414540; clear:both; position:relative; ">

<!--
<script> 	

		window.onload=function() {

	document.getElementById('a11').onclick=function () {
		var x=document.getElementById('imgturk');
			if(x.style.display=='none') {
				x.style.display='block';
			} else { x.style.display='none';}
		}
}

</script> 
-->

					<div id="turk"  style="float:left; margin-top:0.5%;">
					<a id="a11" onmouseover="s ()" onmouseout="ss ()" href="#"> Специально для Яны, Ольги, Ильи, Артура! </a> <br>
					<img id="imgturk" style="height:30px; width:30px; margin-left:55%; display:none;" src="./img/smile.png" alt="">
					</div>
					
				<script type="text/javascript"> 
					function s() {
						var img=$("#imgturk");
						if (img.css({ display: "none" })) {
							img.css({ display: "block" });
					} 
				}
					function ss() {
							var img=$("#imgturk");
							if (img.css({ display: "block" })) {
								img.css({ display: "none" });
					} 
				}
				</script>
 			



					<div id="nav">				
						<ul class="menju2" style="float:left;">
							<li>
								<a href="#">Навигация</a>
								<ul>
									<li><a href="#">Карта Москвы</a></li>
									<li><a href="#">Калькулятор </a></li>

								</ul>
							</li>
						</ul>
					</div>	

					<?php require './skins/kurs/kurs.tpl'; ?>

					<?php require './skins/reg/registration.tpl'; ?>
				
		
			</div>


 </div>
