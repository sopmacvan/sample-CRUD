<html>

<head>
    <title>Update Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

</head>
<body>
<form action="/update" method="POST">
    @csrf
    <div class="container">
        <input type="hidden" name="id" value="{{$account->id}}">
        Username:
        <div>
<input required type="text" name="username" value="{{$account->username}}"></div>
        Password:
        <div><input required type="text" name="password" value="{{$account->password}}"></div>
        Email:
        <div><input required type="email" name="email" value="{{$account->email}}"></div>
        <div>
            <button class="btn btn-primary btn-lg">Save</button>
        </div>
    </div>

</form>

</body>
</html>
