function sendEmail() {
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const barang = document.getElementById('barang').value;
    const jumlah = document.getElementById('jumlah').value;

    const subject = 'Pembelian Barang';
    const body = `Ada pembelian baru:\n\nDetail pembelian:\nNama: ${nama}\nEmail: ${email}\nBarang: ${barang}\nJumlah: ${jumlah}`;

    window.location.href = `mailto:nabilputra33315@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
}
