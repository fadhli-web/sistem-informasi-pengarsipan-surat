<div class="modal fade" id="addLaporan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    echo form_open_multipart('admin/tambah_laporan_tendik');
                    ?>
                    <div class="card-body row">
                        <div class="col-md">
                            <div class="form-group">
                                <label>Nama Laporan</label>
                                <input type="text" name="nama_laporan" class="form-control" placeholder="daftar-guru-tendik-namasekolah" required="">
                            </div>
                            <div class="form-group">
                                <label>Index Surat</label>
                                <select class="form-control" name="tingkat_sekolah" required=""> 
                                        <option value="">
                                            Pilih Tingkat Sekolah
                                        </option>
                                        <option value="TK">
                                            TK
                                        </option>
                                        <option value="SD">
                                            SD
                                        </option>
                                        <option value="SMP">
                                            SMP
                                        </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" required="">
                            </div>
                            <div class="form-group">
                                <label>Berkas</label>
                                <div class="input-group">
                                    <div class="custom-file">s
                                        <input type="file" name="berkas_laporan_tendik" class="custom-file-input" required="">
                                        <label class="custom-file-label">Pilih dokumen</label>
                                    </div>
                                </div>
                                <small class="text-danger">Dokumen berkas.</small>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="hapuslp">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol 'hapus' untuk menghapus surat <span id="hps-no-suratmasuk"></span> ? </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="hps-id-suratmasuk">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>