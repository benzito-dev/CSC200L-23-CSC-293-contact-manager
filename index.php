<?php // index.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", sans-serif;
            background: #f7f9fc;
        }

        header {
            background: #0066cc;
            color: #fff;
            text-align: center;
            padding: 18px 0;
            font-size: 1.4em;
        }

        .card {
            width: 420px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 12px 0 4px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 0.95em;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #0066cc;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            margin-top: 18px;
            cursor: pointer;
        }

        button:hover {
            background: #0055aa;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>Student Registration System</header>
    <div class="card">
        <h2>Register Student</h2>
        <form action="process.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="full_name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Department</label>
            <input type="text" name="department" required>

            <label>Matric Number</label>
            <input type="text" name="matric_number" required>

            <button type="submit" name="register">Submit</button>
        </form>
        <a href="view.php">View Registered Students</a>
    </div>
</body>

</html>