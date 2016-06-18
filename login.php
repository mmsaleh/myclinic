<?php include_once 'includes/header.php'; ?>
<form method="post" class="form-horizontal">
     <div class="form-group">
        <label class="control-label col-sm-2" for="username">
         Username
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="username" name="username" placeholder="username" type="text"/>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="password">
         Password
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="password" name="password" placeholder="password" type="password"/>
      </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="fname">
         First Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="fname" name="fname" placeholder="first name" type="text"/>
      </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="lname">
         Last Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="lname" name="lname" placeholder="last name" type="text"/>
      </div>
    </div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<?php include_once 'includes/footer.php'; ?>