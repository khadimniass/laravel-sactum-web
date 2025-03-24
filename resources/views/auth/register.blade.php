<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @if ($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            @if ($errors->has('password_confirmation'))
                <p>{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
