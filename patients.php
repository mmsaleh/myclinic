<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
  <h2>Manage Patients</h2>
  <a href="add_patient.php">Add Patient</a>

  <table class="table table-bordered table-striped">
    <tr>
      <thead>
      <th>ID</th>
      <th>Patient Name</th>
      <th>Mobile</th>
      <th>Age</th>
      <th>gender</th>
      <th>Blood Type</th>
      <th>Address</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    </thead>
    <tbody>
<?php
  $query  = "select * from patients";
  $result = mysqli_query($link, $query);
  while($userSet = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>{$userSet['patient_id']}</td>";
    echo "<td>{$userSet['patient_name']}</td>";
    echo "<td>{$userSet['mobile']}</td>";
    echo "<td>{$userSet['age']}</td>";
    echo "<td>{$userSet['gender']}</td>";
    echo "<td>{$userSet['bloodtype']}</td>";
    echo "<td>{$userSet['address']}</td>";
    echo "<td><a href='edit_patient.php?patient_id={$userSet['patient_id']}'>Edit</a></td>";
    echo "<td><a href='delete_patient.php?patient_id={$userSet['patient_id']}'>Delete</a></td>";
  }
?>
  </tbody>
  </table>
<?php include_once 'includes/footer.php'; ?>
