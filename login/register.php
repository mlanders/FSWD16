<?php 
	session_start();
	if($_POST['submit']){
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$fullname = strip_tags($_POST['name']);
		$db = mysqli_connect("db4free.net", "fswd16", "lambdaschoolfswd16", "fswd16") or die ("Failed to connect");
		$query = "INSERT INTO users(name,username,password) VALUES('$fullname','$username', '$password')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Succesfully registered";
			header('Location: index.php');
		}
		else {
			echo "Failed to register";
		}
	}
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from semantic-ui.com/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 16:20:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/icon.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="https://semantic-ui.com/dist/components/form.js"></script>
  <script src="https://semantic-ui.com/dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui image header">
      <img src="https://yt3.ggpht.com/a-/AN66SAw9C1HPxBru_POv5bcGj8yLp8OSc18VosnELA=s900-mo-c-c0xffffffff-rj-k-no" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
<form class="ui large form" method="post" action="register.php">
	<div class="ui stacked segment">
		<div class="field">
			<div class="ui left icon input">
				<i class="user icon"></i>
				<input type="text" name = "name" placeholder="Enter Full Name">
			</div>
		</div>
		<div class="field">
			<div class="ui left icon input">
				<i class="user icon"></i>
				<input type="text" name = "username" placeholder="Enter username">
			</div>
		</div>
		<div class="field">
			<div class="ui left icon input">
				<i class="user icon"></i>
				<input type="password" name="password" placeholder="Enter password here">
			</div>
		</div>
	<input  class="ui fluid large submit button" type="submit" name="submit" value="Register">
</form>
<a href = "index.php" >Login</a>

</body>
</html>
