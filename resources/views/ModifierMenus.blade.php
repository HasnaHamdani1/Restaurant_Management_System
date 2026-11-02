<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier type bien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Changement de couleur de fond */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: white; /* Changement de couleur de fond du conteneur */
            border: 5px solid black; /* Changement de couleur de la bordure */
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            left: 10px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black; /* Changement de couleur du texte */
        }
        .form-container form {
            margin-top: 15px;
        }
        .form-container label {
            font-weight: bold;
            color: black; /* Changement de couleur du texte */
        }
        .form-control {
            width: 100%;
            padding: 17px;
            margin-bottom: 15px;
            border:  2px solid black;; /* Suppression de la bordure */
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white; /* Changement de couleur de fond des inputs */
            color: black; /* Changement de couleur du texte des inputs */
        }
        .btn-add {
            background-color: #EEBF6D; /* Changement de couleur du bouton */
            border: none;
            padding: 9px 20px;
            color: black;
            cursor: pointer;
            border-radius: 9px; /* Ajoutez une bordure arrondie */
    transition: background-color 0.3s ease; 
        }
        
        .btn-add:hover {
            background-color:  #e07b16;  /* Changement de couleur au survol */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Modifier un Menu</h2>
        <form action="{{ route('menus.update', ['menu' => $menu->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Protection CSRF -->
            @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->

            <div class="form-group">
                <label for="menuName">Nom :</label>
                <input type="text"  name="menuName" value="{{ $menu->nom }}" class="form-control" required>
                @error('menuName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="menuImage">Image :</label>
                <input type="file"  name="menuImage" class="form-control" accept="image/*">
                <span id="menuImageName"></span>
                <img id="preview-image" src="{{ asset('images/'.$menu->image) }}" alt="Image du menu" width="110px">
            </div>
            <button type="submit" class="btn-add">Modifier</button> 
           </form>
        

    </div>
    <script>
        document.querySelector('input[name="menuImage"]').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);

            
        });
        document.getElementById('menuImageInput').addEventListener('change', function(e) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('preview-image').src = e.target.result;
    };
    reader.readAsDataURL(e.target.files[0]);

    // Afficher le nom du fichier
    var fileName = e.target.files[0].name;
    document.getElementById('menuImageName').textContent = fileName;
});
    </script>
</body>
</html>
