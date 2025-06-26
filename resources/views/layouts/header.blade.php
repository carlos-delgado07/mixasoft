<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">&lt; mixasoft &gt;</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/proyectos">Proyectos</a></li>
                <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contacto">Contactanos</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const links = document.querySelectorAll(".navmenu ul li a");
                const currentPath = window.location.pathname; // Obtiene la ruta actual

                links.forEach(link => {
                    if (link.getAttribute("href") === currentPath) {
                        link.classList.add("active"); // Añade la clase al enlace actual
                    }
                });
            });
        </script>

        <style>
            .navmenu .active {
                color: #1bbd36;
            }
        </style>

    </div>
</header>
