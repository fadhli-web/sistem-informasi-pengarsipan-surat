<div class="modal-content">]
<form action="<?= base_url('admin/ubah_laporan_tendik') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <div class="card-body row">
                    <input type="hidden" id="id_laporantendik" name="id_laporantendik" value="<?= $laporan_tendik[0]->id_laporantendik ?>">

                        <div class="col-md">
                            <div class="form-group">
                                <label>Nama Laporan</label>
                                <input type="text" name="nama_laporan" class="form-control" placeholder="Nama Laporan"  required="" value="<?= $laporan_tendik[0]->nama_laporan ?>">
                            </div>
                            <div class="form-group">
                                <label>Index Surat</label>
                                <select class="form-control" name="tingkat_sekolah" required=""> 
                                        <option value="">
                                            Pilih Tingkat Sekolah
                                        </option>
                                        <option value="TK" <?php if($laporan_tendik[0]->tingkat_sekolah == "TK"){ echo "selected";} ?>>
                                            TK
                                        </option>
                                        <option value="SD" <?php if($laporan_tendik[0]->tingkat_sekolah == "SD"){ echo "selected";} ?>>
                                            SD
                                        </option>
                                        <option value="SMP" <?php if($laporan_tendik[0]->tingkat_sekolah == "SMP"){ echo "selected";} ?>>
                                            SMP
                                        </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" required="" value="<?= $laporan_tendik[0]->nama_sekolah ?>">
                            </div>
                            <div class="form-group">
                                <label>Berkas</label>
                                <div class="input-group">
                                    <div class="custom-file">s
                                        <input type="file" name="berkas_laporan_tendik" accept="application/pdf" class="custom-file-input">
                                        <label class="custom-file-label"></label>
                                    </div>
                                </div>
                                <small class="text-danger">Dokumen berkas pdf.</small>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" name="tanggal" value="<?= $laporan_tendik[0]->tanggal ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan" value="<?= $laporan_tendik[0]->keterangan ?>"><?= $laporan_tendik[0]->keterangan ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>