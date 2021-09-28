<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand">
        <img
            src="{{asset('photos/photo-logo.jpg')}}"
            width="30"
            height="30"
            class="d-inline-block align-top"
            alt="logo"
        />
        Tête de linotte</a
    >
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>

            <!-- Dropdown-menu -->
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        id="dropdown-menu-btn1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Nos Créations
                    </button>

                </div>
            </li>



        </ul>

        <!-- Boutton-panier -->
        <a class="btn btn-primary" href="/backoffice/products" role="button">Back Office</a>

    </div>
</nav>
