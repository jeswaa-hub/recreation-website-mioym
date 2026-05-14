<!DOCTYPE html>
<html>
<head>
    <title>New Chat Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">
    <h2 style="color: #1e3a5f;">New Chat Inquiry Received</h2>
    
    <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-top: 15px;">
        <p><strong>Name:</strong> {{ $inquiry->name }}</p>
        <p><strong>Email:</strong> {{ $inquiry->email }}</p>
        <p><strong>Phone:</strong> {{ $inquiry->phone ?? 'Not provided' }}</p>
        <p><strong>Message:</strong></p>
        <p style="background: white; padding: 10px; border-radius: 4px;">{{ $inquiry->message }}</p>
    </div>

    <p style="margin-top: 20px; color: #666;">
        This inquiry was sent through the live chat on your website.
    </p>
</body>
</html>
