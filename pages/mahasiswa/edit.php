<?php  

$title = "Edit Mahasiswa";

include('../../layouts/header.php');

// MENGAMBIL ID_BARANG DARI URL
$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

// CEK APAKAH TOMBOL/BUTTON EDIT BERFUNGSI
if (isset($_POST['edit'])) {
    if (update_barang($_POST) > 0) {
        echo "<script>
                alert('Data Barang Berhasil Diedit');
                window.location.href = 'index.php';
            </script>";
        exit; // Hindari pemrosesan tambahan setelah redirect
    } else {
        echo "<script>
                alert('Data Barang Gagal Diedit');
                window.location.href = 'index.php';
            </script>";
        exit; // Hindari pemrosesan tambahan setelah redirect
    }
}


?>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5">
                <div class="">
                    <h1 class="text-dark fw-bold mb-3"><?= $title ?></h1>
                    <hr>
                </div>
                <form action="" method="POST">
                    <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
                    <div class="row justify-content-center">
                        <div class="col-md-12" style="background: #25a78a; width: 100%; height: 400px;">
                            <div class="row justify-content-center">
                            <div class="col-md-8 mt-5">
                                    <div class="mb-3">
                                        <label for="name" class="fw-medium form-label">Nama</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?= $mahasiswa['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="fw-medium form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="<?= $mahasiswa['email']; ?>">
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="prodi" class="fw-medium form-label">Program Studi</label>
                                        <select name="prodi" class="form-select" aria-label="Default select example" value="<?= $mahasiswa['prodi']; ?>">
                                            <option selected>Pilih Prodi</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <option value="Teknik Hukum">Teknik Hukum</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jenis_kelamin" class="fw-medium form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-select" aria-label="Default select example" value="<?= $mahasiswa['jenis_kelamin']; ?>">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="mb-3">
                                        <label for="telpon" class="fw-medium form-label">No Telpon</label>
                                        <input type="number" name="telpon" id="telpon" class="form-control" value="<?= $mahasiswa['telpon']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="fw-medium form-label">Gambar</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="edit" class="btn btn-primary fw-medium" style="width: 100px;">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

<?php  

include('../../layouts/footer.php');

?>