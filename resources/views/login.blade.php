<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    <title></title>
  </head>
  <body class="d-flex justify-content-center align-items-center min-vh-100">
    <form action="{{ route('postLogin') }}" class="card shadow-sm p-4" method="POST" style="width:350px; border-radius:12px">
      @csrf
      <h3 class="text-center fw-bold">Login</h3>
      <h6 class="text-center mb-4">My Best University</h6>
      <div class="mb-3">
        <label class="form-label fw-bold">NIK</label>
        <input type="text" name="nik" class="form-control border-dark" required />
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Password</label>
        <input type="password" name="password" class="form-control border-dark" required />
      </div>
      @if(Session::has('status'))
      <div>
        <span style="color: red">{{ Session::get('status') }}</span>
      </div>
      @endif
      <button type="submit" class="btn btn-primary fw-bold">Login</button>
      <div class="pt-3 text-center small">Belum punya akun?
        <a href="{{ route('register') }}" class="fw-bold text-decoration-none">Daftar</a>
      </div>
    </form>
  </body>
</html>