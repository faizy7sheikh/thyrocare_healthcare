<!DOCTYPE html>
<html>
<head>
    <title>Send WhatsApp Message</title>
</head>
<body>
    <form action="/whatsapp/send-message" method="POST">
        @csrf
        <input type="text" name="number" placeholder="Phone Number">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>
