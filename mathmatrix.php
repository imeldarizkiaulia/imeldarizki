<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabel Perkalian - Perpustakaan Digital</title>
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

      .matrix-table {
        background-color: white;
        border-radius: 10px;
        overflow-x: auto;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
      }

      .dark-mode .matrix-table {
        background-color: #243a73;
      }

      .matrix-table th,
      .matrix-table td {
        text-align: center;
        padding: 10px;
      }

      .matrix-table th {
        background-color: #007bff;
        color: white;
      }

      .dark-mode .matrix-table th {
        background-color: #0f3460;
      }

      .matrix-table td {
        border: 1px solid #dee2e6;
      }

      .dark-mode .matrix-table td {
        border-color: #415a77;
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
            <li class="nav-item"><a class="nav-link" href="formulir.php"><i class="fas fa-clipboard-list me-1"></i>Formulir</a></li>
            <li class="nav-item"><a class="nav-link active" href="mathmatrix.php"><i class="fas fa-table me-1"></i>MathMatrix</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Matrix Section -->
    <main class="container my-5">
      <h2 class="text-center mb-4">Tabel Perkalian 10 x 10</h2>
      <div class="matrix-table p-3">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>x</th>
              <?php
                for ($i = 1; $i <= 10; $i++) {
                  echo "<th>$i</th>";
                }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                  echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
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
