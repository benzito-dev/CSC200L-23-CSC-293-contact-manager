<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Submission Result</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", sans-serif;
            background: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 420px;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .msg {
            font-size: 1.1em;
            margin: 18px 0;
        }

        .success {
            color: #2e8b57;
        }

        .error {
            color: #cc0000;
        }

        a {
            display: inline-block;
            margin: 8px;
            padding: 10px 16px;
            color: #fff;
            background: #0066cc;
            text-decoration: none;
            border-radius: 6px;
        }

        a:hover {
            background: #0055aa;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Registration Status</h2>
        <?php
        if (isset($_POST['register'])) {
            $fullname = trim($_POST['full_name']);
            $email = trim($_POST['email']);
            $dept = trim($_POST['department']);
            $matric = trim($_POST['matric_number']);

            if (empty($fullname) || empty($email) || empty($dept) || empty($matric)) {
                echo "<p class='msg error'>All fields are required!</p>";
                echo "<a href='index.php'>Try Again</a>";
                exit;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='msg error'>Invalid email address!</p>";
                echo "<a href='index.php'>Try Again</a>";
                exit;
            }

            $sql = "INSERT INTO student_records (full_name,email,department,matric_number)
            VALUES ('$fullname','$email','$dept','$matric')";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='msg success'>Student registered successfully.</p>";
                echo "<a href='view.php'>View Students</a>";
                echo "<a href='index.php'>Add Another</a>";
            } else {
                echo "<p class='msg error'>Database error: " . $conn->error . "</p>";
                echo "<a href='index.php'>Try Again</a>";
            }
        }
        ?>
    </div>
</body>

</html>