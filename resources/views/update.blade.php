
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="{{ route('edit', $post->id) }}" method="POST">

        @method('PUT')
        @csrf
        <input type="text" name="id" value="{{ $post->id }}">
        <input type="text" name="name" value="{{ $post->name }}">
        <input type="text" name="body" value="{{ $post->body }}">
       
        
        <input type="submit">
    </form>

</body>

</html>

























