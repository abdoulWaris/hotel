
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" >
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home') }} ">
              <span data-feather="home"></span>
              Acceuil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('client') }}">
              <span data-feather="file"></span>
              Clients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('chambre') }}">
              <span data-feather="users"></span>
              Chambres
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservation') }}">
              <span data-feather="shopping-cart"></span>
              Reservation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('facture') }}">
              <span data-feather="bar-chart-2"></span>
              Facturation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('paiement') }}">
              <span data-feather="layers"></span>
              Paiement
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Personnel Hotel</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Salaires
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">
              <span data-feather="file-text"></span>
              Agent
            </a>
          </li>
        </ul>
      </div>
    </nav>

 