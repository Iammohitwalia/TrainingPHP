<form action="" method="post">
    <lable for="name">Name:</lable><br>
    <input type="text" name="name" />

    <lable for="LastName">Last Name:</lable><br>
    <input type="text" name="lname"><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" required="true"><br>

    <lable for="age">Age:</lable><br>
    <input type="number" name="age"><br><br>

    <button type="submit">Submit</button>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = ($_POST['name']);
    $lname = ($_POST['lname']);
    $email = ($_POST['email']);
    $age = ($_POST['age']);

    echo "<h2>Submitted Data</h2>";
    echo "<table border = '1'>
    <tr>
    <th>Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Age</th>
    </tr>
    <tr>
    <td>$name</td>
     <td>$lname</td>
      <td>$email</td>
       <td>$age</td>
</tr>
    </table>";
} else {
    echo "Something Wrong.";
}
?>
