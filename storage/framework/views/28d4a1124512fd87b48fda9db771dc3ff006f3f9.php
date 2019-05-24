<?php $__env->startSection('pemrakarsa_content'); ?>

<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="<?php echo e(URL::to('/')); ?>">Dashboard</a>

</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Usaha</h2>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Nama Usaha</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $all_izin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
          <tr>
            <td class="center"><?php echo e($izin->nama_usaha); ?></td>
            <td class="center"><?php echo e($izin->nama_pemrakarsa); ?></td>
            <td class="center"><?php echo e($izin->alamat_usaha); ?></td>
            <td class="center"><?php if($izin->status_publikasi==1): ?>
            <span class="label label-success">Complete</span>
            <?php else: ?>
            <span class="label label-danger">On Progress..</span>
            <?php endif; ?>
          </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pemrakarsa_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemInformasiSPPL\resources\views/pemrakarsa/dashboard.blade.php ENDPATH**/ ?>