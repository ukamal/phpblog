<?php
include ('inc/header.php');
include ('inc/sidebar.php');

if (!Session::get('userRole') == '0') {
    echo "<script> window.location = 'index.php'; </script>";
}
?>


<div class="grid_10">

<div class="box round first grid">
    <h2>Add New User</h2>
    <div class="block copyblock">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $fn->validation($_POST['username']);
            $password = $fn->validation(md5($_POST['password']));
            $email     = $fn->validation($_POST['email']);
            $role     = $fn->validation($_POST['role']);

            $username = mysqli_real_escape_string($db->link, $username);
            $password = mysqli_real_escape_string($db->link, $password);
            $email     = mysqli_real_escape_string($db->link, $email);
            $role     = mysqli_real_escape_string($db->link, $role);

            if (empty($username) || empty($password) || empty($role) || empty($email)){
                echo "<span class='error'>Field must not be empty !</span>";
            } else{
            $mailquery = "SELECT * FROM tbl_user WHERE email = '$email' limit 1";
            $mailcheck = $db->select($mailquery);
            if ($mailcheck != false) {
                 echo "<span class='error'>Email already exist!</span>";
            }else{
                $query = "INSERT INTO tbl_user(username, password, email, role) VALUES ('$username', '$password', '$email', '$role')";
                $catinsert = $db->insert($query);
                if ($catinsert){
                    echo "<span class='success'>USer Created successfully! !</span>";
                }else{
                    echo "<span class='error'>USer not Created !</span>";
                }
            }
          }
        }
       
        ?>
    <form action="" method="post">
        <table class="form">
            <tr>
                <td>
                    <label for="">Username</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Enter User Name..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Password</label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="Enter your password..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Email</label>
                </td>
                <td>
                    <input type="text" name="email" placeholder="Enter your valid email..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">User Role</label>
                </td>
                <td>
                    <select name="role" id="select">
                        <option value="">Select User Role</option>
                        <option value="0">Admin</option>
                        <option value="1">Author</option>
                        <option value="2">Subscriber</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Create" />
                </td>
            </tr>
        </table>
    </form>
    </div>
  </div>
</div>
<div class="clear">
</div>
</div>
<?php
include ('inc/footer.php');
