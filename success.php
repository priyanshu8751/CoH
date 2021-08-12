<?php $title="Success";
    include 'includes\header.php';
    

    if(isset($_POST['submit']))
    {
      //Extracting values from $_Post
      $fname=$_POST['firstname'];
      $lname=$_POST['lastname'];
      $d=$_POST['inputdate'];
      $m=$_POST['inputmonth'];
      $y=$_POST['inputyear'];
      $sex=$_POST['inputsex'];
      $phno=$_POST['inputphno'];
      $email=$_POST['inputemail'];
      $symp=$_POST['symptoms'];
      $al=$_POST['allergies'];
      $isSuccess = $crud->insert($fname, $lname, $d,$m, $y, $sex, $phno, $email,$symp, $al);

      if($isSuccess)
      {
        echo '<h1 class="text-center text-success"> You Have Been Registered!</h1>';
      }
      else
      {
          echo'<h1 class="text-center text-danger"> There was an error in the processing</h1>';
      }
    }
    echo'</br>';
?>



<div class="card">
  <div class="card-header">
    Your Submission
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname']." ". $_POST['lastname']?></h5>

    <p class="card-text"><?php echo 'Date of Birth: '. $_POST['inputdate']."/". $_POST['inputmonth']."/". $_POST['inputyear']?></p>

    <p class="card-text"><?php echo 'Sex: '. $_POST['inputsex']?></p>

    <p class="card-text"><?php echo 'Phone Number: '. $_POST['inputphno']?></p>

    <p class="card-text"><?php echo 'Email: '. $_POST['inputemail']?></p>

    <p class="card-text"><?php echo 'Symptoms: '. $_POST['symptoms']?></p>

    <p class="card-text"><?php echo 'Allergies: '. $_POST['allergies']?></p>


    <a href="index.php" class="btn btn-primary">Go back to Home Page</a>
  </div>
</div>

<?php
    return 'includes/footer.php';
?>
