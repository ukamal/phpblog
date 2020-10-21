<?php
include ('inc/header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname  = $fn->validation($_POST['firstname']);
    $lname  = $fn->validation($_POST['lastname']);
    $email  = $fn->validation($_POST['email']);
    $body  = $fn->validation($_POST['body']);

    $fname = mysqli_real_escape_string($db->link, $fname);
    $lname = mysqli_real_escape_string($db->link, $lname);
    $email = mysqli_real_escape_string($db->link, $email);
    $body = mysqli_real_escape_string($db->link, $body);

    $error = "";
    if (empty($fname)){
        $error = "First name must not be empty!";
    }elseif (empty($lname)){
        $error = "Last name must not be empty!";
    }elseif (empty($email)){
        $error = "Email must not be empty!";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid Email Address!";
    } elseif (empty($body)){
        $error = "Your comment must be valuable for us!";
    }else{
        $query = "INSERT INTO contact(firstname, lastname, email, body) VALUES ('$fname', '$lname', '$email', '$body')";
        $contact = $db->insert($query);
        if ($contact){
            $msg = "<span style='color:green;font-weight: bold;'>Message sent successfully! Thanks.</span>";
        }else{
            $error = "<span style='color:red'>Wo! Please try again!</span>";
        }
    }
}
?>

<div class="contentsection contemplete clear">
    <div class="maincontent clear">
        <div class="about">
            <h2>Contact us</h2>
            <?php
            if (isset($error)){
                echo "<span style='color: red'>$error</span>";
            }
            if (isset($msg)){
                echo "<span style='color: green'>$msg</span>";
            }
            ?>
        <form action="" method="post">
            <table>
            <tr>
                <td>Your First Name:</td>
                <td>
                <input type="text" name="firstname" placeholder="Enter first name"/>
                </td>
            </tr>
            <tr>
                <td>Your Last Name:</td>
                <td>
                <input type="text" name="lastname" placeholder="Enter Last name"/>
                </td>
            </tr>

            <tr>
                <td>Your Email Address:</td>
                <td>
                <input type="text" name="email" placeholder="Enter Email Address"/>
                </td>
            </tr>
            <tr>
                <td>Your Message:</td>
                <td>
                <textarea name="body"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" name="submit" value="Send"/>
                </td>
            </tr>
    </table>
<form>
</div>

    </div>
<?php
include ('inc/sidebar.php');
include ('inc/footer.php');