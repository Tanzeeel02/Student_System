<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .dashboard-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            backdrop-filter: blur(10px);
            animation: fadeInUp 0.8s ease-in-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            margin-bottom: 40px;
            font-size: 2.5em;
            color: #333;
            font-weight: bold;
        }

        .menu-links {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        a {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, #a8edea, #fed6e3);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: black
        }

        a:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 480px) {
            .dashboard-container {
                padding: 20px;
                margin: 20px;
            }
            h2 {
                font-size: 2em;
            }
            a {
                padding: 12px 20px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h2>Student Management System</h2>

    <div class="menu-links">
        <a href="add_student.php">Add Student</a><br><br>
        <a href="search.php">Search Student</a><br><br>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>
```