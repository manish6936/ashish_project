<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css">
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

</body>
<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject"> Subject </label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="send">

  </form>
  <footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>
</div>
</html>