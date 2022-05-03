<html lang="eng">
<head>
    <title>Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm">
    <form action="/read" method="GET">
        @csrf
        <input type="text" name="search" placeholder="Type username">
        <button class="btn btn-outline-primary float-right">Search</button>

    </form>
    <a class="btn btn-outline-primary float-right" href="/create-from">Create New</a>

    <table class="table">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
        @foreach($accounts as $account)
            <tr>
                <td>{{$account->username}}</td>
                <td>{{$account->password}}</td>
                <td>{{$account->email}}</td>

                <td>
                    <a class="btn btn-primary btn" href="/update-from/{{$account->id}}">Edit</a>
                </td>

                <td>
                    <a class="btn btn-danger btn" href="/delete/{{$account->id}}">Delete</a>

                </td>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
