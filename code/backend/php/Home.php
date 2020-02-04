<?php
include 'connection.php';
session_start();
if($_SESSION["email"] != ''){
echo'
<!DOCTYPE html>
<html>
<head lang="en">
  <title>Mapping For A Change</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="../../frontend/css/Information.css">
  <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../../frontend/js/Information.js"></script>
</head>

<body>
  <header>
    <h1>Information</h1>
  </header>
  <main>
    <form method="post" action="./Information.php">
      <h3>Occupants:</h3>
      <label>Gender of Occupants</label>
      <select name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Transgender">Transgender</option>
      <option value="Other">Other</option>
      </select>
      <br>
      <label>Demographic</label>
      <select name="age">
      <option value="under19">Youth (16-18)</option>
      <option value="over19">Adult (19+)</option>
      <option value="Senior">Senior (55+)</option>
      <option value="Other">Other</option>
    </select>
      <br>
      <label>Suitable For:</label>
      <select name="group">
      <option value="individual">Individual</option>
      <option value="couples">Couples</option>
      <option value="family">Family</option>
      <option value="other">Other</option>
      </select>
      <br>


      <h3>Building Info:</h3>
      <label>Available immediately:</label>
      <input type="checkbox" name="availableNow">
      <br>

      <label>Number of Bedroom Units Needed:</label>
      <input type="number" name="numbeds">
      <br>
      <label>Building Type:</label>
      <select name="BuildingType">
          <option value="emergency">Emergency</option>
          <option value="transitional">Transitional</option>
          <option value="supportive">Supportive</option>
          <option value="low income rental">Low Market</option>
          </select>
      <br>

      <label>Building Accomodates Individuals with Disabilities</label>
      <input type="checkbox" name="buildingdisability">
      <br>
      <label>Units Accomote Individuals with Disabilities</label>
      <input type="checkbox" name="unitdisability">
      <Br>


      <label>The building is Rent Geared to Income (RGI)</label>
      <input type="checkbox" name="rgi">
      <br>

      <label>Monthly Cost Range:</label>
      <select name="cost">
          <option value="zero">$0 per month</option>
          <option value="under500">$500 or less per month</option>
          <option value="under1000">$1000 or less per month</option>
          <option value="other">Other amount</option>
          </select>
      <br>
      <label>Pet Friendly:</label>
      <input type="checkbox" name="PetFriendly">
      <br>
      <br>
      <input type="submit" name="submit" value="submit" class="button">
      <input type="reset" name="reset" value="reset" class="button">
    </form>
    <form method="post" action="Logout.php">
      <button type="submit" class="btn btn-link btn-logout">Logout</button>
    </form>
  </main>
  <footer>
  </footer>
</body>

</html>

 ';
}
else{
  header('Location: Login.php');
}
?>
