<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-4 py-3">Atualizar Tarefas </h1>
    <?php
        include 'database.php';
        $id = $_GET['id'];

        $sql="SELECT * FROM todos WHERE id=".$id;
        $result=mysqli_query($conn, $sql);

        if($result)
        {
            $row=mysqli_fetch_assoc($result);
            $title=$row['Title'];
        }
    
    
    ?>




    <div class="w-50 m-auto">
        <form action="edictation.php" method="post" autocomplete="off">
            <label for="title">Tarefa</label>
            <input value="<?php global $title; echo $title?>" class="form-control" type="text" name="title" id="title" Required placeholder="Atualizar a Sua Lista"><br>
            <input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>">
            <button class="btn btn-success">Adicionar</button>
        </form>
    </div><br>
    
</body>
</html>