<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Periksa apakah data POST tidak kosong
if (!empty($_POST)) {
    // Posting data tidak kosong masukkan record baru
    // Atur variabel yang akan disisipkan, kita harus memeriksa apakah variabel POST ada jika tidak kita dapat mengaturnya menjadi kosong
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Periksa apakah variabel "nama_sekolah" POST ada, jika tidak default nilainya kosong, pada dasarnya sama untuk semua variabel
    $nama_sekolah = isset($_POST['nama_sekolah']) ? $_POST['nama_sekolah'] : '';
    $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
    $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
    $jumlah_siswa = isset($_POST['jumlah_siswa']) ? $_POST['jumlah_siswa'] : '';

    // Masukkan catatan baru ke dalam tabel sekolahdata
    $stmt = $pdo->prepare('INSERT INTO sekolahdata VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama_sekolah, $jenjang, $kecamatan, $jumlah_siswa]);
    // Keluaran pesan
    $msg = 'Berhasil Menambahkan Data!';
}
?>


<?= template_header('Create') ?>

<div class="content update">
    <h2>Buat Data Sekolah</h2>
    <form action="create.php" method="post">
        <label for="id">No</label>
        <label for="nama_sekolah">Nama Sekolah</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama_sekolah" id="nama_sekolah">
        <label for="jenjang">Jenjang Pendidikan</label>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="jenjang" id="jenjang">
        <input type="text" name="kecamatan" id="kecamatan">
        <label for="jumlah_siswa">Jumlah Siswa</label>
        <input type="text" name="jumlah_siswa" id="jumlah_siswa">
        <input type="submit" value="Tambah">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
    <?php endif; ?>
</div>

<?= template_footer() ?>