<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $data['fname'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
</body>
</html>
