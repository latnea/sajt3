<div class="content1">
	<div class="mmain">
	
		<div class="companies">
			<p class="pcomp" style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px; color:#1f1f1f;"> Компании <small style="font-weight: 300; font-size:30px;"> рынка 3D печати России: </small> </p>
			<br>
			<hr>
			<ul>
				<?php while($row=mysqli_fetch_assoc($comp)) { ?>
					<div style="overflow:hidden; width:260px; float:left; margin-top:15px; margin-left:-20px; ">
						    <?php echo $row['logoCompany'];?> 
					</div>
					<div style="height:180px; width:600px; float:left; margin-left:20px; margin-bottom:10px; border-bottom:1px solid #a3999a; line-height: 20px;">
							<li type="none"> <?php echo '<b>'. $row['nameCompany'].'</b><br>'.$row['aboutCompany'].'<br>'.$row['adress'].'<br><b>Цена:</b> '.$row['price'].'<br><b>Рейтинг:</b> '.$row['rate']; ?> 
								<br><a style="color:#e2192b; font-size:16px; text-decoration:none;" href=""> <b> Выбрать! </b> </a> </li>
					</div>
				
				<?php } ?>
				<?php if(isset($comppr)) { while($row=mysqli_fetch_assoc($comppr)) { ?>
					<div style="overflow:hidden; width:260px; float:left; margin-top:15px; margin-left:-20px;">
						    <?php echo $row['logoCompany'];?> 
					</div>
					<div style="height:180px; width:600px; float:left; margin-left:20px; margin-bottom:10px; border-bottom:1px solid #a3999a; line-height: 20px;">
							<li type="none"> <?php echo '<b>'. $row['nameCompany'].'</b><br>'.$row['aboutCompany'].'<br>'.$row['adress'].'<br><b>Цена:</b> '.$row['price'].'<br><b>Рейтинг:</b> '.$row['rate']; ?>
							<br> <a style="color:#e2192b; font-size:16px; text-decoration:none;" href=""> <b> Выбрать! </b> </a> </li>
							 
					</div>
				
				<?php } }?>
				<!-- <input type="submit" name="gget" value="Применить"> -->
			</ul>
		</div>

		<div class="filtr" style="position: fixed; margin-left:980px;">

			<br> <small style="font-weight: 300; font-size:30px; color:#FF0000;"> <?php if(isset($fail)) { echo $fail;} ?> </small>

			<form action="" method="post">
				<div class="filtr1">
						<p class="fp1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px;"> <b> Фильтр: </b> <br></p>
						<p class="fp2" style="font-style:open-sans; font-size:15px; font-weight: 500; line-height: 22px;"> <b> Вид товара: </b> </p>
						<form action="" method="post">
					<div>
						<div>
							<input type="checkbox" name="choice1[]" value="f1p"> 3D Принтеры <br>
							<input type="checkbox" name="choice1[]" value="f1s"> 3D Сканеры <br>
							<input type="checkbox" name="choice1[]" value="f1m"> Материалы <br>
						</div>
					</div>
					<br>
				

				</div>

				<div class="filtr2">
						<p class="fp1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px;"> <b> Фильтр: </b> <br></p>
						<p class="fp2" style="font-style:open-sans; font-size:15px; font-weight: 500; line-height: 22px;"> <b> Вид услуги: </b> </p>
					
					<div>
						<div>
							<input type="checkbox" name="choice1[]" value="f12pr"> 3D Печать <br>
							<input type="checkbox" name="choice1[]" value="f12mo"> 3D Моделирование <br>
							<input type="checkbox" name="choice1[]" value="f12sk"> 3D Сканирование <br>
						</div>
					<br>
					</div>
					<input style="float:left; margin-left:30px; margin-top:30px;" type="submit" name="getfiltr" value="Применить">
					<input style="float:left; margin-left:10px; margin-top:30px;" type="reset" value="Очистить">
			</form>
				</div>


	</div>

</div>

	<!-- <div style="height:150px; width:600px; float:left; margin-left:20px; border:1px solid; line-height: 20px;"> !-->



</div>
</div>

