<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightFrame - Project Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            padding: 50px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .btn-custom {
            background-color: white;
            color: #007bff;
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
        }
        .btn-custom:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <div class="hero">
        <div>
            <h1>Welcome to BrightFrame</h1>
            <p class="lead">Your Ultimate Project Management Solution</p>
            <a href="{{ route('dashboard') }}" class="btn btn-custom">Get Started</a>
        </div>
    </div>

</body>
</html>
