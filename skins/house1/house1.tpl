<div class="contentglavn">


			<div class="glavncont">

				<div class="companies">
			<p class="pcomp" style=" opacity:0.6; font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px; color:#1f1f1f; border-bottom:2px solid #64d6eb; line-height: 20px; padding-bottom:20px;"> Список всех <small style="font-weight: 300; font-size:30px;"> домов, расположенных рядом с МКАД: </small> 
				<img style="height:30px; width;30px; margin-left:10px; padding-top:1px;" src="./img/domik.png">
				<img style="height:20px; width;20px; margin-left:4px; padding-top:0px;" src="./img/str.png">
				<img style="height:25px; width;25px; margin-left:4px; padding-top:1px;" src="./img/mkad.png">
			</p>


			<ul>
				<?php while($row=mysqli_fetch_assoc($hous1)) { ?>
					<div style="overflow:hidden; width:420px; height:350px; float:left; margin-top:15px; margin-bottom:20px; margin-left:-20px; ">
						    <?php echo $row['foto'];?> 
					</div>
					<div style="height:hidden; width:52%; float:left; margin-left:20px; padding-bottom:60px; margin-top:40px; border-bottom:2px solid #64d6eb; line-height: 20px;">
							<li type="none">
							 	<b style=" font-size:32px; opacity:0.6;  margin-top:-12px;">Дом <?php echo $row['id'] ?> </b> <br><br>

								<b style="color:#e2192b;">Цена:</b><?php echo '<b>               '. $row['price'].'  p</b><br>
								<b style="color:#e2192b;">Расстояние до МКАД:</b>                '.$row['km'].'  км<br>
								<b >Площадь дома и участка:</b>               '.$row['S'].'<br>
								<b style="color:#e2192b;">Право на собственность:</b>               '.$row['pravo'].'<br>
								<b >Ремонт:</b>                '.$row['remont'].'<br>
								<b >Описание:</b>               <b style="opacity:0.6;">'.$row['text']; ?></b> 
								<br> <br><a class="a12" href=<?php echo $row['site'];?> > <b> Ознакомиться подробнее! </b> </a> 
							</li>
					</div>
				
				<?php } ?>


			</ul>
		</div>
	</div>
</div>
