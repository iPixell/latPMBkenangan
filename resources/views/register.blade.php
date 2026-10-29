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
    <form action="{{ route('postRegister') }}" class="card shadow-sm p-4" method="POST", style="width:350px; border-radius:12px">
      @csrf
      <h3 class="text-center fw-bold">Register</h3>
      <h6 class="text-center mb-4">My Best University</h6>
      <div class="mb-3">
        <label class="form-label fw-bold">NIK</label>
        <input type="text" name="nik" class="form-control border-dark" required />
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control border-dark" required />
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Password</label>
        <input type="tepassword" name="password" class="form-control border-dark" required />
      </div>
      <button type="submit" class="btn btn-success fw-bold">Daftar</button>
      <div class="pt-3 text-center small">Sudah punya akun?
        <a href="{{ route('login') }}" class="fw-bold text-decoration-none text-success">Login</a>
      </div>
    </form>
  </body>
</html>