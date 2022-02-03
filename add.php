<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="s_name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="s_address" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="s_phone" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="s_email" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="s_password" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
