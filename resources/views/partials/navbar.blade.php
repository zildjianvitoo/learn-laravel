<nav class="navbar navbar-expand-lg bg-warning navbar-dark text-light">
    <div class=" container">
        <a class="navbar-brand" href="/">VITO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === " Home" ? "active" : "" }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "About" ? "active" : "" }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Blogs" ? "active" : "" }}" href="/blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === " Kocak" ? "active" : "" }}" href="/kocak">Kocak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Posts" ? "active" : "" }}" href="/posts">Posts</a>
                </li>
            </ul>
        </div>

    </div>
</nav>