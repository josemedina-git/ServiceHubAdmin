<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.head')
    <style>
        /* Cambiar el color de las bolitas activas */
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            /* Color de fondo para la página activa */
            border-color: #007bff;
            /* Color del borde de la bolita activa */
        }

        /* Cambiar el color de las bolitas no activas */
        .pagination .page-item .page-link {
            background-color: #f1f1f1;
            /* Color de fondo para las bolitas no activas */
            border-color: #ddd;
            /* Color del borde de las bolitas no activas */
            color: #333;
            /* Color del texto */
        }

        /* Cambiar el color de las bolitas cuando pasan el mouse sobre ellas */
        .pagination .page-item:hover .page-link {
            background-color: #4c657f;
            border-color: #007bff;
            color: white;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .form-control.custom-input {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .form-control.custom-input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 8px rgba(108, 99, 255, 0.3);
        }

        label {
            color: #555;
            font-weight: 500;
        }

        .btn-info {
            background-color: #6c63ff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #5b52e6;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
        }

        .form-row .form-group {
            margin-bottom: 15px;
        }

        .card-body {
            padding: 2rem;
        }


        .lista {
            height: 45px;
            width: auto;
            /* Ajusta el valor según el diseño deseado */
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }



        #confirmacion {
            background-color: #dff0d8;
            /* Color de fondo de éxito */
            color: #3c763d;
            /* Color de texto */
            border: 1px solid #3c763d;
            /* Borde de éxito */
        }

        /* Estilo del modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semitransparente */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            /* Asegura que esté sobre el resto del contenido */
        }

        /* Estilo de la tarjeta modal */
        .modal-card {
            width: 300px;
            background-color: #dff0d8;
            /* Color de fondo de éxito */
            color: #3c763d;
            /* Color de texto */
            border: 1px solid #3c763d;
            /* Borde de éxito */
            padding: 20px;
            border-radius: 8px;
            position: relative;
        }

        /* Estilo del botón de cierre (X) */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            color: #3c763d;
            cursor: pointer;
        }
    </style>
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
<body class="g-sidenav-show  bg-gray-100" onload="renderTable()">
@include('layouts.partials.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
        @include('layouts.partials.aside')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4 shadow-lg border-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Servicio</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <form action="{{ isset($service) ? route('services.update', $service->IdService) : route('services.store') }}" method="POST">
                            @csrf
                            @if(isset($service))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="NameService" class="form-label">Nombre del Servicio</label>
                                <input type="text" class="form-control" id="NameService" name="NameService" value="{{ isset($service) ? $service->NameService : '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="Description" name="Description">{{ isset($service) ? $service->Description : '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ isset($service) ? 'Guardar Cambios' : 'Agregar Servicio' }}</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.footer')
    </main>
    @include('layouts.partials.config')
</body>

</html>