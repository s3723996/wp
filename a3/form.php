<!DOCTYPE HTML>
<html>
<?php
  include("header.php");
echo <<<DISP
<head>
  <style>.error {color: #FF0000;}</style>
</head>
<body>
<a href="checkout.php">
    <input type="button" value="VIEW CART">
</a>
DISP;

// define variables and set to empty values
$nameErr = $emailErr = $number= $mobNoErr =$name = $email = $mobNo=$address= $addressErr = $numberErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }



  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }



  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);

if(!preg_match("#^[a-zA-Z0-9 ,'-\(04\))[0-9]{8}$/",$address)){
$addressErrr = "Enter valid address";
}
  }
  if (empty($_POST["date"])) {
    $expDateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }
  if (empty($_POST["number"])) {
    $numberErr = "Credit card number is required";
  } else {
    $number = test_input($_POST["number"]);
        if (!preg_match("/^[0-9 ]{12,19}$/",$number)) {
            $numberErr="Invalid credit cardnumber";

       }
    }
    if (empty($_POST["mobNo"])) {
        $mobNoErr = "Mobile number is required";
      } else {

            if(!preg_match("/^(\+614|04|\(04\))[0-9]{8}$/", $mobNo)) {
                $mobErr="Invalid mobile number";

           }
        }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>CheckOut </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  address: <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  Credit card number: <input type="text" name="number" value="<?php echo $number;?>">
  <span class="error">* <?php echo $numberErr;?></span>
 <br> <br>
  Mobile number: <input type="text" name="mobNo" value="<?php echo $mobNo;?>">
  <span class="error">* <?php echo $mobNoErr;?></span>
 <br> <br>
Expiry date: <input type="text" name="Expiry date" value="<?php echo $expDate;?>">
  <span class="error">* <?php echo $expDateErr;?></span>
 <br> <br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $address;
echo "<br>";
echo $number;
echo "<br>";
echo $mobNo;
echo "<br>";
echo $expDate;
?>

</body>
</html>

<?php
include("footer.php");
?>
