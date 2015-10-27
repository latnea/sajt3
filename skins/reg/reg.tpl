<div class="regg" style="height:300px; width:300px; clear:both; margin:0 auto; ">

				<form  method="post" action=''>
						<p>
							<b> Your login: </b> <?php  if(isset($errors['login'])) { echo '<b style="color:green;">'.$errors['login'].'</b>';} ?> <br>
							<input type="text" name="login"  size="15">
						</p>
						<p>
							<b> Your password: </b> <?php  if(isset($errors['password'])) { echo '<b style="color:green;">'.$errors['password'].'</b>';} ?> <br>
							<input type="password" name="password" size="15">
						</p>
						<p>
							<b> Your e-mail: </b> <?php  if(isset($errors['email'])) { echo '<b style="color:green;">'.$errors['email'].'</b>';} ?> <br>
							<input type="text" name="email" size="15">
						</p>
						<p>
							<b> Your age: </b> <br>
							<input type="text" name="age"  size="15"> 
							
						</p>
						<p>
							<input type="submit" name="submit" value="register" >  
						</p>
				</form>

</div>