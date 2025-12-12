<footer class="bg-white py-5 mt-5">
    <div class="container">
        <img src="{{ asset('assets/logos/header_logo.svg') }}" alt="Beacon Energy" class="mb-4" style="height: 50px; width: auto;">

        <div class="row g-4">
          
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('our-story') }}#about" class="text-decoration-none text-muted">Who are we</a></li>
                    <li><a href="{{ route('industrial-business') }}" class="text-decoration-none text-muted">Industrial</a></li>
                    <li><a href="{{ route('commercial-business') }}" class="text-decoration-none text-muted">Commercial</a></li>
                    <li><a href="{{ route('cleaning-services') }}" class="text-decoration-none text-muted">Cleaning Services</a></li>
                    <li><a href="{{ route('reflex') }}" class="text-decoration-none text-muted">REFLEX™</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Monitoring App</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Referral App</a></li>

                    {{-- <li><a href="{{ route('projects.index') }}" class="text-decoration-none text-muted">Projects</a></li>
                    <li><a href="{{ route('support') }}" class="text-decoration-none text-muted">Support</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Monitoring App</a></li>
                    <li><a href="{{ route('blogs.index') }}" class="text-decoration-none text-muted">Blogs</a></li>
                    <li><a href="{{ route('events.index') }}" class="text-decoration-none text-muted">Events</a></li>
                    <li><a href="{{ route('careers.index') }}" class="text-decoration-none text-muted">Careers</a></li> --}}
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Resources</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('support') }}#solutions" class="text-decoration-none text-muted">Support Center</a></li>
                    <li><a href="{{ route('events.index') }}" class="text-decoration-none text-muted">Events</a></li>
                    <li><a href="#case-studies" class="text-decoration-none text-muted">Case Studies</a></li>
                    <li><a href="{{ route('faqs.index') }}" class="text-decoration-none text-muted">FAQs</a></li>
                    <li><a href="{{ route('blogs.index') }}" class="text-decoration-none text-muted">Blogs</a></li>
                    <li><a href="{{ route('careers.index') }}" class="text-decoration-none text-muted">Careers</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Address</h6>
                <p class="text-muted small mb-0">Head Office (Islamabad)</p>
                <p class="text-muted small">Plot-2, Sheikh Zayed Bin Sultan Road, Sec "A" Phase-II, DHA</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Stay Connected</h6>
                <p class="text-muted small">By increasing the effectiveness and efficiency of electricity use</p>
                
                <div class="d-inline-flex align-items-cente r">
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary flex-shrink-0 selected-projects-btn" style="border-radius: 28px;">Get connected</a>
                    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="img-fluid" 
                    style="    width: 35px;height: 35px; border: 1px solid;border-color: #00399E !important;border-radius: 17px; margin-left: 6px;">
                </div>
                <div class="d-flex gap-3 mt-3" style="font-size: 20px; margin-left: 10px;">
                    <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted small mb-0">©2025 Beacon Energy (Pvt) Limited. All right reserved</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('pages.show', 'privacy-policy') }}" class="text-decoration-none text-muted small me-3">Privacy Policy</a>
                <a href="{{ route('pages.show', 'terms-of-service') }}" class="text-decoration-none text-muted small">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

