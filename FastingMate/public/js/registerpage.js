document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Ambil nilai input
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    // Validasi Password
    if (password !== confirmPassword) {
        alert("Password dan Konfirmasi Password harus sama!");
        return;
    }

    // Jika validasi sukses
    alert(`Selamat, ${name}! Akun Anda berhasil dibuat.`);
    // Redirect ke halaman login
    window.location.href = "loginpage.html";
});
