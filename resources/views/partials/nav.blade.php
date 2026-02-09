{{-- <nav>
<a href="{{ route('home') }}">Home page</a>
 &nbsp;&nbsp;
<a href="{{ route('posts_list') }}">List of posts</a>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
              <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">init</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('posts.index') }}">List of posts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('posts.create') }}">New Post</a>
      </li>
    </ul>
  </div>
</nav>
