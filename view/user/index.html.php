<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php?controller=partner&task=index"><?= $username['last_name']; ?></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="index.php?controller=account&task=logout">Sign out</a>
        </div>
    </div>
</header>

<style>
    .notification-badge {
        display: inline-block;
        background-color: red;
        color: white;
        border-radius: 50%;
        font-size: 12px;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        margin-left: 5px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=user&task=index&section=account">
                            <i class="bi bi-person"></i>
                            Compte
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=user&task=index&section=purchased">
                            <i class="bi bi-box-seam"></i>
                            Box achetées
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=user&task=index&section=possessed">
                            <i class="bi bi-box2-heart"></i>
                            Box Possédées
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=user&task=index&section=used">
                            <i class="bi bi-gift"></i>
                            Box Utilisées
                        </a>
                    </li>
                </ul>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?= $contentSection ?>
        </main>
    </div>
</div>