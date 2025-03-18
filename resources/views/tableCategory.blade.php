<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.head')
    <style>
        .pagination {
            margin-top: 20px;
        }

        .pagination .page-item.active .page-link {
            background-color: #2e2e2e;
            border-color: #4f4f4f;
            color: #ffffff;
        }

        .pagination .page-item .page-link {
            background-color: #dcdcdc;
            border-color: #b1b1b1;
            color: #2e2e2e;
        }

        .pagination .page-item:hover .page-link {
            background-color: #484848;
            border-color: #606060;
            color: #ffffff;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
@include('layouts.partials.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Páginas</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center flex-column flex-md-row position-relative">
                        <div class="d-md-none mb-2">
                            <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchBoxSmall" aria-expanded="false" aria-controls="searchBoxSmall">
                                <i class="material-symbols-rounded">search</i>
                            </button>
                        </div>
                        <div class="d-none d-md-flex flex-grow-1">
                            <div class="input-group input-group-outline w-100">
                                <label class="form-label">Buscar</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav d-flex align-items-center justify-content-end">
                        <li class="mt-1">
                            <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Favoritos</a>
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
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3 ">
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
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
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

        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4 shadow-lg border-0">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Categorias</h6>
                            </div>
                        </div>
                        <div class="card-body px-4 pb-4">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Registros por página:</h6>
                                        <input id="recordsPerPage" type="number" value="5" min="1" class="form-control form-control-sm shadow-sm" style="width: 90px; border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Buscar:</h6>
                                        <input id="searchInput" type="text" class="form-control form-control-sm shadow-sm ms-3" placeholder="Buscar por Categoria" style="border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-md-end">
                                        <a class="dropdown-toggle btn btn-warning" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Filtros
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink" style="border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                            <li>
                                                <div class="input-group mt-2 mx-2">
                                                    <div class="form-outline w-auto" data-mdb-input-init>
                                                        <input type="search" id="search-input-dropdown" class="form-control" style="border-radius: 8px; border: 2px solid #ffffff; padding: 8px; background-color: #f9f9f9; transition: all 0.3s ease;" />
                                                        <label class="form-label" for="search-input-dropdown">Selecciona un filtro:</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" style="border-color: #007bff;" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" style="border-radius: 8px; padding: 10px 15px; font-size: 14px; transition: background-color 0.3s ease;">
                                                    Buscar por Id
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div style="margin-top: 15px;">
                                    <a href="{{ route('categoryForm') }}" class="btn btn-info">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card table-responsive" style="background-color: #ffffff; border: 1px solid #e0e0e0; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Nombre</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Descripción</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td class="text-xs font-weight-bold mb-0">{{ $category->IdCategory }}</td>
            <td class="text-xs font-weight-bold mb-0">{{ $category->NameCategory }}</td>
            <td class="text-center text-xs font-weight-bold mb-0">{{ $category->Description }}</td>
            <td class="align-middle">
                <a href="{{ route('categories.edit', $category->IdCategory) }}" class="btn btn-info">Editar</a>
                <form action="{{ route('categories.destroy', $category->IdCategory) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination justify-content-center"></ul>
                    </div>
                    @include('layouts.partials.footer')
                </div>
            </div>
        </div>
    </main>
    @include('layouts.partials.config')
</body>

</html>