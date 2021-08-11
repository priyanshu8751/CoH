<?php $title="View Record";
    include 'includes\header.php';
    include 'includes/auth_check.php';
    require_once 'Database\conn.php';
    echo'</br>';

    if(isset($_GET['id']))
{
 $id=$_GET['id'];
 $result = $crud->getPatientdetails($id);
}
else{
    echo "<h1 class='text-danger'> Please check and try Again</h1>";
}
?>

<div class="card">
  <div class="card-header">
    Your Submission
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname']." ". $result['lastname']?></h5>

    <p class="card-text"><?php echo 'Date of Birth: '. $result['D']."/". $result['M']."/". $result['Y']?></p>

    <p class="card-text"><?php echo 'Sex: '. $result['sex']?></p>

    <p class="card-text"><?php echo 'Phone Number: '. $result['phno']?></p>

    <p class="card-text"><?php echo 'Email: '. $result['email']?></p>

    <p class="card-text"><?php echo 'Symptoms: '. $result['symptoms']?></p>

    <p class="card-text"><?php echo 'Allergies: '. $result['allergies']?></p>


    <a href="viewrecords.php" class="btn btn-primary">Go back to Common records page</a>
  </div>
</div>


<?php
    return 'includes/footer.php';
?>