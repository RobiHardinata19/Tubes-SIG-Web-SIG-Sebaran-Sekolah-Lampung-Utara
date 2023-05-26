<?php
include 'functions.php';
// masukan file php.ini

// penghubung database
$pdo = pdo_connect_mysql();
// Dapatkan halaman melalui permintaan GET (URL param: halaman), jika tidak ada default halaman ke 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Jumlah record yang akan ditampilkan di setiap halaman
$records_per_page = 10;


// Persiapkan pernyataan SQL dan dapatkan catatan dari tabel sekolahdata kami, LIMIT akan menentukan halaman
$stmt = $pdo->prepare('SELECT * FROM sekolahdata ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Ambil record agar kita bisa menampilkannya di template kita.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Dapatkan jumlah total sekolahdata, ini agar kami dapat menentukan apakah harus ada tombol berikutnya dan sebelumnya
$num_contacts = $pdo->query('SELECT COUNT(*) FROM sekolahdata')->fetchColumn();

// Templat Beranda di bawah ini.
?>

<?=template_header('Home')?>

<div class="content read">
	<h2>Database Sebaran Sekolah di
Lampung Utara</h2>
	<a href="create.php" class="create-contact">Tambah Data</a>
	<table>
		<thead>
			<tr>
				<td>No</td>
				<td>Nama Sekolah</td>
				<td>Jenjang Pendidikan</td>
				<td>Kecamatan</td>
				<td>Jumlah Siswa</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($contacts as $contact): ?>
			<tr>
				<td><?=$contact['id']?></td>
				<td><?=$contact['nama_sekolah']?></td>
				<td><?=$contact['jenjang']?></td>
				<td><?=$contact['kecamatan']?></td>
				<td><?=$contact['jumlah_siswa']?></td>
				<td class="actions">
					<a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
					<a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="index.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="index.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>