<?php
    include ('../config/config.php');
    include ('../lib/Database.php');
    include ('../helpers/formate.php');


    include ('../lib/session.php');
    Session::init();


    $db = new Database();
    $fn = new Formate();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $fn->validation($_POST['email']);
            $email = mysqli_real_escape_string($db->link, $email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                     echo "<span style='color: red; font-size: 18px'>Invalid Email Address..</span>";
                }else{

                $mailquery = "SELECT * FROM tbl_user WHERE email = '$email' limit 1";
                $mailcheck = $db->select($mailquery);

                if ($mailcheck != false){
                while ($value = $mailcheck->fetch_assoc()) {
                    $userid   = $value['id'];
                    $username = $value['username'];
                }

                $text     = substr($email, 0, 3);
                $rand     = rand(10000, 99999);
                $newpass  = "$text$rand";
                $password = md5($newpass);
                $updatequery = "UPDATE tbl_user 
                            SET 
                            password = '$password' 
                            WHERE id = '$userid' ";
                $updated = $db->update($updatequery);

                $to     = "$email";
                $from   = "flkamal2016@gmail.com";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0';
                $headers .= 'Content-type: text/html; charset=iso-8859-1';
                $subject = "Your Password";
                $message = "Your user name is ".$username." and password is ".$newpass." please visit website to login.";

                $sendmail = mail($to, $subject, $message, $headers);
                if ($sendmail ) {
                   echo "<span style='color: green; font-size: 18px'>Please check your email for new password.</span>";
                }else{
                    echo "<span style='color: red; font-size: 18px'>Email Not send.</span>";
                }

              } else{
                    echo "<span style='color: red; font-size: 18px'>Email Not Exist!</span>";
                }
            }
         }
        ?>
		<form action="" method="post">
			<h1>Password Recovery</h1>
			<div>
				<input type="text" placeholder="Enter Valid Email" required="" name="email"/>
			</div>
			
			<div>
				<input type="submit" value="Send Mail" />
			</div>
		</form><!-- form -->
        <div class="button">
            <a href="login.php">Login</a>
        </div><!-- button -->
		<div class="button">
			<a href="#">Full Stack Developer</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>