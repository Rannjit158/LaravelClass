<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            text-align: center;
            padding: 100px;
        }
        h1 {
            color: #4CAF50;
        }
        a {
            color: #3490dc;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Laravel App</h1>
    <p>This is the welcome page.</p>
    <a href="{{ url('/home') }}">Go to Home Page</a>
</body>
</html>
