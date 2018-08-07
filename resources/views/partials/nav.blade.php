
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" id="navbar-header">
      
      <a class="navbar-brand" href="{{ url('/') }}" id="nav-bar-logo"><img src="{{asset('images/logo-home.jpg')}}" width="150px"></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          
          <a class="nav-link dropdown-toggle hidden-md-down" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- Categorias y subcategorias -->
              <li><a class="dropdown-item" href="#">Categoria 1</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Categoria 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subcategoria 1</a></li>
                  <li><a class="dropdown-item" href="#">Subcategoria 2</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="#">Categoria 3</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Categoria 4</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subcategoria 1</a></li>
                  <li><a class="dropdown-item" href="#">Subcategoria 2</a></li>
                  <li><a class="dropdown-item" href="#">Subcategoria 3</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="#">Categoria 5</a></li>
              <li><a class="dropdown-item" href="#">Categoria 6</a></li>
              <li><a class="dropdown-item" href="#">Ver mas categorias</a></li>
              
              
          </ul>
        </li>
      
      </ul>
      
      
            
              
        

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos...." aria-label="Search" size="80">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

      <div id="form-sesion">
            <a class="" href="#">Inicio de sesion &nbsp &nbsp</a>
            <a class="" href="#">Registrarse</a>
      </div>
      
        
    </div>
  </nav>

