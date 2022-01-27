<!DOCTYPE html>
<html>
<body>
    <?php 
    include 'db.php';
    if(isset($_POST['save']))
    {
        $nam=$email=$rating = "";
        $nam = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $rating = $_REQUEST['rating'];
        
        echo "<br>".$nam; 
        echo "<br>".$email;
        echo "<br>".$rating;
        
        $ans = mysqli_query($con, "INSERT INTO 'Users'(user_name,user_email,user_rating)
               VALUES('$nam','$email','$rating')");
    
        if(!$ans){
            echo "<br>error";
        }
        else{
            echo "<br>inserted";
        }    
    }
    ?>
<form method="POST" action="">
<table border="1" align="center" width="400" bgcolor="#cccccc">
<caption>Registration form</caption>
<tr>
<th>Name:</th>
<td><input type="text" name="fname" id="name" maxlength="10" title="enter your first
name" placeholder="enter your name" required/></td>
</tr>
<tr>
<th>Email:</th>
<td><input type="text" name="email" id="email" placeholder="enter your email" required></td>
</tr>
<tr>
<th>Rating:</th>
<td><input type="number" name="rating" id="rating" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="save" value="Save My Data"/>
<input type="reset" value="Reset Data"/>
</td>
</tr>
</table>
</form>
</body>
</html>
