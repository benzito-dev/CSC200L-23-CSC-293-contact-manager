<?php include "db.php";
$result = $conn->query("SELECT * FROM student_records"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registered Students</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", sans-serif;
            background: #f7f9fc;
        }

        header {
            background: #0066cc;
            color: #fff;
            padding: 18px 0;
            text-align: center;
            font-size: 1.4em;
        }

        .card {
            width: 90%;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #e6e6e6;
            text-align: center;
        }

        th {
            background: #0066cc;
            color: #fff;
        }

        .delete {
            color: #cc0000;
            text-decoration: none;
        }

        .delete:hover {
            text-decoration: underline;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #0066cc;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>Registered Students</header>
    <div class="card">
        <h2>All Students</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Matric Number</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['department']; ?></td>
                    <td><?= $row['matric_number']; ?></td>
                    <td><a class="delete" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a class="link" href="index.php">Add New Student</a>
    </div>
</body>

</html>