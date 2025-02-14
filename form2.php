<?php
$name = $email = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  data from form
    $name = htmlspecialchars($_POST["name"]);
    $lname = htmlspecialchars($_POST["last-name"]);
    $email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);
}
?>
<form action="" method="POST">
  <input type="text" placeholder="First Name" name="name" id="name"><br><br>
  <input type="text" placeholder="Last Name" name="last-name" id="name" ><br><br>
<input type="email" placeholder="Email" name="email" id="email"><br><br>
<input type="text" placeholder="Address" name="address" id="address"><br><br>
<button type="button" onclick="alert('Form Submitted Successfully')">Submit</button>

</form>
<?php
// after submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Submitted Form Data:</h3>";
    echo  $name . "<br>";
    echo  $lname . "<br>";
    echo  $email . "<br>";
    echo  $address ;
  
}
?>