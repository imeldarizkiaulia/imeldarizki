<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pengunjung - Perpustakaan Digital</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
      body {
        font-family: "Segoe UI", sans-serif;
        background-color: #f8f9fc;
      }

      .dark-mode {
        background-color: #1a1a2e;
        color: #f0f0f0;
      }

      .dark-mode .navbar,
      .dark-mode footer {
        background-color: #16213e !important;
      }

      .dark-mode .form-control,
      .dark-mode .form-select {
        background-color: #0f3460;
        color: #fff;
        border-color: #415a77;
      }

      .form-container {
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      }

      .dark-mode .form-container {
        background-color: #243a73;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header class="site-header bg-primary text-white py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h4 m-0"><i class="fas fa-book me-2"></i>Perpustakaan Digital</h1>
        <button id="darkModeToggle" class="btn btn-light btn-sm"><i class="fas fa-moon me-1"></i>Dark Mode</button>
      </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand d-lg-none" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100 justify-content-evenly">
            <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html"><i class="fas fa-user me-1"></i>About Me</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.html"><i class="fas fa-envelope me-1"></i>Contact Us</a></li>
            <li class="nav-item"><a class="nav-link active" href="formulir.php"><i class="fas fa-clipboard-list me-1"></i>Formulir</a></li>
            <li class="nav-item"><a class="nav-link" href="mathmatrix.php"><i class="fas fa-table me-1"></i>MathMatrix</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Form Section -->
    <main class="container my-5">
      <h2 class="text-center mb-4">Formulir Pengunjung Perpustakaan Imelda Rizki Aulia</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form-container">
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required />
              </div>

              <div class="mb-3">
                <label for="nip" class="form-label">NIP/NIM</label>
                <input type="number" class="form-control" id="nip" placeholder="Contoh: 220709091" required />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Contoh: nama@gmail.com" />
              </div>

              <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="laki" value="Laki-laki" required />
                  <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan" required />
                  <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" />
              </div>

              <div class="mb-3">
                <label for="keperluan" class="form-label">Jenis Pengunjung</label>
                <select class="form-select" id="keperluan" required>
                  <option value="">-- Pilih --</option>
                  <option value="Mahasiswa">Mahasiswa</option>
                  <option value="Dosen">Dosen</option>
                  <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                  <option value="Pustakawan">Pustakawan</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>

              <div class="text-end">
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i>Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
      <p class="mb-0">&copy; 2025 Perpustakaan Digital Imelda Rizki Aulia. All rights reserved.</p>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const toggleBtn = document.getElementById("darkModeToggle");
      toggleBtn.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
        toggleBtn.innerHTML = document.body.classList.contains("dark-mode")
          ? '<i class="fas fa-sun me-1"></i>Light Mode'
          : '<i class="fas fa-moon me-1"></i>Dark Mode';
        localStorage.setItem("darkMode", document.body.classList.contains("dark-mode"));
      });

      window.onload = () => {
        if (localStorage.getItem("darkMode") === "true") {
          document.body.classList.add("dark-mode");
          toggleBtn.innerHTML = '<i class="fas fa-sun me-1"></i>Light Mode';
        }
      };
    </script>
  </body>
</html>
