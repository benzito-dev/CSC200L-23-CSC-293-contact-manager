<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Student</title>
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
            padding: 10px 16px;
            margin-top: 10px;
            background: #0066cc;
            color: #fff;
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
        <h2>Delete Record</h2>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM student_records WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='msg success'>Student deleted successfully.</p>";
            } else {
                echo "<p class='msg error'>Error deleting record: " . $conn->error . "</p>";
            }
            echo "<a href='view.php'>Back to Students</a>";
        }
        ?>
    </div>
</body>