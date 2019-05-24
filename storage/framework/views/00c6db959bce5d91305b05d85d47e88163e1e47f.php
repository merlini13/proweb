<?php $__env->startSection('admin_content'); ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                          Formulir Perizinan SPPL
                                        </h5>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile Pemrakarsa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Izin Usaha</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php $__currentLoopData = $izin_by_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      <th>Nomor KTP</th>
                                      <td><?php if(isset($izin_detail->no_ktp)): ?>
                                        <?php echo e($izin_detail->no_ktp); ?>

                                      <?php endif; ?></td>
                                    </tr>
                                      <tr>
                                        <th>Nama Pemrakarsa</th>
                                        <td><?php if(isset($izin_detail->nama_pemrakarsa)): ?>
                                          <?php echo e($izin_detail->nama_pemrakarsa); ?>

                                        <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Nama Pemrakarsa</th>
                                        <td><?php if(isset($izin_detail->jabatan)): ?>
                                          <?php echo e($izin_detail->jabatan); ?>

                                        <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Alamat</th>
                                        <td><?php if(isset($izin_detail->alamat)): ?>
                                          <?php echo e($izin_detail->alamat_usaha); ?>

                                        <?php endif; ?></td>
                                      </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </table>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php $__currentLoopData = $izin_by_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      <th>Nama Usaha</th>
                                      <td><?php if(isset($izin_detail->nama_usaha)): ?>
                                        <?php echo e($izin_detail->nama_usaha); ?>

                                      <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Alamat Usaha</th>
                                      <td><?php if(isset($izin_detail->alamat_usaha)): ?>
                                        <?php echo e($izin_detail->alamat_usaha); ?>

                                      <?php endif; ?></td>
                                    </tr>
                                      <tr>
                                        <th>Jenis Usaha</th>
                                        <td><?php if(isset($izin_detail->jenis_usaha)): ?>
                                          <?php echo e($izin_detail->jenis_usaha); ?>

                                        <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Tahap</th>
                                        <td><?php if(isset($izin_detail->tahap)): ?>
                                          <?php echo e($izin_detail->tahap); ?>

                                        <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Berkas SPPL</th>
                                        <td><a href="<?php echo e(URL::to('/download-sppl/'.$izin_detail->sppl)); ?>"><?php if(isset($izin_detail->sppl)): ?>
                                        <?php echo e($izin_detail->sppl); ?>

                                      <?php endif; ?><a></td>
                                      </tr>
                                      <tr>
                                        <th>Tabel Rencana</th>
                                        <td><a href="<?php echo e(URL::to('/download-rencana/'.$izin_detail->rencana)); ?>"><?php if(isset($izin_detail->rencana)): ?>
                                        <?php echo e($izin_detail->rencana); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Fotocopy KTP</th>
                                        <td><a href="<?php echo e(URL::to('/download-fotocopyktp/'.$izin_detail->fotocopyktp)); ?>"><?php if(isset($izin_detail->fotocopyktp)): ?>
                                        <?php echo e($izin_detail->fotocopyktp); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Foto Lokasi</th>
                                        <td><a href="<?php echo e(URL::to('/download-fotolokasi/'.$izin_detail->fotolokasi)); ?>"><?php if(isset($izin_detail->fotolokasi)): ?>
                                        <?php echo e($izin_detail->fotolokasi); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Fotocopy IMB</th>
                                        <td><a href="<?php echo e(URL::to('/download-fotocopyimb/'.$izin_detail->fotocopyimb)); ?>"><?php if(isset($izin_detail->fotocopyimb)): ?>
                                        <?php echo e($izin_detail->fotocopyimb); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Fotocopy Sertifikat Tanah</th>
                                        <td><a href="<?php echo e(URL::to('/download-fotocopysertifikattanah/'.$izin_detail->fotocopysertifikattanah)); ?>"><?php if(isset($izin_detail->fotocopysertifikattanah)): ?>
                                        <?php echo e($izin_detail->fotocopysertifikattanah); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Fotocopy Bukti Pembayaran PBB</th>
                                        <td><a href="<?php echo e(URL::to('/download-fotocopybuktipembayaranpbb/'.$izin_detail->fotocopybuktipembayaranpbb)); ?>"><?php if(isset($izin_detail->fotocopybuktipembayaranpbb)): ?>
                                        <?php echo e($izin_detail->fotocopybuktipembayaranpbb); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Gambar Bangunan</th>
                                        <td><a href="<?php echo e(URL::to('/download-gambarbangunan/'.$izin_detail->gambarbangunan)); ?>"><?php if(isset($izin_detail->gambarbangunan)): ?>
                                        <?php echo e($izin_detail->gambarbangunan); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Denah Parkir</th>
                                        <td><a href="<?php echo e(URL::to('/download-areaparkir/'.$izin_detail->areaparkir)); ?>"><?php if(isset($izin_detail->areaparkir)): ?>
                                        <?php echo e($izin_detail->areaparkir); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Denah Lokasi</th>
                                        <td><a href="<?php echo e(URL::to('/download-denahlokasi/'.$izin_detail->denahlokasi)); ?>"><?php if(isset($izin_detail->denahlokasi)): ?>
                                        <?php echo e($izin_detail->denahlokasi); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Foto Greasetrap</th>
                                        <td><a href="<?php echo e(URL::to('/download-greasetrap/'.$izin_detail->greasetrap)); ?>"><?php if(isset($izin_detail->greasetrap)): ?>
                                        <?php echo e($izin_detail->greasetrap); ?>

                                      <?php endif; ?></td>
                                      </tr>
                                      <tr>
                                        <th>Akta Pendirian PT/CV</th>
                                        <td><a href="<?php echo e(URL::to('/download-aktapendiriancv/'.$izin_detail->aktapendiriancv)); ?>"><?php if(isset($izin_detail->aktapendiriancv)): ?>
                                        <?php echo e($izin_detail->aktapendiriancv); ?>

                                      <?php endif; ?></td>
                                      </tr>

                                  </table>
                                  <?php if($izin_detail->status_publikasi==0): ?>
                                  <a href="<?php echo e(URL::to('/accept/'.$izin_detail->izin_id)); ?>" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Terima Izin</span>
                                  </a>
                                  <?php else: ?>
                                  <a href="<?php echo e(URL::to('/not-accept/'.$izin_detail->izin_id)); ?>" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Batal Terima Izin</span>
                                  </a>
                                  <?php endif; ?>
                                  <a href="<?php echo e(URL::to('/comment/'.$izin_detail->izin_id)); ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-comment"></i>
                                    </span>
                                    <span class="text">Beri Keterangan</span>
                                  </a>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemInformasiSPPL\resources\views/admin/detail_perizinan.blade.php ENDPATH**/ ?>