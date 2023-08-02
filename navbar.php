<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 justify-content-between">
        <a class="navbar-brand" href="../index.php">Allociné</a>
        <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/template/add_movie.php">Ajouter un film</a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="/template/add_actor.php">Ajouter un acteur</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 d-flex" action="searchMovie.php" method="post">
                <input class="form-control mr-sm-2 m-1" type="text" id="title-search" name="title-search" placeholder="Rechercher un film" aria-label="Search">
                <button class="btn btn-outline-light m-1 my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
</header>