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
    <h1>Add student Details</h1>
    <form action="add" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" name="name" class=" form-control" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Address</label>
            <input type="name" name="address" class="form-control" placeholder="Address">
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>

</body>

</html>