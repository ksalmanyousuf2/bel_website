<header class="navbar-transparent text-white py-3">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/logos/header_logo.svg') }}" alt="Beacon Energy" style="height: 60px; width: auto;">
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
                            <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu solutions-mega-menu" aria-labelledby="solutionsDropdown">
                                <li class="dropdown-item-text">
                                    <div class="solutions-dropdown-content">
                                        <div class="row g-0">
                                            <div class="col-md-6 solutions-dropdown-column" style="width: 30% !important;">
                                                <h6 class="solutions-dropdown-heading">Business Segments</h6>
                                                <ul class="solutions-dropdown-list">
                                                    <li><a class="dropdown-item" href="{{ route('industrial-business') }}">Commercial</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('commercial-business') }}">Industrial</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('cleaning-services') }}">Cleaning Services</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 solutions-dropdown-column">
                                                <h6 class="solutions-dropdown-heading">Products & Services</h6>
                                                <ul class="solutions-dropdown-list">
                                                    <li><a class="dropdown-item" href="{{ route('intrix') }}">INTRIX - High Voltage Battery Energy Storage Platform</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('intrix-lv') }}">INTRIX - Low Voltage Battery Energy Storage Platform</a></li>
                                                    <li><a class="dropdown-item" href="#">BELConnect - The Intelligent Energy Management Platform</a></li>
                                                    <li><a class="dropdown-item" href="#">Grid-Tied PV Solution</a></li>
                                                    <li><a class="dropdown-item" href="#">BELPartner - The ultimate Referral App</a></li>
                                                    <li><a class="dropdown-item" href="#">Energy as a service (PPA Model)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">Support</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">App</a>
                        </li>
                    </ul>
                    <div class="ms-3">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary flex-shrink-0 btn-outline-primary-cta text-white d-inline-flex align-items-center" style="border-radius: 28px; border-color:white !important; gap: 8px;">
                            Get connected
                        </a>
                        <span class="btn-icon-wrapper">
                            <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="btn-icon-default img-fluid" style="width: 35px;height: 35px;     background: #00399E;
    border: 1px solid #00399E;
    border-radius: 16px;" alt="Arrow">
                            <img src="{{ asset('assets/icons/slim-arrow-up.svg') }}" class="btn-icon-variant img-fluid" style="width: 35px;height: 35px; display: none;" alt="Arrow">
                        </span>
                        
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
        color: #00399E;
    }
    .navbar-nav .dropend .dropdown-menu {
        left: 100%;
        top: 0;
        margin-top: 0;
        margin-left: 0.125rem;
    }
    
    /* Solutions Mega Menu Styles */
    .solutions-mega-menu {
        padding: 0 !important;
        min-width: 800px;
        max-width: 900px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        position: absolute;
        left: auto !important;
        right: auto !important;
    }
    
    .solutions-mega-menu .dropdown-item-text {
        padding: 0;
    }
    
    .solutions-dropdown-content {
        padding: 30px;
        width: 100%;
    }
    
    .solutions-dropdown-column {
        padding: 0 20px;
    }
    
    .solutions-dropdown-column:first-child {
        border-right: 1px solid #e5e7eb;
    }
    
    .solutions-dropdown-heading {
        font-size: 1rem;
        font-weight: 700;
        color: #1a365d;
        margin-bottom: 20px;
        text-transform: none;
        letter-spacing: 0;
    }
    
    .solutions-dropdown-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .solutions-dropdown-list li {
        margin-bottom: 12px;
    }
    
    .solutions-dropdown-list li:last-child {
        margin-bottom: 0;
    }
    
    .solutions-dropdown-list .dropdown-item {
        padding: 10px 15px;
        color: #4a5568;
        font-size: 0.95rem;
        border-radius: 6px;
        transition: all 0.2s ease;
        white-space: normal;
        line-height: 1.5;
        display: block;
        width: 100%;
        text-decoration: none;
    }
    
    .solutions-dropdown-list .dropdown-item:hover,
    .solutions-dropdown-list .dropdown-item:focus {
        background-color: #f0f7ff;
        color: #00399E;
        transform: translateX(5px);
    }
    
    @media (max-width: 991px) {
        .solutions-mega-menu {
            min-width: 100% !important;
            max-width: 100% !important;
            position: static !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            left: 0 !important;
            right: 0 !important;
            transform: none !important;
            display: none !important;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        
        .solutions-mega-menu.show {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        .nav-item.dropdown.show .solutions-mega-menu,
        .nav-item.dropdown .solutions-mega-menu.show {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        /* Ensure dropdown is visible on mobile */
        .navbar-nav .dropdown-menu.show {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        .solutions-dropdown-content {
            padding: 25px 20px;
        }
        
        .solutions-dropdown-column {
            padding: 0 15px;
            margin-bottom: 25px;
        }
        
        .solutions-dropdown-column:first-child {
            border-right: none;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 25px;
            margin-bottom: 25px;
        }
        
        .solutions-dropdown-column:last-child {
            margin-bottom: 0;
        }
        
        .navbar-nav .dropend .dropdown-menu {
            left: 0;
            margin-left: 1rem;
        }
    }
    
    @media (max-width: 768px) {
        .solutions-dropdown-content {
            padding: 20px 15px;
        }
        
        .solutions-dropdown-column {
            padding: 0 10px;
            margin-bottom: 20px;
        }
        
        .solutions-dropdown-column:first-child {
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        
        .solutions-dropdown-heading {
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        
        .solutions-dropdown-list .dropdown-item {
            font-size: 0.9rem;
            padding: 10px 12px;
        }
        
        .solutions-dropdown-list li {
            margin-bottom: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .solutions-dropdown-content {
            padding: 15px 10px;
        }
        
        .solutions-dropdown-column {
            padding: 0 5px;
        }
        
        .solutions-dropdown-heading {
            font-size: 0.9rem;
            margin-bottom: 12px;
        }
        
        .solutions-dropdown-list .dropdown-item {
            font-size: 0.85rem;
            padding: 8px 10px;
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
        const navLinks = navbarCollapse.querySelectorAll('.nav-link:not(.dropdown-toggle)');
        const dropdownItems = navbarCollapse.querySelectorAll('.dropdown-item');
        
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
        
        // Close menu when dropdown item is clicked on mobile
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                    // Close dropdown
                    const dropdown = item.closest('.dropdown');
                    if (dropdown) {
                        const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                        if (dropdownToggle) {
                            const bsDropdown = bootstrap.Dropdown.getInstance(dropdownToggle);
                            if (bsDropdown) {
                                bsDropdown.hide();
                            }
                        }
                    }
                }
            });
        });
    }
    
    // Ensure dropdown works on mobile - prevent immediate close
    const solutionsDropdown = document.getElementById('solutionsDropdown');
    const solutionsDropdownMenu = solutionsDropdown ? solutionsDropdown.nextElementSibling : null;
    
    if (solutionsDropdown && solutionsDropdownMenu) {
        let hoverTimeout;
        let isHovering = false;
        
        // Disable Bootstrap dropdown on desktop for hover functionality
        if (window.innerWidth >= 992) {
            solutionsDropdown.removeAttribute('data-bs-toggle');
            solutionsDropdown.removeAttribute('data-bs-auto-close');
        }
        
        // Desktop hover functionality
        function showDropdown() {
            clearTimeout(hoverTimeout);
            if (window.innerWidth >= 992) {
                solutionsDropdownMenu.classList.add('show');
                solutionsDropdown.classList.add('show');
                solutionsDropdown.setAttribute('aria-expanded', 'true');
                isHovering = true;
            }
        }
        
        function hideDropdown() {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(function() {
                if (window.innerWidth >= 992 && !isHovering) {
                    solutionsDropdownMenu.classList.remove('show');
                    solutionsDropdown.classList.remove('show');
                    solutionsDropdown.setAttribute('aria-expanded', 'false');
                }
            }, 150); // Small delay to allow moving between dropdown and menu
        }
        
        // Hover events for desktop
        if (window.innerWidth >= 992) {
            solutionsDropdown.addEventListener('mouseenter', showDropdown);
            solutionsDropdown.addEventListener('mouseleave', function() {
                isHovering = false;
                hideDropdown();
            });
            
            solutionsDropdownMenu.addEventListener('mouseenter', function() {
                isHovering = true;
                clearTimeout(hoverTimeout);
            });
            
            solutionsDropdownMenu.addEventListener('mouseleave', function() {
                isHovering = false;
                hideDropdown();
            });
        }
        
        // Custom mobile dropdown toggle
        solutionsDropdown.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();
                
                const isOpen = solutionsDropdownMenu.classList.contains('show');
                
                // Close all other dropdowns first
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    if (menu !== solutionsDropdownMenu) {
                        menu.classList.remove('show');
                        const toggle = menu.previousElementSibling;
                        if (toggle) {
                            toggle.setAttribute('aria-expanded', 'false');
                            toggle.classList.remove('show');
                        }
                    }
                });
                
                // Toggle current dropdown
                if (isOpen) {
                    solutionsDropdownMenu.classList.remove('show');
                    this.classList.remove('show');
                    this.setAttribute('aria-expanded', 'false');
                } else {
                    solutionsDropdownMenu.classList.add('show');
                    this.classList.add('show');
                    this.setAttribute('aria-expanded', 'true');
                }
                
                return false;
            }
        });
        
        // Prevent dropdown from closing when clicking inside it on mobile
        solutionsDropdownMenu.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.stopPropagation();
                // Only close if clicking on an actual link
                if (e.target.classList.contains('dropdown-item') && e.target.tagName === 'A') {
                    // Allow navigation, but keep menu open briefly for visual feedback
                    setTimeout(() => {
                        solutionsDropdownMenu.classList.remove('show');
                        solutionsDropdown.classList.remove('show');
                        solutionsDropdown.setAttribute('aria-expanded', 'false');
                    }, 100);
                }
            }
        });
        
        // Close dropdown when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                const isClickInside = solutionsDropdown.contains(e.target) || solutionsDropdownMenu.contains(e.target);
                if (!isClickInside && solutionsDropdownMenu.classList.contains('show')) {
                    solutionsDropdownMenu.classList.remove('show');
                    solutionsDropdown.classList.remove('show');
                    solutionsDropdown.setAttribute('aria-expanded', 'false');
                }
            }
        });
        
        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 992) {
                    // Remove click toggle, enable hover
                    solutionsDropdown.removeAttribute('data-bs-toggle');
                    solutionsDropdown.removeAttribute('data-bs-auto-close');
                    
                    // Remove existing event listeners and re-add hover
                    const newDropdown = document.getElementById('solutionsDropdown');
                    const newMenu = newDropdown ? newDropdown.nextElementSibling : null;
                    if (newDropdown && newMenu) {
                        newDropdown.addEventListener('mouseenter', showDropdown);
                        newDropdown.addEventListener('mouseleave', function() {
                            isHovering = false;
                            hideDropdown();
                        });
                        newMenu.addEventListener('mouseenter', function() {
                            isHovering = true;
                            clearTimeout(hoverTimeout);
                        });
                        newMenu.addEventListener('mouseleave', function() {
                            isHovering = false;
                            hideDropdown();
                        });
                    }
                } else {
                    // Disable Bootstrap dropdown on mobile
                    solutionsDropdown.removeAttribute('data-bs-toggle');
                }
            }, 250);
        });
    }
    
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial state
});
</script>
