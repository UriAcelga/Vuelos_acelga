<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vuelos Acelga - Flight Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Vuelos Acelga" style="height: 30px;"> Vuelos Acelga
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Mi reserva</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Aerolíneas Plus</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Información</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Centro de ayuda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Iniciá sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Flight Search Form -->
  <div class="container my-5">
    <h2 class="mb-4">Buscar vuelos</h2>
    <form>
      <!-- Flight Options -->
      <div class="mb-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="flightType" id="oneWay" value="oneWay">
          <label class="form-check-label" for="oneWay">Ida</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="flightType" id="roundTrip" value="roundTrip" checked>
          <label class="form-check-label" for="roundTrip">Ida y vuelta</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="flightType" id="multiCity" value="multiCity">
          <label class="form-check-label" for="multiCity">Multidestinos</label>
        </div>
      </div>

      <!-- Flight Details -->
      <div class="row g-3">
        <div class="col-md-3">
          <label for="origin" class="form-label">Origen</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-airplane"></i></span>
            <input type="text" class="form-control" id="origin" placeholder="Origen">
          </div>
        </div>
        <div class="col-md-3">
          <label for="destination" class="form-label">Destino</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-airplane"></i></span>
            <input type="text" class="form-control" id="destination" placeholder="Destino">
          </div>
        </div>
        <div class="col-md-3">
          <label for="departureDate" class="form-label">Partida</label>
          <input type="date" class="form-control" id="departureDate">
        </div>
        <div class="col-md-3">
          <label for="returnDate" class="form-label">Regreso</label>
          <input type="date" class="form-control" id="returnDate">
        </div>
      </div>

      <!-- Other Options -->
      <div class="row g-3 mt-3">
        <div class="col-md-3">
          <label for="passengers" class="form-label">Clase / Pasajeros/as</label>
          <select class="form-select" id="passengers">
            <option>1 Pasajero/a, Economy</option>
            <option>2 Pasajeros/as, Economy</option>
            <option>1 Pasajero/a, Business</option>
          </select>
        </div>
        <div class="col-md-3 d-flex align-items-center">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexibleDates">
            <label class="form-check-label" for="flexibleDates">Tengo fechas flexibles</label>
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-center">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="milesSearch">
            <label class="form-check-label" for="milesSearch">Búsqueda en millas</label>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-4">
        <button type="submit" class="btn btn-primary btn-lg">Buscar vuelos</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>