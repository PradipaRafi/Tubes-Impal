// Fungsi untuk mengaktifkan input field ketika tombol ditekan
document.getElementById('save-btn').addEventListener('click', function() {
    const inputs = document.querySelectorAll('#profile-form input');
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Menghapus atribut readonly
        input.style.backgroundColor = '#fff'; // Ubah background menjadi putih
        input.style.border = '1px solid #ccc'; // Tambahkan border
    });
    
    this.textContent = 'Update'; // Ubah teks tombol menjadi 'Update'
    this.style.backgroundColor = '#28a745'; // Warna tombol menjadi hijau
    this.style.color = '#fff';
});
