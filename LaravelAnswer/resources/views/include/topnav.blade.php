<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="index.html" class="navbar-brand">Laravel Answer</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('question.index') }}" class="nav-link">Recent</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Popular</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('question.create') }}" class="nav-link">Ask A Question </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
