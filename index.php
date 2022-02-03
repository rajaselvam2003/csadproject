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
        
        $ans = mysqli_query($con, "INSERT INTO myuserdatabase.users(user_name,user_email,user_rating)
                            VALUES('$nam','$email','$rating')");
    
        if(!$ans){
            echo "<br>error";
        }
        else{
            echo "<br>inserted";
        }   
          
        
    }
      $result = mysqli_query($con, "select * from myuserdatabase.Users");
            ?>
        <table border="2">
            <tr colspan="5">
                <th>name</th>
                <th>email</th>
                <th>rating</th>
            </tr>
                
                
                <?php
                
                foreach($result as $r)
                
                {
                    ?>
                        <tr colspan="5">
                        <td><?php echo $r['user_name']; ?></td>
                        <td><?php echo $r['user_email']; ?></td>
                        <td><?php echo $r['user_rating'];?></td>
                        <td><a class="btn" href="update.php?id=<?php echo $r['user_id']; ?>">Edit</a></td>
                        <td><a class="btn" href="update.php?id=<?php echo $r['user_id']; ?>">Delete</a></td>
                    </tr>
                    <br>
                    <?php


                    }
                    
                    ?>
                    
                    
                    
             
                    <?php
     if(isset($_POST['saves']))
     {
         
         $ids = $_POST['ids'];
         $nam = $_POST['fname'];
         $email = $_POST['email'];
         $rating = $_POST['rating'];
         
         $answer = mysqli_query($con,"UPDATE myuserdatabase.users SET user_name = "
                 . "'$nam', user_email = '$email', user_rating = '$rating' WHERE user_id = $ids");
         if($answer){
             echo "updated successfully";
         }
     }   
                    ?>
</table>
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
<input type="button" name="saves" value="saves"/>
</td>
</tr>
</table>
</form>
</body>
</html>
