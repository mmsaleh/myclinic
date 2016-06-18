<?php include_once 'includes/header.php'; ?>
  <h2>Add Patient</h2>

  <form class="form-horizontal" action="create_patient.php" method="post">
     <div class="form-group">
        <label class="control-label col-sm-2" for="patient_name">
         Patient Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="patient_name" name="patient_name" placeholder="Patient Name" type="text"/>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">
         Mobile
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="mobile" name="mobile" placeholder="mobile" type="text">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="age">
         Age
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="age" name="age" placeholder="age" type="text"/>
      </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
          <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="gender" id="male" value="male">
            Male
          </label>
        </div>
        <div class="radio">
          <label class="radio-inline">
            <input type="radio" name="gender" id="female" value="female">
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
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="address">
         Address
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="address" name="address" placeholder="address" type="text"/>
      </div>
    </div>
  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
      </div>
  </div>
</form>
<?php include_once 'includes/footer.php'; ?>
