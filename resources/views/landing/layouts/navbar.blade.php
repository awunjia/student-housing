<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing.index') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 30px; width: auto; margin-right: 8px;">
            StudentHousing
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('landing.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('landing.listings') }}" class="nav-link">Listings</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="agent.html" class="nav-link">Agent</a></li>
                <li class="nav-item"><a href="properties.html" class="nav-link">Listing</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>