document.addEventListener("DOMContentLoaded", function () {
  // Toggle menu hamburger
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  if (menuToggle && navLinks) {
      menuToggle.addEventListener("click", function () {
          navLinks.classList.toggle("active");
      });

      // Tutup menu saat klik di luar navigasi
      document.addEventListener("click", function (event) {
          if (!navLinks.contains(event.target) && !menuToggle.contains(event.target)) {
              navLinks.classList.remove("active");
          }
      });

      // Tutup menu saat salah satu link diklik
      document.querySelectorAll(".nav-links a").forEach(link => {
          link.addEventListener("click", function () {
              navLinks.classList.remove("active");
          });
      });
  }

  // Form Contact Us - Pop-up Notifikasi
  const contactForm = document.getElementById("contact-form");

  if (contactForm) {
      contactForm.addEventListener("submit", function (event) {
          event.preventDefault(); // Mencegah form terkirim secara default

          // Periksa apakah semua input sudah diisi
          const nama = document.querySelector('input[name="nama"]').value.trim();
          const email = document.querySelector('input[name="email"]').value.trim();
          const jenisPengaduan = document.querySelector('select[name="jenis_pengaduan"]').value;
          const pesan = document.querySelector('textarea[name="pesan"]').value.trim();

          if (!nama || !email || !jenisPengaduan || !pesan) {
              alert("⚠️ Harap isi semua kolom sebelum mengirim!");
              return;
          }

          // Membuat elemen pop-up notifikasi
          const popup = document.createElement("div");
          popup.classList.add("popup-container");
          popup.innerHTML = `
              <div class="popup-content">
                  <p>✅ Terima kasih, ${nama}! Saran dan masukan Anda telah diterima.</p>
                  <button id="close-popup">Tutup</button>
              </div>
          `;

          document.body.appendChild(popup);

          // Animasi fade-in
          setTimeout(() => popup.classList.add("show"), 10);

          // Tutup pop-up dengan tombol
          document.getElementById("close-popup").addEventListener("click", function () {
              closePopup(popup);
          });

          // Tutup pop-up dengan klik di luar pop-up
          popup.addEventListener("click", function (event) {
              if (event.target === popup) {
                  closePopup(popup);
              }
          });

          // Reset form setelah submit
          contactForm.reset();
      });
  }

  // Fungsi untuk menutup pop-up
  function closePopup(popup) {
      popup.classList.remove("show");
      setTimeout(() => popup.remove(), 300);
  }
});
