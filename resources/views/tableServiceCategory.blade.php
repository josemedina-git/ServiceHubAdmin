<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.head')
    <style>
        .pagination {
            margin-top: 20px;
            /* Ajusta este valor según lo necesario */
        }

        /* Cambiar el color de las bolitas activas */
        .pagination .page-item.active .page-link {
            background-color: #2e2e2e;
            /* Fondo oscuro para la página activa */
            border-color: #4f4f4f;
            /* Borde un poco más claro que el fondo */
            color: #ffffff;
            /* Color de texto blanco */
        }

        /* Cambiar el color de las bolitas no activas */
        .pagination .page-item .page-link {
            background-color: #dcdcdc;
            /* Fondo gris claro para las bolitas no activas */
            border-color: #b1b1b1;
            /* Borde gris más oscuro */
            color: #2e2e2e;
            /* Texto negro para contrastar con el fondo */
        }

        /* Cambiar el color de las bolitas cuando pasan el mouse sobre ellas */
        .pagination .page-item:hover .page-link {
            background-color: #484848;
            /* Fondo gris oscuro al pasar el mouse */
            border-color: #606060;
            /* Borde ligeramente más claro que el fondo */
            color: #ffffff;
            /* Texto blanco para una mejor visibilidad */
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
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Páginas</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center flex-column flex-md-row position-relative">
                        <!-- Icono de búsqueda visible solo en pantallas pequeñas -->
                        <div class="d-md-none mb-2">
                            <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#searchBoxSmall" aria-expanded="false" aria-controls="searchBoxSmall">
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
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-symbols-rounded">notifications</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
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
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
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
                <div class="col-12">
                    <div class="card my-4 shadow-lg border-0">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Servicios por Categoria</h6>
                            </div>
                        </div>

                        <div class="card-body px-4 pb-4">
                            <!-- Filtros y búsqueda -->
                            <div class="row mb-4">
                                <!-- Filtro de registros por página -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Registros por página:</h6>
                                        <input id="recordsPerPage" type="number" value="5" min="1"
                                            class="form-control form-control-sm shadow-sm"
                                            style="width: 90px; border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>

                                <!-- Búsqueda de registros -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Buscar:</h6>
                                        <input id="searchInput" type="text"
                                            class="form-control form-control-sm shadow-sm ms-3"
                                            placeholder="Buscar por Servicio"
                                            style="border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>

                                <!-- Dropdown de filtros -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-md-end">
                                        <a class="dropdown-toggle btn btn-warning" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Filtros
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left"
                                            aria-labelledby="navbarDropdownMenuLink"
                                            style="border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                            <li>
                                                <div class="input-group mt-2 mx-2">
                                                    <div class="form-outline w-auto" data-mdb-input-init>
                                                        <input type="search" id="search-input-dropdown"
                                                            class="form-control"
                                                            style="border-radius: 8px; border: 2px solid #ffffff; padding: 8px; background-color: #f9f9f9; transition: all 0.3s ease;" />
                                                        <label class="form-label" for="search-input-dropdown">Selecciona
                                                            un filtro:</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" style="border-color: #007bff;" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    style="border-radius: 8px; padding: 10px 15px; font-size: 14px; transition: background-color 0.3s ease;">
                                                    Buscar por Categoría
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div style="margin-top: 15px;">
                                    <a href="{{ route('formServiceCategory') }}" class="btn btn-info">Agregar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="card table-responsive"
                            style="background-color: #ffffff; border: 1px solid #e0e0e0; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                    <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Palabra</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Categoría</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acciones</th>
        </tr>
                                        <tbody>
    @foreach($serviceCategories as $serviceCategory)
    <tr>
        <td class="text-xs font-weight-bold mb-0">{{ $serviceCategory->IdService }}</td>
        <td class="text-xs font-weight-bold mb-0">{{ $serviceCategory->service->NameService }}</td>
        <td class="text-xs font-weight-bold mb-0">{{ $serviceCategory->IdCategory }}</td>
        <td class="text-xs font-weight-bold mb-0">{{ $serviceCategory->category->NameCategory }}</td>
        <td class="align-middle">
            <a href="{{ route('service_categories.edit', [$serviceCategory->IdService, $serviceCategory->IdCategory]) }}" class="btn btn-info">Editar</a>
            <form action="{{ route('service_categories.destroy', [$serviceCategory->IdService, $serviceCategory->IdCategory]) }}" method="POST" style="display:inline;">
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

                        <script>

                            //busqueda
                            function filterUsers(searchTerm) {
                                return usuarios.filter(usuario => {
                                    return usuario.nameService.toLowerCase().includes(searchTerm.toLowerCase());
                                });
                            }


                            //Ordenamiento        
                            let currentSort = {
                                column: null,
                                order: 'asc' // Puede ser 'asc' para ascendente y 'desc' para descendente
                            };

                            function sortTable(columnIndex) {
                                let direction = 1;
                                const arrow = document.querySelector(#arrow-${['idService', 'nameService', 'idCategory', 'nameCategory'][columnIndex]});

                                // Alternar dirección de la flecha
                                if (arrow.innerHTML === 'expand_more') {
                                    arrow.innerHTML = 'expand_less';
                                    direction = 1;
                                } else {
                                    arrow.innerHTML = 'expand_more';
                                    direction = -1;
                                }

                                usuarios.sort((a, b) => {
                                    const aValue = Object.values(a)[columnIndex];
                                    const bValue = Object.values(b)[columnIndex];

                                    if (typeof aValue === 'string') {
                                        return direction * aValue.localeCompare(bValue);
                                    }
                                    return direction * (aValue - bValue);
                                });

                                renderTable();
                            }


                            function updateArrows(colIndex) {
                                const headers = document.querySelectorAll('th span');
                                headers.forEach(header => {
                                    const arrow = header.querySelector('.material-symbols-rounded');
                                    if (header.id.endsWith('Sort')) {
                                        if (parseInt(header.id.replace('Sort', '')) === colIndex) {
                                            arrow.textContent = currentSort.order === 'asc' ? 'keyboard_arrow_up' : 'keyboard_arrow_down';
                                        } else {
                                            arrow.textContent = 'keyboard_arrow_down';
                                        }
                                    }
                                });
                            }



    



                            //PAginacion de abajito
                            let currentPage = 1;
                            let recordsPerPage = 5;  // Valor inicial

                            // Función para obtener los registros de la página actual
                            function getRecordsForPage(page, filteredUsers) {
                                const start = (page - 1) * recordsPerPage;
                                const end = page * recordsPerPage;
                                return filteredUsers.slice(start, end);
                            }

                            // Función para renderizar la tabla
                            // Modificar la función renderTable para filtrar antes de renderizar
                            function renderTable() {
                                const searchTerm = document.getElementById('searchInput').value;
                                const filteredUsers = filterUsers(searchTerm); // Filtrar los usuarios

                                const tableBody = document.querySelector('table tbody');
                                tableBody.innerHTML = ''; // Limpiar contenido previo

                                const recordsToShow = getRecordsForPage(currentPage, filteredUsers);
                                recordsToShow.forEach(usuario => {
                                    const row = `
            <tr>
                <td class="text-xs font-weight-bold mb-0">${usuario.idService}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.nameService}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.idCategory}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.nameCategory}</td>

                <td class="align-middle">
                                    <a href="{{ route('formServiceCategory') }}" class="btn btn-info">Editar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        `;
                                    tableBody.innerHTML += row;
                                });

                                // Actualizar la paginación
                                updatePagination(filteredUsers);
                            }
                            // Función para actualizar la paginación
                            function updatePagination(filteredUsers) {
                                const totalPages = Math.ceil(filteredUsers.length / recordsPerPage);
                                const pagination = document.querySelector('.pagination');
                                pagination.innerHTML = '';

                                // Botón de "Anterior"
                                pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="javascript:;" aria-label="Previous" onclick="changePage(currentPage - 1)">
                <span class="material-symbols-rounded">keyboard_arrow_left</span>
            </a>
        </li>
    `;

                                // Páginas numéricas
                                for (let i = 1; i <= totalPages; i++) {
                                    pagination.innerHTML += `
            <li class="page-item ${currentPage === i ? 'active' : ''}">
                <a class="page-link" href="javascript:;" onclick="changePage(${i})">${i}</a>
            </li>
        `;
                                }

                                // Botón de "Siguiente"
                                pagination.innerHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link " href="javascript:;" aria-label="Next" onclick="changePage(currentPage + 1)">
                <span class="material-symbols-rounded">keyboard_arrow_right</span>
            </a>
        </li>
    `;
                            }
                            // Función para cambiar de página
                            function changePage(page) {
                                const totalPages = Math.ceil(usuarios.length / recordsPerPage);
                                if (page < 1 || page > totalPages) return;
                                currentPage = page;
                                renderTable();
                            }

                            // Evento para cambiar el número de registros por página
                            document.getElementById('recordsPerPage').addEventListener('input', (event) => {
                                recordsPerPage = parseInt(event.target.value) || 5; // Valor por defecto es 5 si no se ingresa un número
                                currentPage = 1;  // Restablecer a la primera página
                                renderTable();
                            });

                            document.getElementById('searchInput').addEventListener('input', () => {
                                currentPage = 1;  // Restablecer a la primera página
                                renderTable();    // Volver a renderizar la tabla con los filtros aplicados
                            });
                            renderTable();
                            // Inicializar la tabla al cargar la página
                            window.onload = () => renderTable();  // Asegura que la tabla se renderice correctamente al cargar

                        </script>

                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.partials.footer')
                </div>

    </main>
    @include('layouts.partials.config')
</body>

</html>