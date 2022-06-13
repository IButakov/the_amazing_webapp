<?php include "templates/header.php"; ?><h2>Add a user</h2>

    <form method="post">
    	<label for="firstname">Имя</label>
    	<input type="text" name="firstname" id="firstname">
    	<label for="lastname">Фамилия</label>
    	<input type="text" name="lastname" id="lastname">
    	<label for="email">Email</label>
    	<input type="text" name="email" id="email">
    	<label for="age">Возраст</label>
    	<input type="text" name="age" id="age">
    	<label for="location">Город</label>
    	<input type="text" name="location" id="location">
    	<input type="submit" name="submit" value="Добавить">
    </form>

    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>
