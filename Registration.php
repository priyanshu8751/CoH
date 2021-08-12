<?php $title="REGISTRATION FORM";
    require_once 'includes\header.php';
 
    echo'</br>';
?>

    <h1 class="text-center ">REGISTRATION FORM</h1>
    <br>
    
    

    <!-- 
        First Name Last Name
        Date of Birth
        Sex
        Contact Number
        Email 
        Symptoms,if any
        Allergies,if any
    -->

    <!-- First and Last name-->

  <div class="form-group">
    <label for="firstname" >First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname" >Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>

  <!--Date of birth-->
    <div class="form-group">
        <label for="dob" >Date of Birth</label>
    </div>
    <div class="col-md-4">
        <label for="inputdate" class="form-label">Date</label>
        <select id="inputdate" class="form-select" name="inputdate">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputmonth" class="form-label">Month</label>
        <select id="inputmonth" class="form-select" name="inputmonth">
        <option selected>Choose...</option>
        <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
        </select>
    </div>
  <div class="col-md-4">
    <label for="inputyear" class="form-label">Year</label>
    <input type="text" class="form-control" id="inputyear" name="inputyear" >
  </div>

  <!-- Sex-->
    
        <div class="col-md-2">
            <label for="inputsex" class="form-label">Sex</label>
            <select id="inputsex" class="form-select" name="inputsex">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
    <!-- Phone number-->
    <div class="col-md-5">
        <label for="inputphno" class="form-label">Phone no.</label>
        <input type="text" class="form-control" id="inputphno" name="inputphno">
    </div>
    
    <!--Email id-->
    
    <div class="col-md-5">
        <label for="inputemail" class="form-label">Email Id</label>
        <input type="text" class="form-control" id="inputemail" name="inputemail">
    </div>

    <!-- Symptoms, if any-->

   <div class="col-12">
    <label for="symptoms" class="form-label">Symptoms, If Any</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Symptoms" id="symptoms" name="symptoms">
            </textarea>
            <label for="floatingTextarea"></label>
        </div>
   </div>
    <!-- Allergies, if any-->

   <div class="col-12">
    <label for="allergies" class="form-label">Allergies, If Any</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="allergies" id="allergies" name="allergies">
            </textarea>
            <label for="floatingTextarea"></label>
        </div>
   </div>
 <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
