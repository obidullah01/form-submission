<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
</head>

<body>

<?php 

  $firstname=$lastname=$gender=$birthdate=$relegion=$permenantaddress=$presentaddress=$phone=$email=$username=$password="";
  $firstnameError=$lastnameError=$genderError=$birthdateError=$relegionError=$emailError=$usernameError=$passwordError="";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first_name"])) {
      $firstnameError="First Name is Required!";
    }
    if (empty($_POST["last_name"])) {
      $lastnameError="Last Name is Required!";
    }
    if (empty($_POST["gender"])) {
      $genderError="gender is Required!";
    }

    if (empty($_POST["
    "])) {
      $birthdateError="Birthdate is Required!";
    }
    if (empty($_POST["relegion"])) {
      $relegionError="Relegion is Required!";
    }

    if (empty($_POST["email"])) {
      $emailError="Email is Required!";
    }if (empty($_POST["username"])) {
      $usernameError="User Name is Required!";
    }
    if (empty($_POST["password"])) {
      $passwordError="Pasword is Required!";
    }



  }

?>
  <h1>Basic information</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    First Name
    <input type=”text” name='first_name'>
    <span><?php echo $firstnameError; ?></span>
    Last Name:
    <input type="text" name="last_name">
    <span><?php echo $lastnameError; ?></span>
    <br>
    Gender:
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <span><?php echo $genderError; ?></span>

    <br>
    <br>
    <label for="birthdate">Birthdate:</label>
    <input type="date" id="birthday" name="birthdate">
    <span><?php echo $birthdateError; ?></span>

    <br>
    <br>


    <label for="Relegion">Relegion:</label>

    <select id="Relegion" name='relegion'>
      <option value="Islam">Islam</option>
      <option value="Hindu">Hindu</option>
      <option value="Christ">Christ</option>
      <option value="Buddah">Buddah</option>
    </select>
    <span><?php echo $relegionError; ?></span>

    <br>
    <br>
    <h2>Contact Information</h2>
    <br>
    Present Address
    <textarea name="present_adr" id="" cols="30" rows="10"></textarea>
    Permenant Address
    <textarea name="permanent_adr" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <label for="phone">phone number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    <br>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <span><?php echo $emailError; ?></span>

    <br>
    <br>
    <br>
    <br>
    <br>
    <label for="Web Link">Web Link:</label>
    <br>
    <input type="text" name="url" id="url">
    <br>
    <br>
    <p>Username</p>
    <input type="text" name="username" id="username">
    <span><?php echo $usernameError; ?></span>
    <br>
    <br>
    <input type="password" name="password" id="pass">
    <span><?php echo $passwordError; ?></span>
    <br>
    <input type="submit">

  </form>
</body>

</html>