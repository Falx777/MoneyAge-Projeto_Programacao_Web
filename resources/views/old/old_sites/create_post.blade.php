<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
</head>
<body>
    <h1>POST</h1>
    <div>
        <form action="{{route('create_post')}}" method="POST">  
            @csrf
            <div> 
                <label for="">Título</label>
                <input type="text" name="title">
            </div>
            <br>
            <div>
                <label for="">Text</label>
                <input type="text" name="text">
            </div>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>