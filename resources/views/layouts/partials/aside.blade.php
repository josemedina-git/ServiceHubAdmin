<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="{{ route('dashboard') }}">
        <img src="{{ asset('img/logosh.jpeg') }}" navbar-brand-img width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Administrador</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('dashboard') }}">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark collapsed" href="#!" onclick="toggleSubmenu('professional-menu', this)">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profesional</span>
            <i class="material-symbols-rounded dropdown-arrow">expand_more</i>
          </a>
          <ul id="professional-menu" class="submenu">
            <li>
              <a class="nav-link text-dark" href="{{ route('tableProfesional') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Tabla Profesional</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableProfesionalService') }}">
                <i class="material-symbols-rounded opacity-5">build</i>
                <span class="nav-link-text ms-1">Servicio Profesional</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('PromotionManagement') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Gestión de Ascensos</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark collapsed" href="#!" onclick="toggleSubmenu('service-menu', this)">
            <i class="material-symbols-rounded opacity-5">build</i>
            <span class="nav-link-text ms-1">Servicios</span>
            <i class="material-symbols-rounded dropdown-arrow">expand_more</i>
          </a>
          <ul id="service-menu" class="submenu">
            <li>
              <a class="nav-link text-dark" href="{{ route('tableService') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Tabla Servicios</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableReview') }}">
                <i class="material-symbols-rounded opacity-5">assignment</i>
                <span class="nav-link-text ms-1">Reseñas</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableServiceCategory') }}">
                <i class="material-symbols-rounded opacity-5">assignment</i>
                <span class="nav-link-text ms-1">Categorías de Servicios</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark collapsed" href="#!" onclick="toggleSubmenu('category-menu', this)">
            <i class="material-symbols-rounded opacity-5">label</i>
            <span class="nav-link-text ms-1">Categoría</span>
            <i class="material-symbols-rounded dropdown-arrow">expand_more</i>
          </a>
          <ul id="category-menu" class="submenu">
            <li>
              <a class="nav-link text-dark" href="{{ route('tableCategory') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Tabla Categorías</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableKeyWord') }}">
                <i class="ni ni-zoom-split-in"></i>
                <span class="nav-link-text ms-1">Keywords</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark collapsed" href="#!" onclick="toggleSubmenu('client-menu', this)">
            <i class="material-symbols-rounded opacity-5">groups</i>
            <span class="nav-link-text ms-1">Cliente</span>
            <i class="material-symbols-rounded dropdown-arrow">expand_more</i>
          </a>
          <ul id="client-menu" class="submenu">
            <li>
              <a class="nav-link text-dark" href="{{ route('tableCustomers') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Tabla Clientes</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableLocation') }}">
                <i class="material-symbols-rounded opacity-5">location_on</i>
                <span class="nav-link-text ms-1">Ubicaciónes</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableAgenda') }}">
                <i class="material-symbols-rounded opacity-5">event</i>
                <span class="nav-link-text ms-1">Agenda</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark collapsed" href="#!" onclick="toggleSubmenu('suscription-menu', this)">
            <i class="material-symbols-rounded opacity-5">receipt</i>
            <span class="nav-link-text ms-1">Suscripción</span>
            <i class="material-symbols-rounded dropdown-arrow">expand_more</i>
          </a>
          <ul id="suscription-menu" class="submenu">
            <li>
              <a class="nav-link text-dark" href="{{ route('tableSuscription') }}">
                <i class="material-symbols-rounded opacity-5">table_chart</i>
                <span class="nav-link-text ms-1">Tabla Suscripciones</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tablaTypeSusciption') }}">
                <i class="material-symbols-rounded opacity-5">subscriptions</i>
                <span class="nav-link-text ms-1">Tipo de Suscripción</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tablePayment') }}">
                <i class="material-symbols-rounded opacity-5">payment</i>
                <span class="nav-link-text ms-1">Pago</span>
              </a>
            </li>
            <li>
              <a class="nav-link text-dark" href="{{ route('tableTypePayment') }}">
                <i class="material-symbols-rounded opacity-5">credit_card</i>
                <span class="nav-link-text ms-1">Tipo de Pago</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('ordenes') }}">
            <i class="material-symbols-rounded opacity-5">shopping_cart</i>
            <span class="nav-link-text ms-1">Registro de Suscripciones</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('log') }}">
            <i class="material-symbols-rounded opacity-5">history</i>
            <span class="nav-link-text ms-1">Bitácora de movimientos</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>