<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            backdrop-filter: blur(10px);
            animation: slideIn 0.8s ease-in-out;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #4a4a4a;
            background: linear-gradient(45deg, #f093fb, #f5576c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="number"] {
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1em;
            transition: all 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #f093fb;
            box-shadow: 0 0 10px rgba(240, 147, 251, 0.5);
        }

        button[type="submit"] {
            padding: 15px;
            background: linear-gradient(45deg, #f093fb, #f5576c);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        a {
            color: #f5576c;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #f093fb;
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
                margin: 20px;
            }
            h2 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add Student</h2>

    <form action="save_student.php" method="POST">
        <input type="text" name="name" placeholder="Student Name" required><br><br>
        <input type="text" name="roll" placeholder="Roll No" required><br><br>
        <input type="text" name="class" placeholder="Class" required><br><br>
        <input type="number" name="marks" placeholder="Marks" required><br><br>
        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="index.php">Back to Home</a>
</div>

</body>
</html>
```