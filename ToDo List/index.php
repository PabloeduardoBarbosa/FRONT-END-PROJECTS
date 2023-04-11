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
    <h1 class="text-center my-4 py-3">Suas Tarefas: </h1>
    <div class="w-50 m-auto">
        <form action="data.php" method="post" autocomplete="off">
            <label for="title">Tarefa</label>
            <input class="form-control" type="text" name="title" id="title" Required placeholder="Insira algum valor"><br>
            <button class="btn btn-success">Adicionar</button>
        </form>
    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="w-50 m-auto">
        <h2>Sua Lista:</h2>
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Tarefas</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'database.php';
    $sql= "SELECT * FROM todos";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $title=$row['Title'];
            ?>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $title?></td>
                <td>
                    <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success  btn-sm">Edit</a>
                    <a href="delete.php?id=<?php echo $id?>" class="btn btn-danger  btn-sm">Delete</a>
                </td>
            </tr>
            <?php
        }
    }
?>

</table>
    </div>
</body>
</html>