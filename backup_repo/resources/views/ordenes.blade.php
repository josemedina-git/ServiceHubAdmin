<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.head')
</head>
<script>
  function toggleSubmenu(menuId, linkElement) {
    var submenu = document.getElementById(menuId);
    var isExpanded = submenu.style.display === "block";

    submenu.style.display = isExpanded ? "none" : "block";
    linkElement.classList.toggle("expanded", !isExpanded);
    linkElement.classList.toggle("collapsed", isExpanded);
  }
</script>

<body class="g-sidenav-show bg-gray-100">
@include('layouts.partials.aside')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Páginas</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        </nav>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center flex-column flex-md-row position-relative">
            <!-- Icono de búsqueda visible solo en pantallas pequeñas -->
            <div class="d-md-none mb-2">
              <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchBoxSmall"
                aria-expanded="false" aria-controls="searchBoxSmall">
                <i class="material-symbols-rounded">search</i>
              </button>
            </div>

            <!-- Caja de búsqueda colapsable para pantallas pequeñas -->


            <!-- Caja de búsqueda visible siempre en pantallas medianas y grandes -->
            <div class="d-none d-md-flex flex-grow-1">
              <div class="input-group input-group-outline w-100">
                <label class="form-label">Buscar</label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>

          <ul class="navbar-nav d-flex align-items-center justify-content-end">

            <li class="mt-1">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                data-icon="octicon-star" data-size="large" data-show-count="true"
                aria-label="Star creativetimofficial/material-dashboard on GitHub">Favoritos</a>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
              </a>
            </li>

            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="material-symbols-rounded">notifications</i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Nuevo mensaje</span> de Ivana
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg"
                          class="avatar avatar-sm bg-gradient-dark me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> de
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item d-flex align-items-center">
              <a href="{{ route('index') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="material-symbols-rounded">account_circle</i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <div class="collapse d-md-none" id="searchBoxSmall" style="width: 70px;">
        <div class="input-group input-group-outline" style="width: 150px;">
          <label class="form-label">Buscar</label>
          <input type="text" class="form-control">
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Suscripciones</h3>
          <p class="mb-4">Visualiza y gestiona las suscripciones.</p>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Filtrar Suscripciones</h5>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-12 col-md-4">
                  <div class="input-group">
                    <input type="date" class="form-control" id="filterDate">
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="input-group">
                    <select class="form-select" id="filterStatus">
                      <option value="">Todos</option>
                      <option value="pending">Pendiente</option>
                      <option value="approved">Aprobada</option>
                      <option value="canceled">Cancelada</option>
                      <option value="unauthorized">No Autorizada</option>
                      <option value="shipped">Enviada</option>
                      <option value="delivered">Entregada</option>
                      <option value="returned">Devuelta</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <button class="btn btn-primary w-100" onclick="filterOrders()">Filtrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Lista de Suscripciones</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID de Orden</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Juan Pérez</td>
                      <td>2024-01-15</td>
                      <td>
                        <select class="form-select" onchange="updateOrderStatus(this)">
                          <option value="pending">Pendiente</option>
                          <option value="approved">Aprobada</option>
                          <option value="canceled">Cancelada</option>
                          <option value="unauthorized">No Autorizada</option>
                          <option value="shipped">Enviada</option>
                          <option value="delivered">Entregada</option>
                          <option value="returned">Devuelta</option>
                        </select>
                      </td>
                      <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>María Gómez</td>
                      <td>2024-01-16</td>
                      <td>
                        <select class="form-select" onchange="updateOrderStatus(this)">
                          <option value="pending">Pendiente</option>
                          <option value="approved">Aprobada</option>
                          <option value="canceled">Cancelada</option>
                          <option value="unauthorized">No Autorizada</option>
                          <option value="shipped">Enviada</option>
                          <option value="delivered">Entregada</option>
                          <option value="returned">Devuelta</option>
                        </select>
                      </td>
                      <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                      </td>
                    </tr>
                    <!-- Más filas de órdenes pueden ser añadidas aquí -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sección de Reseñas -->
      <div class="col-xl-12 col-sm-12 mt-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Reseñas</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <select class="form-select" id="filterType" onchange="filterReviews()">
                  <option value="">Selecciona un tipo de reseña</option>
                  <option value="positivo">Positivo</option>
                  <option value="neutral">Neutral</option>
                  <option value="negativo">Negativo</option>
                </select>
              </div>
              <div class="col-md-4">
                <input type="date" class="form-control" id="filterDate" onchange="filterReviews()">
              </div>
            </div>
            <div class="table-responsive mt-3">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reseña</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                  </tr>
                </thead>
                <tbody id="reviewList">
                  <tr data-type="positivo" data-date="2024-01-15">
                    <td>Juan Pérez</td>
                    <td>Excelente servicio, muy satisfecho.</td>
                    <td>2024-01-15</td>
                    <td>
                      <button class="btn btn-danger btn-sm" onclick="deleteReview(this)">Eliminar</button>
                    </td>
                  </tr>
                  <tr data-type="neutral" data-date="2024-01-16">
                    <td>María Gómez</td>
                    <td>La experiencia fue buena, pero podría mejorar.</td>
                    <td>2024-01-16</td>
                    <td>
                      <button class="btn btn-danger btn-sm" onclick="deleteReview(this)">Eliminar</button>
                    </td>
                  </tr>
                  <tr data-type="negativo" data-date="2024-01-17">
                    <td>Carlos Ruiz</td>
                    <td>No estoy satisfecho con el servicio.</td>
                    <td>2024-01-17</td>
                    <td>
                      <button class="btn btn-danger btn-sm" onclick="deleteReview(this)">Eliminar</button>
                    </td>
                  </tr>
                  <!-- Más reseñas pueden ser añadidas aquí -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <script>
        function filterReviews() {
          const filterType = document.getElementById('filterType').value;
          const filterDate = document.getElementById('filterDate').value;
          const reviews = document.querySelectorAll('#reviewList tr');

          reviews.forEach(review => {
            const reviewType = review.getAttribute('data-type');
            const reviewDate = review.getAttribute('data-date');

            const matchesType = filterType ? reviewType === filterType : true;
            const matchesDate = filterDate ? reviewDate === filterDate : true;

            if (matchesType && matchesDate) {
              review.style.display = ''; // Mostrar la reseña
            } else {
              review.style.display = 'none'; // Ocultar la reseña
            }
          });
        }

        function deleteReview(button) {
          const row = button.closest('tr');
          row.remove(); // Eliminar la fila de la tabla
        }
      </script>
      @include('layouts.partials.footer')
    </div>
  </main>

  @include('layouts.partials.config')

  <script>
    function filterOrders() {
      const date = document.getElementById('filterDate').value;
      const status = document.getElementById('filterStatus').value;
      // Implementar lógica para filtrar órdenes según la fecha y el estatus
      console.log('Filtrar órdenes por fecha:', date, 'y estatus:', status);
    }

    function updateOrderStatus(selectElement) {
      const newStatus = selectElement.value;
      // Implementar lógica para actualizar el estatus de la orden
      console.log('Nuevo estatus de la orden:', newStatus);
    }
  </script>
</body>

</html>