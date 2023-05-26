<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Periksa apakah id sekolahdata ada, misalnya update.php?id=1 akan mendapatkan sekolahdata dengan id 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // Bagian ini mirip dengan create.php, tetapi sebagai gantinya kita mengupdate record dan bukan insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama_sekolah = isset($_POST['nama_sekolah']) ? $_POST['nama_sekolah'] : '';
        $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
        $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
        $jumlah_siswa = isset($_POST['jumlah_siswa']) ? $_POST['jumlah_siswa'] : '';
        // $pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';

        // Perbarui catatan
        $stmt = $pdo->prepare('UPDATE sekolahdata SET id = ?, nama_sekolah = ?, jenjang = ?, kecamatan = ?, jumlah_siswa = ? WHERE id = ?');
        $stmt->execute([$id, $nama_sekolah, $jenjang, $kecamatan, $jumlah_siswa, $_GET['id']]);
        $msg = 'Data Berhasil diubah!';
    }
    // Dapatkan sekolahdata dari tabel sekolahdata
    $stmt = $pdo->prepare('SELECT * FROM sekolahdata WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<?= template_header('Read') ?>

<div class="content update">
    <h2>Edit Data Sekolah<?= $contact['id'] ?></h2>
    <form action="update.php?id=<?= $contact['id'] ?>" method="post">
        <label for="id">No</label>
        <label for="nama_sekolah">Nama Sekolah</label>
        <input type="text" name="id" value="<?= $contact['id'] ?>" id="id">
        <input type="text" name="nama_sekolah" value="<?= $contact['nama_sekolah'] ?>" id="nama_sekolah">
        <label for="jenjang">Jenjang Pendidikan</label>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="jenjang" value="<?= $contact['jenjang'] ?>" id="jenjang">
        <input type="text" name="kecamatan" value="<?= $contact['kecamatan'] ?>" id="kecamatan">
        <label for="jumlah_siswa">Jumlah Siswa</label>
        <input type="text" name="jumlah_siswa" value="<?= $contact['jumlah_siswa'] ?>" id="jumlah_siswa">
        <input type="submit" value="Ubah Data">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
    <?php endif; ?>
</div>

<?= template_footer() ?>