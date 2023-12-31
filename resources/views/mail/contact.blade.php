<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #009688;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            color: #47b0ab;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Request</h1>
        <p><strong>Name:</strong> {{ $contactdata['name'] }}</p>
        <p><strong>Mobile:</strong> {{ $contactdata['mobile'] }}</p>
        <p><strong>WhatsApp No.:</strong> {{ $contactdata['whats_app'] }}</p>
        <p><strong>Subject:</strong> {{ $contactdata['subject'] }}</p>
        <p><strong>Message:</strong> {{ $contactdata['message'] }}</p>
    </div>
</body>
</html>
