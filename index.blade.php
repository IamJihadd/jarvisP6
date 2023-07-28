<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container-fluid">
    <h1 class="mt-5 text-center">Task Management</h1>
    <hr>
    <br>
    <table class = "table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$task['name']}} </td>
            <td>{{\Carbon\Carbon::parse($task['deadline'])->format(' d F Y')}} </td>
            <td>{{$task['status']}} </td>
            <td>
                <a href="/task/{{$task['id']}}" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>