<div>
	<form action="" method="post">
		<div>
		Заголовок: <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>"> <br>
		</div>
		<div>
		Катеогрия: <textarea name="category"> <?php echo htmlspecialchars($row['category']); ?> </textarea> <br>
		</div>
		<div>
		Описание новости: <textarea name="description"> <?php echo htmlspecialchars($row['description']); ?> </textarea> <br>
		</div>
		<div>
		Новость: <textarea name="text"> <?php echo htmlspecialchars($row['text']); ?> </textarea> <br>
		</div>
		<input type="submit" name="update" value="UPDATE NEWS">
	</form>
</div>