<nav class="navbar navbar-expand-lg bg-danger navbar-dark text-light fixed-top">
  <div class=" container">
    <a class="navbar-brand" href="/">VITO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'users' ? 'active' : '' }}" href="/users">User</a>
        </li>
      </ul>


      <a href="/login" style="margin-left: auto">
        <button class="btn btn-warning"><i class="bi bi-box-arrow-in-right"></i>
          Login
        </button>
      </a>

      </ul>
    </div>

  </div>
</nav>
