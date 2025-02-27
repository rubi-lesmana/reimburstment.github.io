<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Jabatan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('Jabatan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Jabatan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>ID Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($jabatan) :
                    foreach ($jabatan as $ls) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $ls['id_jabatan']; ?></td>
                    <td><?= $ls['nama_jabatan']; ?></td>
                    <td>
                        <a href="<?= base_url('jabatan/edit/') . $ls['id_jabatan'] ?>"
                            class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Yakin ingin hapus?')"
                            href="<?= base_url('jabatan/delete/') . $ls['id_jabatan'] ?>"
                            class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>