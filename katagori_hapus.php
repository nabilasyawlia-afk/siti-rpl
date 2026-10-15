<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM katagori WHERE id_katagori=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "index.php?page=kategori";
</script>