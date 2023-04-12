<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register Here</h1>
    <form method="POST" action="{{ url('/welcome') }}">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
