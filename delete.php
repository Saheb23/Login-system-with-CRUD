<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){
    include "config.php";
    $stu_id=$_POST['s_id'];
    $sql= "DELETE FROM student_d WHERE s_id={$stu_id}";
    $result= mysqli_query($conn,$sql) or die("Quary unsucessful");

    header("Location: index.php");
    mysqli_close($conn);

}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
