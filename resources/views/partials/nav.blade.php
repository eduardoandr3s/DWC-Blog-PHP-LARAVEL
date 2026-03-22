<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Start</a>
      </li>

      @if(auth()->guest())
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      @endif

      @if(auth()->check())
      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">List of posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.create') }}">New Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('englishes.index') }}">List of Languages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('englishes.create') }}">New Language</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
      @endif
    </ul>
  </div>
</nav>
