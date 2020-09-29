                <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class=" waves-effect">
        <img src="{{ asset('img/logo.png') }}" width="200px" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item waves-effect. {{ Request::segment(1) === 'dashboard' ? 'active' : null }}" >
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        <a href="{{ route('article.index') }}" class="list-group-item list-group-item-action waves-effect {{ Request::segment(1) === 'article' ? 'active' : null }}">
          <i class="fas fa-table mr-3"></i>Articles </a>
        <a href="{{ route('categorie.index') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Catégories</a>

        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Commande</a>

        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Livraison</a>
      </div>

    </div>
