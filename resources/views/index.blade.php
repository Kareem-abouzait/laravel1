<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
  .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

  
  .btn-view {
    background-color: #4CAF50;
    color: white;
  }
  

  
    </style>
   
    <title>Document</title>
</head>
<body>
<form action="{{ route('create')}}">
                            <button>create</button>
                        </form>
<table class="styled-table">
    <thead>

        <tr>
            <th>id</th>
        <th>Title</th>
      <th>Posted By</th>
      <th>Created At</th>
      <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr class="active-row">
            <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                <form action="{{ route('show', $post->id) }}">
                            <button>view</button>
                        </form>
                        <form action="{{ route('update', $post->id) }}">
                            <button>update</button>
                        </form>
                        <form action="{{ route('delete', $post->id) }}">
                            <button>delete</button>
                        </form>
            </td>
        </tr>
    @endforeach
</tbody>
</body>
</html>



