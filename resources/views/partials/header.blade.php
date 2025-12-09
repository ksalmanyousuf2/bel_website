<header class="navbar-transparent text-white py-3">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/logos/header_logo.svg') }}" alt="Beacon Energy" style="height: 50px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <ul class="navbar-nav mx-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('our-story') }}#about">Who are we</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                                {{-- <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Residential</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Hybrid Solar Solution (High Voltage)</a></li>
                                        <li><a class="dropdown-item" href="#">Hybrid Solar Solution (Low Voltage)</a></li>
                                        <li><a class="dropdown-item" href="#">Grid-Tied Solar Solution</a></li>
                                    </ul>
                                </li> --}}
                                <li><a class="dropdown-item" href="{{ route('industrial-business') }}#solutions">Industrial</a></li>
                                <li><a class="dropdown-item" href="{{ route('commercial-business') }}#solutions">Commercial</a></li>
                                <li><a class="dropdown-item" href="{{ route('about-us') }}#solutions">Cleaning Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Monitoring App</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.index') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('events.index') }}">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('careers.index') }}">Careers</a>
                        </li>
                    </ul>
                    <div class="ms-3">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary flex-shrink-0 btn-outline-primary-cta text-white d-inline-flex align-items-center" style="border-radius: 28px; border-color:white !important; gap: 8px;">
                            Get connected
                            <span class="btn-icon-wrapper">
                                <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="btn-icon-default img-fluid" style="width: 20px;height: 20px;" alt="Arrow">
                                <img src="{{ asset('assets/icons/slim-arrow-up.svg') }}" class="btn-icon-variant img-fluid" style="width: 20px;height: 20px; display: none;" alt="Arrow">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
    .navbar-nav .dropdown-menu {
        background-color: white;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 0.5rem;
    }
    .navbar-nav .dropdown-item {
        color: #333;
        padding: 0.5rem 1rem;
    }
    .navbar-nav .dropdown-item:hover {
        background-color: #f8f9fa;
        color: var(--primary-blue);
    }
    .navbar-nav .dropend .dropdown-menu {
        left: 100%;
        top: 0;
        margin-top: 0;
        margin-left: 0.125rem;
    }
    @media (max-width: 991px) {
        .navbar-nav .dropend .dropdown-menu {
            left: 0;
            margin-left: 1rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.navbar-transparent');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    // Add scrolled class on scroll
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Handle mobile menu close on link click
    if (navbarCollapse) {
        const navLinks = navbarCollapse.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            });
        });
    }
    
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial state
});
</script>
