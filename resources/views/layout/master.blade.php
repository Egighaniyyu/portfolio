<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">

    @stack('top-page-scripts')

</head>

<body>
    <!-- navbar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="assets/images/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <iconify-icon icon="gg:menu-right" style="color: white;"></iconify-icon>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Project</a>
                        <a class="nav-link" href="{{route('article.index')}}">Article</a>
                        <a class="nav-link" href="#">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    @yield('content')

    <!-- footer -->
    <section id="footer">
        <div class="container">
            <div class="sec-footer">
                <h3>Get in touch</h3>
                <h5>Let make something amazing together <span><a href="#"
                            class="text-white">egidgm123@gmail.com</a></span></h5>
                <div class="link-portfolio">
                    <a href="#"><img src="assets/images/jam_linkedin-square.svg" alt="linkedin"></a>
                    <a href="#"><img src="assets/images/ri_dribbble-fill.svg" alt="behance"></a>
                    <a href="#"><img src="assets/images/dashicons_instagram.svg" alt="dribbble"></a>
                    <a href="#"><img src="assets/images/ic_twotone-whatsapp.svg" alt="whatsapp"></a>
                </div>
            </div>

        </div>
    </section>

    @stack('page-scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>