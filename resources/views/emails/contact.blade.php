<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; /* beige claro */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 28px;
            color: #005f73; /* teal-700 */
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #333; /* gris oscuro */
            margin-bottom: 20px;
        }
        .footer {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact from {{ $name }}</h1>
        <p>{{ $body }}</p>
        <br />
        <p class="footer">From: {{ $email }}</p>
    </div>
</body>
</html>


