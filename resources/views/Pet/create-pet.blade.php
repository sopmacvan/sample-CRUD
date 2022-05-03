<html>

<head>
    <title>Create Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
<form action="/create" method="POST">
    @csrf
    <div class="container">
        Pet name:
        <div><input required type="text" name="pet_name"></div>
        Pet type:
        <div><input required type="text" name="pet_type"></div>
        Owner name:
        <div><input required type="text" name="owner_name"></div>
        Owner address:
        <div><input required type="text" name="owner_address"></div>

        <div>
            <button class="btn btn-primary btn-lg">Save</button>
        </div>
    </div>
</form>
</body>
</html>
