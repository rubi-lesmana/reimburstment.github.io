<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-info">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                    Data Request Order
                </h4>
            </div>
            <?php if (is_sales()) : ?>
                <div class="col-auto">
                    <a href="<?= base_url('purchase_order/add') ?>" class="btn btn-sm btn-info btn-icon-split">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">
                            Create Purchase Order
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID RO</th>
                    <th>Tanggal</th>
                    <th>Divisi</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Ket</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlin = $this->db->query("SELECT a.`id_ro`, a.`tanggal`,a.`divisi_id`,a.`barang_id`,a.`keterangan`,a.`quantity`,a.`status`, b.nama_divisi, c.nama_barang 
                FROM `request_order` a 
                INNER JOIN divisi b ON a.`divisi_id`=b.id_divisi
                INNER JOIN barang c ON a.`barang_id`=c.id_barang WHERE status = 0");
                $no = 1;
                if ($ro) :
                    foreach ($sqlin->result() as $r) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $r->id_ro; ?></td>
                            <td><?= $r->tanggal; ?></td>
                            <td><?= $r->nama_divisi; ?></td>
                            <td><?= $r->nama_barang; ?></td>
                            <td><?= $r->quantity; ?></td>
                            <td><?= $r->keterangan; ?></td>
                            <td>
                                <?php
                                if ($r->status == 0) {
                                    echo "<span  class='badge bg-warning text-white'>Processing</span>";
                                } else {
                                    echo "Approval";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('request_order/edit/') . $r->id_ro ?>" class="btn btn-info btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('request_order/delete/') . $r->id_ro ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('request_order/cetak_ro/') . $r->id_ro ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-print"></i></a>
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