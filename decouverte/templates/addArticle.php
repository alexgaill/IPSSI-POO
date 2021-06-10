    <form action="index.php?page=addArticle" class="form" method="POST">
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