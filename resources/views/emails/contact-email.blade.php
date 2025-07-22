<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Email</title>
</head>
<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:1">
        <p></p>
        <p style="font-size:0.9em;"><strong>First Name : </strong>{{ $first_name }}</p>
        @if (!empty($last_name))
            <p style="font-size:0.9em;"><strong>Last Name : </strong>{{ $last_name }}</p>
        @endif
        <p style="font-size:0.9em;"><strong>Email : </strong><a href="mailto:{{ $email }}">{{ $email }}</a></p>
        @if (!empty($phone))
            <p style="font-size:0.9em;"><strong>Phone : </strong><a href="tel:{{ $phone }}">{{ $phone }}</a></p>
        @endif
        <p style="font-size:0.9em;"><strong>Ip Address : </strong>{{ $ip }}</p>
        <p style="font-size:0.9em;"><strong>Message : </strong>{{ $inquiry_message }}</p>
    </div>
</body>
</html>