<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('user') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal">ID Klaim</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('id_klaim', $klaim['id_klaim']); ?>" name="id_klaim" id="id_klaim"
                            readonly="readonly" type="text" class="form-control" placeholder="ID Jenis Klaim">
                        <?= form_error('id_klaim', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal">Tanggal</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tanggal', date('Y-m-d')); ?>" name="tanggal" type="text"
                            class="form-control date" placeholder="Tanggal">
                        <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama">Nama</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('nama', $klaim['nama']); ?>" type="text" id="nama" name="nama"
                            class="form-control" placeholder="Nama">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="departement_id">Departement</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <select name="departement_id" id="departement_id" class="custom-select">
                                <option value="" selected disabled>Pilih Departement</option>
                                <?php foreach ($departement as $d) : ?>
                                <option <?= $klaim['departement_id'] == $d['id_departement'] ? 'selected' : ''; ?>
                                    <?= set_select('departement_id', $d['id_departement']) ?>
                                    value="<?= $d['id_departement'] ?>">
                                    <?= $d['nama_departement'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('departement_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jabatan_id">Jabatan</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <select name="jabatan_id" id="jabatan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Departement</option>
                                <?php foreach ($jabatan as $d) : ?>
                                <option <?= $klaim['jabatan_id'] == $d['id_jabatan'] ? 'selected' : ''; ?>
                                    <?= set_select('jabatan_id', $d['id_jabatan']) ?> value="<?= $d['id_jabatan'] ?>">
                                    <?= $d['nama_jabatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('jabatan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jenis_klaim_id">Jenis Klaim</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <select name="jenis_klaim_id" id="jenis_klaim_id" class="custom-select">
                                <option value="" selected disabled>Pilih Departement</option>
                                <?php foreach ($jenis_klaim as $d) : ?>
                                <option <?= $klaim['jenis_klaim_id'] == $d['id_jenis_klaim'] ? 'selected' : ''; ?>
                                    <?= set_select('jenis_klaim_id', $d['id_jenis_klaim']) ?>
                                    value="<?= $d['id_jenis_klaim'] ?>">
                                    <?= $d['nama_jenis_klaim'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('jenis_klaim_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="amount">Amount</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('amount', $klaim['amount']); ?>" name="amount" id="amount"
                            type="number" class="form-control" placeholder="Amount">
                        <?= form_error('amount', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>