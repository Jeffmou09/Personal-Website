<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}?v={{ time() }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-center">
            <ul class="nav nav-tabs" id="portfolioTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#home">HOME</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#portofolio">PORTFOLIO</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                if (targetElement) {
                    targetElement.scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                }
            });
        });

        // Add background to navbar on scroll
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        document.querySelector('a[href="#home"]').classList.add('active');
    </script>

    @stack('scripts')
</body>
</html>