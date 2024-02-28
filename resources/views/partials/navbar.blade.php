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
                    <a class="nav-link {{ $title === ' Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Posts' ? 'active' : '' }}" href="/posts">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Users' ? 'active' : '' }}" href="/users">User</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
