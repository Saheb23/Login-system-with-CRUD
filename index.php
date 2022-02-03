<?php
include 'header.php';
if(!isset($_SESSION['AdminLoginId']))
{
    header("Location: loginadmin.php");
}
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        include "config.php";
        $sql= "SELECT * From student_d";
        $result= mysqli_query($conn,$sql) or die("Quary unsucessful");
        if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
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
                        <td><?php echo $row['s_password'];?></td>
                        <td><img src="<?php echo $row['picture'];?>" width="100" height="100"></td>
                        <td>

                            <a href='edit.php?id=<?php echo $row['s_id'];?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['s_id'];?>'>Delete</a>
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
