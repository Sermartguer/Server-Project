<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top barra " id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">Sergio Martinez</a>
        <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="<?php amigable('?module=main'); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="<?php amigable('index.php?module=listrooms&function=list_rooms'); ?>">List Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="<?php amigable('?module=rooms&function=form_rooms'); ?>">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="<?php amigable('?module=contact&function=view_contact'); ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
