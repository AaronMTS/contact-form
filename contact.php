<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["submit"])) {
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $age = $_POST["age"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
} else {
  header("Location: ./index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
</head>
<body>
    <div>
        <p>First Name:</p>
        <p><?php echo htmlspecialchars($firstName)?></p>
    </div>
    <div>
        <p>Last Name:</p>
        <p><?php echo htmlspecialchars($$lastName)?></p>
    </div>
    <div>
        <p>Age:</p>
        <p><?php echo htmlspecialchars($age)?></p>
    </div>
    <div>
        <p>Contact Number:</p>
        <p><?php echo htmlspecialchars($contact)?></p>
    </div>
    <div>
        <p>Address:</p>
        <p><?php echo htmlspecialchars($address)?></p>
    </div>
</body>
</html>