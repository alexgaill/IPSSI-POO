<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" class="form" method="POST">
        <div class="form-group">
            <label for="title" class="form-label">Titre:</label>
            <input type="text" class="form-control" name="title" id="title" value="Un super article">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Contenu:</label>
            <input type="text" class="form-control" name="content" id="content" value="lorem ipsum dolor sit amet">
        </div>
        <div class="form-group">
            <label for="categorie" class="form-label">categorie:</label>
            <input type="number" class="form-control" name="categorieId" id="categorie" value="1">
        </div>
        <div class="form-group">
            <label for="user" class="form-label">user:</label>
            <input type="number" class="form-control" name="userId" id="user" value="1">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>