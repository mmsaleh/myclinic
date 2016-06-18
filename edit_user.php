<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing user data from database
$query ="select * from users where user_id = {$_GET['user_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>

<form class="form-horizontal" action="update_user.php" method="post">
     <div class="form-group">
        <label class="control-label col-sm-2" for="username">
         Username
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="username" name="username" placeholder="username" type="text" value="<?php echo $userSet['username']; ?>" >
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="password">
         Password
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="password" name="password" placeholder="password" type="password"value="<?php echo $userSet['password']; ?>" >
      </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="fname">
         First Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="fname" name="fname" placeholder="first name" type="text" value="<?php echo $userSet['first_name']; ?>" >
      </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="lname">
         Last Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="lname" name="lname" placeholder="last name" type="text" value="<?php echo $userSet['last_name']; ?>" >
      </div>
    </div>
    <input type="hidden" name="user_id" value="<?php echo $userSet['user_id']; ?>">
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Update</button>
	    </div>
	</div>
</form>



<?php include_once 'includes/footer.php'; ?>
