<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <title>Producto</title>
</head>
<body>
    <!-- Lista de productos -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Lista de Producto</h1>
                <form method="post" id="prod_form">
                <div class="form-group">
                    <label for="prod_name" class="form-label">Nombre</label>
                    <input name="prod_name" type="text" class="form-control" id="prod_name" placeholder="Nombre del producto" required>
                </div>
                <br>
                <div class="form-group">
                    <div class="dropzone">
                        <div class="dz-dafault dz-message">
                            <button class="dz-button" type="button">
                                <img src="../../asset/nube6.png" height="100">
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    
    
    <script src="producto.js"></script>
</body>
</html>