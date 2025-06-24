<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Home</h1>
    <form action="{{ url('/formSubmitted') }}" method="post">
        @csrf
        <label for="fullName">Full Name: </label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter Your Full Name" required>

        <br><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email" placeholder="Enter Your Email" required>

        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
