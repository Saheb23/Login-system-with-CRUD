<?php include 'main.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $stu_id =$_SESSION['AdminLoginId'];
         $sql= "SELECT * FROM `student_d` WHERE s_email='$stu_id'";
        $result= mysqli_query($conn,$sql) or die("Quary unsucessful");
        if(mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="uupdatedata.php" method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="s_name" value="<?php echo $row['s_name'];?>"/>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="s_address" value="<?php echo $row['s_address'];?>"/>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="tel" name="s_phone" value="<?php echo $row['s_phone'];?>"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="s_email" value="<?php echo $row['s_email'];?>" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="s_password" value="<?php echo $row['s_password'];?>" />
    </div>
    <input class="submit" type="submit" name="save" value="Update"/>
    </form>
    <?php
        
    }

    }
    
    ?>
</div>
</div>
</body>
</html>
