<?php
include 'main.php';
if(!isset($_SESSION['AdminLoginId']))
{
    header("Location: ulogin.php");
}
?>
<div id="main-content">
    <h2>Records</h2>
    <?php
        $stu_id =$_SESSION['AdminLoginId'];
        $sql= "SELECT * FROM `student_d` WHERE s_email='$stu_id'";
        $result= mysqli_query($conn,$sql) or die("Quary unsucessful");
        if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <!-- <th>Psaaword</th> -->
        <th>Photo</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
            
                    <tr>
                        <td><?php echo $row['s_id'];?></td>
                        <td><?php echo $row['s_name'];?></td>
                        <td><?php echo $row['s_address'];?></td>
                        <td><?php echo $row['s_phone'];?></td>
                        <td><?php echo $row['s_email'];?></td>
                        <!-- <td><?php echo $row['s_password'];?></td> -->
                        <td><img src="<?php echo $row['picture'];?>" width="100" height="100"></td>
                        <td>
                            <a href='uedit.php?email=<?php echo $row['s_email'];?>'>Edit</a>
                        </td>
                    </tr>
            <?php }?>
            
        </tbody>
    </table>
    <?php }
    else{
        echo "<h3> No record found</h3>";}
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>