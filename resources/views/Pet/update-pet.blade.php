<html>

<head>
    <title>Update Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
<form action="/update" method="POST">
    @csrf
    <div class="container">
        <input type="hidden" name="id" value="{{$pet->id}}">
        Pet name
        <div><input required type="text" name="pet_name" value="{{$pet->pet_name}}"></div>
        Pet type
        <div><input required type="text" name="pet_type" value="{{$pet->pet_type}}"></div>
        Owner name
        <div><input required type="text" name="owner_name" value="{{$pet->owner_name}}"></div>
        Owner address
        <div><input required type="text" name="owner_address" value="{{$pet->owner_address}}"></div>
        <div>
            <button class="btn btn-primary btn-lg">Save</button>
        </div>
    </div>

</form>

</body>
</html>
