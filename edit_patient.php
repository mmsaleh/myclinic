<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing user data from database
$query ="select * from patients where patient_id = {$_GET['patient_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit Patient</h2>

<form class="form-horizontal" action="update_patient.php" method="post">
     <div class="form-group">
        <label class="control-label col-sm-2" for="patient_name">
         Patient Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="patient_name" name="patient_name" placeholder="Patient Name" type="text" value="<?php echo $userSet['patient_name']; ?>">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">
         Mobile
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="mobile" name="mobile" placeholder="mobile" type="text" value="<?php echo $userSet['mobile']; ?>">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="age">
         Age
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="age" name="age" placeholder="age" type="text" value="<?php echo $userSet['age']; ?>">
      </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
          <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="gender" id="male" value="male" <?php if($userSet['gender']=='male'){echo 'checked';} ?> >
            Male
          </label>
        </div>
        <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="gender" id="female" value="female" <?php if($userSet['gender']=='female'){echo 'checked';} ?> >
            Female
          </label>
        </div>
        </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Blood Type</label>
        <div class="col-md-10">
          <select class="form-control" name="bloodtype">
            <option value="">Select Blood Type</option>
            <option value="A+" <?php if($userSet['bloodtype']=='A+'){echo 'selected = "selected"';} ?> >A+</option>
            <option value="A-" <?php if($userSet['bloodtype']=='A-'){echo 'selected = "selected"';} ?> >A-</option>
            <option value="B+" <?php if($userSet['bloodtype']=='B+'){echo 'selected = "selected"';} ?> >B+</option>
            <option value="B-" <?php if($userSet['bloodtype']=='B-'){echo 'selected = "selected"';} ?> >B-</option>
            <option value="AB+" <?php if($userSet['bloodtype']=='AB+'){echo 'selected = "selected"';} ?> >AB+</option>
            <option value="AB-" <?php if($userSet['bloodtype']=='AB-'){echo 'selected = "selected"';} ?>>AB-</option>
            <option value="O+" <?php if($userSet['bloodtype']=='O+'){echo 'selected = "selected"';} ?>>O+</option>
            <option value="O-" <?php if($userSet['bloodtype']=='O-'){echo 'selected = "selected"';} ?>>O-</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="address">
         Address
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="address" name="address" placeholder="address" type="text" value="<?php echo $userSet['address']; ?>">
      </div>
    </div>
  <input type="hidden" name="patient_id" value="<?php echo $userSet['patient_id']; ?>">
  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Edit Patient</button>
      </div>
  </div>
</form>

<?php include_once 'includes/footer.php'; ?>
