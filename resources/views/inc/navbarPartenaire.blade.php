<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">{{config('app.name','CarDealer')}}</a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="/Partenaire/accueil">Accueil</a></li>
            <li ><a href="/Partenaire/ajoutannonce">Ajouter Annonce</a></li>
            <li ><a href="/Partenaire/ajoutvoiture">Ajouter Voiture</a></li>
            <li ><a href="/Partenaire/listereservations">Reservations</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/Partenaire/profil"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
            <li><a href="/"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
          </ul>
        </div>
</nav>