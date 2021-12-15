<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/static.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dark-mode-switch-1.0.0/dark-mode.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('header')    
</head>
<body>
<div class="container col-xl-7 col-lg-8 col-md-9">

<div class="header py-3">
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Rizumu bot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="vr d-none d-sm-block"></div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-1">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('commands')) ? 'active' : '' }}" aria-current="page" href="/commands">Commands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#socials">Socials</a>
                    </li>
                </ul>
                <div class="custom-control custom-switch border-0">
                    <input type="checkbox" class="btn-check" autocomplete="off" id="darkSwitch">
                    <label class="btn border-0" for="darkSwitch"><i class="far fa-moon text-white" id="darkSwitch" for="darkSwitch"></i></label>
                </div>
            </div>
        </div>
    </nav>
</div>

@yield('welcome')
@yield('content')

</div>
<footer class="container text-center text-white">
    <section class="row justify-content-center p-4">
        <div class="socials col-sm-auto text-center" id="socials">
            <h5>Follow us:</h5>
        </div>
        <div class="col-md-auto text-center p-4">
            <a href="https://instagram.com" rel="noopener noreferrer" target="_blank" class="social me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" rel="noopener noreferrer" target="_blank" class="social me-4 text-reset">
                <i class="fab fa-discord"></i>
            </a>
            <a href="https://twitter.com" rel="noopener noreferrer" target="_blank" class="social text-reset">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </section>
</footer>

@yield('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<script src="../css/dark-mode-switch-1.0.0/dark-mode-switch.min.js"></script>
</body>
</html>