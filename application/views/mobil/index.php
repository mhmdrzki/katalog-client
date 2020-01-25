<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <div class="row mt-3">
                        
                    <div class="col-md-2 offset-md-7">
                    <?php echo form_open(''); ?>
                            <div class="input-group">
                                <select name="kriteria" class="form-control" required>
                                    <option value="" disabled selected>Search Kriteria</option>
                                    <option value="no_kerangka">No. Kerangka</option>
                                    <option value="no_polisi">No. Polisi</option>
                                    <option value="brand">Merek</option>
                                    <option value="type">Tipe</option>
                                    <option value="year">Tahun</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-md-3" align="right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pencarian" name="keyword" required="">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                    <?php echo form_close() ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="panel-body">
                <span id="success_message"></span>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th>No. Kerangka</th>
                            <th>No. Polisi</th>
                            <th>Merek</th>
                            <th>Tipe</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mobil)) { ?>
                            <?php foreach ($mobil as $mbl) : ?>
                            <tr align="center">
                                <td><?= $mbl['no_kerangka']; ?></td>
                                <td><?= $mbl['no_polisi']; ?></td>
                                <td><?= $mbl['brand']; ?></td>
                                <td><?= $mbl['type']; ?></td>
                                <td><?= $mbl['year']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>mobil/ubah/<?= $mbl['id']; ?>"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url(); ?>mobil/hapus/<?= $mbl['id']; ?>"
                                        class="btn btn-danger btn-sm tombol-hapus">Hapus</a>
                                </td>
                                
                            </tr> 
                            <?php endforeach; ?>
                            
                        <?php }else{ ?>
                            <tr>
                                <td colspan="6" align="center">No Data Found</td>
                            </tr>
                        <?php }; ?>
                            

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12 float-right" align="right">
                    <a href="<?= base_url(); ?>mobil/tambah" class="btn btn-primary">Tambah
                        Mobil</a>
                </div>    
            </div>
        </div>
    </div>



</div>