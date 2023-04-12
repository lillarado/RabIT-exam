<!DOCTYPE html>
<html>
<head>
	<title>Ad List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Ad List</h1>
  <p><a href="home.php">Back to home page</a></p>
	<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>USERNAME</th>
      </tr>
    </thead>
    <tbody>
  
    <?php
      require "../service/adService.php";
      foreach (getAllAds() as $ad) {
        echo "<tr><td>".$ad->getId()."</td><td>".$ad->getTitle()."</td><td>".$ad->getUserName()."</td></tr>";
    }
			?>
    </tbody>
	</table>
    
</body>
</html>
