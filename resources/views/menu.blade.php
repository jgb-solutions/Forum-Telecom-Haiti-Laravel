<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                {{ Config::get('site.name') }}
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#a-propos">À Propos</a>
                </li>
                <li>
                    <a class="page-scroll" href="#description">Description</a>
                </li>
                <li>
                    <a class="page-scroll" href="#objectif">Objectif</a>
                </li>
                <li>
                    <a class="page-scroll" href="#evenement">L'Événement</a>
                </li>
                <li>
                    <a class="page-scroll" href="#inscription">S'inscrire</a>
                </li>
                <li>
                    <a class="page-scroll" href="#partenaires">Partenaires</a>
                </li>
                <li>
                    <a class="page-scroll" href="#l-equipe">L'Équipe</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>