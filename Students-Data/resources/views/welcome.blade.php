<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <h1>Student List</h1>

    <form method="get" action="add">
        <button type="submit" class="btn btn-primary">Add Student </button>
    </form>
    <from>
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Operation</th>
            </tr>
            @foreach($students as $item )
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['address']}}</td>
                <td><a href={{"delete/".$item['id']}}>Delete</a> <a href={{"edit/".$item['id']}}>Edit</a>
                </td>

                </td>
            </tr>
            @endforeach
        </table>
    </from>
</body>

</html>