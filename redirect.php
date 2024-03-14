<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Confirmation Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .card h2 {
            color: #333;
        }

        .card p {
            color: #666;
            margin-bottom: 20px;
        }

        .mobile-number {
            font-size: 1.2em;
            color: #3498db;
            margin-top: 10px;
        }

        .message {
            font-style: italic;
            color: #27ae60;
        }
    </style>
</head>

<body>
    <?php
    // $dbhost = "localhost:3306";
    // $dbuser = "root";
    // $dbpass = "0808@#Tejas";
    // $db = "cion_db";
    $dbhost = "sql305.infinityfree.com";
    $dbuser = "if0_36160230";
    $dbpass = "Tejas@#2003";
    $db = "if0_36160230_cion_db";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . mysqli_connect_error());
    if (!$conn) {
        die("" . mysqli_connect_error());
    } 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $biopsy_type = $_POST['type'];
        $number = $_POST['number'];
        $sql = "INSERT INTO user_data (name, biopsy_type, phone_number) VALUES ('$name', '$biopsy_type', '$number')";

        if ($conn->query($sql) === TRUE) {
            echo " <div class='card'>
            <h2>$name you successfully added!</h2>
            <p>You will receive a call shortly.</p>
            <div class='mobile-number'>Mobile Number: $number</div>
            <p class='message'>Thank you for using our service.</p>
        </div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }; ?>

</body>

</html> ';