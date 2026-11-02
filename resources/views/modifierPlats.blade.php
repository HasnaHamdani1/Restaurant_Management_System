<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un plat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 10px;
        background-color: white;
        border: 2px solid black;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        left: 10px;
    }
    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: black;
    }
    .form-container form {
        margin-top: 15px;
    }
    .form-container label {
        font-weight: bold;
        color: black;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 2px solid black;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: white;
        color: black;
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
<body>
    <div class="container form-container">
        <form action="{{ route('plats.update', $plat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" value="{{ $plat->nom }}" class="form-control" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="prix">Prix:</label>
                        <input type="text" id="prix" name="prix" value="{{ $plat->prix }}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" class="form-control" required>{{ $plat->description }}</textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="menu_id">Menu:</label>
                        <select id="menu_id" name="menu_id" class="form-control" required>
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}" {{ $menu->id == $plat->menu_id ? 'selected' : '' }}>{{ $menu->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <img id="preview-image" src="{{ asset('images/' . $plat->image) }}" alt="Image du plat" style="max-width: 200px;">
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn-add">Modifier</button> 
        </form>
    </div>
    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
</body>
</html>
