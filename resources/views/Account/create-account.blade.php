<html>

<head>
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
<form action="/create" method="POST">
    @csrf
    <div class="container">
        Username:
        <div><input required type="text" name="username"></div>
        Password:
        <div><input required type="text" name="password"></div>
        Email:
        <div><input required type="email" name="email"></div>
        <div>
            <button class="btn btn-primary btn-lg">Save</button>
        </div>
    </div>
</form>
</body>
</html>
