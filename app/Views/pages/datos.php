<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Usuario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Perfil de Usuario</h5>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="name" readonly>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" readonly>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="email" readonly>
            </div>
            <div class="d-grid gap-2">
              <a href="#" class="btn btn-primary">Editar Perfil</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
