<section>
    <h2>Form Pemesanan</h2>
    <form action="confirmation.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="paket">Pilih Paket:</label>
        <select id="paket" name="paket">
            <option value="Jepang">Paket Wisata Jepang</option>
            <option value="Bali">Paket Wisata Bali</option>
            <option value="Thailand">Paket Wisata Thailand</option>
        </select>

        <label for="tanggal">Tanggal Keberangkatan:</label>
        <input type="date" id="tanggal" name="tanggal" required>

        <input type="submit" value="Pesan Sekarang">
    </form>
</section>
