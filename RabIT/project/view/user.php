<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>User List</h1>
  <p><a href="home.php">Back to home page</a></p>
	<table id="userTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
      </tr>
    </thead>
    <tbody>

    <?php
      require "../service/userService.php";
      foreach (getAllUsers() as $user) {
        echo "<tr><td>".$user->getId()."</td><td>".$user->getName()."</td></tr>";
    }
			?>
    </tbody>
	</table>

</body>
</html>
