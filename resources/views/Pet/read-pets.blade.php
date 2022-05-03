<html lang="eng">
<head>
    <title>Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm">
    <form action="/read" method="GET">
        @csrf
        <input type="text" name="search" placeholder="Type pet name">
        <button class="btn btn-outline-primary float-right">Search</button>

    </form>
    <a class="btn btn-outline-primary float-right" href="/create-from">Create New</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Pet name</th>
            <th>Pet type</th>
            <th>Owner name</th>
            <th>Owner address</th>
        </tr>
        @foreach($pets as $pet)
            <tr>
                <td>{{$pet->id}}</td>
                <td>{{$pet->pet_name}}</td>
                <td>{{$pet->pet_type}}</td>
                <td>{{$pet->owner_name}}</td>
                <td>{{$pet->owner_address}}</td>

                <td>
                    <a class="btn btn-primary btn" href="/update-from/{{$pet->id}}">Edit</a>
                </td>

                <td>
                    <a class="btn btn-danger btn" href="/delete/{{$pet->id}}">Delete</a>

                </td>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
