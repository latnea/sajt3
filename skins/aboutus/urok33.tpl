

<div id="huj11">
<div class="huj2">
<div id="huj" style="background-color:#ffffff;">
	saaaaaaaaaaa
</div>
</div>
</div>

<!-- 
<script>
/*
//1 allert
alert('privet');

x=1;
while (x<4) {
	alert (x); // ; - mozhno ne stavitj. No esli funkcii idut v strochku: x=1; ++x; y-2; - neobhodimo stavitj ;
	++x;
}
// do-while; for; - cikli

// 2 prompt 
y=prompt ('aaa',18); // funkcija vvoda chego-nibudj

alert ('VI ukazali, chto vam'+y+'let');

//3 confirm - podtvrzhdenie

z=confirm('Vam tochno 18 let?'); // vozvrawaet true ili false
	if (z=true) {
		alert('Vi podtverdili chto vam 18 let!');
	} else (
		alert('Vi otkazalisj!');
	)

*/
// funkcii

function calc (num1, num2, action) {
	if(action==undefined) {
		action='plus';
	}


	var res = 0;

	if (action=='plus'){
		res=num1 + num2;
	}

	else if (action=='minus'){
		res=num1 - num2;
	}
	return res;
}

result1=calc(1,2);
alert('rezuljtat raven'+result1);
result2=calc(2,1,'minus');
alert('rezuljtat raven'+result2);

// var x - lokaljnaja peremennaja
// x - globaljnaja peremennaja

// parseInt('12px');  - privodit stringovoe znachenie k chislovomu i okrugljaet do celih , t.e. ravno = 12
// parseFloat('12px');  - privodit stringovoe znachenie k chislovomu i okrugljaet do desjatih , t.e. ravno = 12.00

alert(parseInt('12.4454aaa'));
alert(parseFloat('12.445aaa'));

-->
<script>

x=document.getElementById('huj').style.backgroundColor; 
			


if(x='white') {
		 y=document.getElementById('huj').style.backgroundColor='red'; 
		

			}
</script> 



<!-- urok 34 continue -->


<script> 	
/* First variant: popisivaem onclick v svojstvah bloka *

function hide() {
	var x =document.getElementById('hh1').style.display;
	if (x=='block') {
		document.getElementById('hh1').style.display='none';
	} else { document.getElementById('hh1').style.display='block'; }
}


/* Second variant: popisivaem onclick v sckripte JS, s pomowju funkcii */
</script> 




<script> 	
window.onload=function() {

	document.getElementById('hh').onmouseover=function () {
		 var x=document.getElementById('hhh');
		if(x.style.display=='none') {
			x.style.display='block';
		} else { x.style.display='none';}
	}
}
	/*
	document.getElementById('hhh').onmouseout=function () {
		 var x1=document.getElementById('hhh');	 
		if(x1.style.display=='block') {
			x1.style.display='none';
		} 
	}
	

}
*/

</script> 

		 <div id="hh" style="border: 1px solid; width:200px;"> Navigation </div> 
		 <div id="hhh" style="display:none; border: 1px solid; width:200px;">

				 <div id="hh1" style="display:block; border: 1px double; width:200px;">
				 	<a href="#">aa </a> 
				 </div>
				<div id="hh2" style="display:block; border: 1px solid; width:200px;">
					<a href="#">aa </a> 
				</div>
				<div id="hh3"  style="display:block; border: 1px solid; width:200px;">
					<a href="#">aa </a> 
				</div>
			
		</div> 
		






<div class="nav" style="float:left;">

								<script> 	
									window.onload=function() {
										document.getElementById('hh').onmouseover=function () {
										 	var x=document.getElementById('hhh');
												if(x.style.display=='none') {
													x.style.display='block';
												} else { x.style.display='none';}
												}
										}
								</script> 

										 <div id="hh" style="border: 1px solid; width:200px;"> Navigation </div> 
										 <div id="hhh" style="display:none; border: 1px solid; width:200px;">
											<div id="hh1" style="display:block; border: 1px double; width:200px;">
												 <a href="#">aa </a> 
											</div>
											<div id="hh2" style="display:block; border: 1px solid; width:200px;">
												<a href="#">aa </a> 
											</div>
											<div id="hh3"  style="display:block; border: 1px solid; width:200px;">
												<a href="#">aa </a> 
											</div>
			
										</div> 

		</div>

<br>
<hr>
<br>
<br>
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

				</script>



<br><br> Urok JQuery 12 <br>




<div class="ur12" >
	TRalaalala	
</div>
<script>
var div=prompt('vibratj cvet');
while(div!=1 && div!=2) { alert('ne vibrali cvet'); div = prompt(); }

		$(".ur12").attr('class','ur12_1');

	

</script>





<br><br> Urok JQuery 13 <br><br> 

<div id="ur13" onmouseover="f1()" >
	TRalaalala	
</div>

<script>
function f1() {
	$("#ur13").css("background-color","red");
	$("#ur13").css("height",function () {
		var height=prompt("Choose your height of block:");
		return height;
	});
}
</script>



<br><br> Urok JQuery 14 <br><br> 

<div id="ur14" onclick="f11()" >
	<p> TRalaalala </p>	
</div>

<script>
function f11() {
	$("p").html("<p> Zamenili trralaal </p>");
}
</script>

<hr>
<h2> Lesson 30 </h2>
<br>
<br>
<br>


<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file" value="">
	<p> <input type="submit" name="submit" value="add the file"> </p>
</form>

<?php

// dlja zagruzki fajlov, neobhodimo propisatj v htaccess (smotri v file htaccess)

$array = array('image/gif','image/jpeg','image/png');
$array2 = array('jpg','jpeg','png','gif');

if(isset($_POST['submit'])){

	if($_FILES['file']['error']==0) {
	
		 	if($_FILES['file']['size']<500 || $_FILES['file']['size'] > 50000000) {
				echo 'Too small or too large size of file!';

		} else {
			preg_match('#\.([a-z]+)&#iu', $_FILES['file']['name'],$matches);
			if(isset($matches[1])) {
				$matches[1]=mg_strtolower($matches[1]);

				$temp=getimagesize($_FILES['file']['tmp_name']);
				$name='./uploaded/'.date('Ymd-His').'img'.rand(10000,99999).'.jpg';


				if (!in_array($matches[1], $array2)) {
					echo 'Wrong extension of file!';
				}
				elseif(!in_array($temp['mime'], $array)) {
					echo 'Wrong type of file. You have to add only images!';
				} elseif (!move_uploaded_file($_FILES['file']['tmp_name'],$name)) {
					echo 'The file have not been uploaded. Error!';
				} else {
					move_uploaded_file($_FILES['file']['tmp_name'],$name);
					echo 'Your file has been succesfully uploaded!';
					// vipolnjaem djestvija
			 	}
			}
		}
	}
}

 ?>


<br>
<br>
<br>
<hr>
