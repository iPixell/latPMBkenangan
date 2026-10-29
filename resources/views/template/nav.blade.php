<nav class="navbar bg-dark px-4">
  <a class="fw-bold text-white text-decoration-none">My University</a>
  @if (Auth::user()->role == 'admin')
    <a class="ms-4 text-white text-decoration-none" href="{{ route('admin') }}">Admin></a>
  @else
    <a class="ms-4 text-white text-decoration-none" href="{{ route('camaba') }}">Camaba</a>
  @endif
  <form class="m-0 ms-auto" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-danger">Logout</button>
  </form>
  
</nav>


