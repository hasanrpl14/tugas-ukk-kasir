<?php
include "proses/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM transaksi");
// untuk mengambill data dari database from user dari tabel user dan $conn variabel dari file koneksi php
while ($record = mysqli_fetch_array($query)) {
    // setiap kali iterasi loop while, data dari baris saat ini akan disimpan dalam array $result
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Transaksi
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahUser"> Tambah Transaksi</button>
                </div>
            </div>
            <!-- Modal Tambah Transaksi-->
            <div class="modal fade" id="TambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Transaki</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form untuk tambah data user -->
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="nama anda...">
                                    <label for="floatingInput">ID Transaksi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">ID User</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">ID Order</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Tanggal</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Total</label>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                        <!-- form akhir untuk tambah data transaksi -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Modal Tmbah User-->

        <!-- Modal Button View-->
        <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">View User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Modal Button View-->

        <!-- Modal Button Edit-->
        <div class="modal fade" id="EditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Modal Button Edit-->

        <!-- Modal Button Hapus-->
        <div class="modal fade" id="HapusUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Modal Button Edit-->

        <?php
        if (empty($result)) {
            echo "Data Transaksi tidak ada";
        } else {

        ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Id User</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td>
                                    <?php echo $row['id_transaksi'] ?>
                                </td>
                                <td>
                                    <?php echo $row['id_user'] ?>
                                </td>
                                <td>
                                    <?php echo $row['tanggal'] ?>
                                </td>
                                <td>
                                    <?php echo $row['total_bayar'] ?>
                                </td>
                                <td class="d-flex">
                                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView">
                                        <i class="bi bi-eye"></i></button>
                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#EditUser">
                                        <i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#HapusUser">
                                        <i class="bi bi-trash"></i></button>
                                </td>
                            <?php
                        }
                            ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }
        ?>
    </div>
</div>
</div>