<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITE_NAME; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo URLROOT?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/pages/about'?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Orders</a>
                </li>
                </ul>
                <a href="<?php echo URLROOT . '/users/login'; ?>" type="button" class="btn btn-secondary">Log in</a>
            </div>
        </div>
      </nav>
    </header>
    <main class="flex-shrink-0">
        <div class="container">