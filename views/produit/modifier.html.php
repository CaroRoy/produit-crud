<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display-4 text-center">Modification du produit</h1>

        <?php
        if ($messageErreur !== null) 
        {
        ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $messageErreur; ?>
            </div>

        <?php
        }
        ?>

        <form method="POST" action="http://localhost/CoursPHP/php_web/produit-crud/router.php/modifier-produit?id=<?php echo $produit->id ?>" enctype="multipart/form-data" class="p-5">
            <div class="form-group">
                <label>Nom du produit</label>
                <input type="text" name="product-name" class="form-control" value="<?php echo $produit->nom; ?>">
            </div>
            <div class="form-group">
                <label>Prix du produit</label>
                <input type="text" name="product-price" class="form-control" value="<?php echo $produit->prix; ?>">
            </div>
            <div class="form-group">
                <label>Photo du produit</label></br>
                <img src="http://localhost/CoursPHP/php_web/produit-crud/<?php echo $produit->image; ?>" alt="image" width="200px">
                <input type="file" name="product-photo-file" class="form-control-file">
                
            </div>
            <select name="product-type">
                <option value="<?php echo $produit->type; ?>">Produit <?php echo $produit->type; ?></option>
                <option value=""></option>
                <option value="voiture">Produit voiture</option>
                <option value="barbie">Produit Barbie</option>
            </select>
            <div class="form-group">
                <label>Description du produit</label>
                <input type="text" name="product-description" class="form-control" value="<?php echo $produit->description; ?>">
            </div>
            <button name="btn-valider" type="submit" class="btn btn-primary">Modifier le produit</button>
            <a class="btn btn-dark" href="http://localhost/CoursPHP/php_web/produit-crud/router.php/catalogue">Abandonner</a>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>