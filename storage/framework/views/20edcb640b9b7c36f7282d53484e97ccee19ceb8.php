<?php $__env->startSection('pemrakarsa_content'); ?>

<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="<?php echo e(URL::to('/')); ?>">Dashboard</a>
    <i class="icon-angle-right"></i>
  </li>
  <li><a href="#">Download</a></li>
</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header">
      <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Download Berkas</h2>
    </div>
    <div class="box-content">
      <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>Nama Berkas</th>
              <th>Link</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $download; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td>Berkas A</td>
            <td class="center"><a href="#">Berkas A</a></td>
          </tr>
          <tr>
            <td>Berkas B</td>
            <td class="center"><a href="#">Berkas B</a></td>
          </tr>
          <tr>
            <td>Matriks</td>
            <td class="center"><a href="<?php echo e(URL::to('/download-berkas/'.$dl->content)); ?>"><?php if(isset($dl->jenis_usaha)): ?>
              <?php echo e($dl->jenis_usaha); ?>

            <?php endif; ?></a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
      </div>
    </div>
  </div><!--/span-->
</div><!--/row-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('pemrakarsa_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemInformasiSPPL\resources\views/pemrakarsa/download_page.blade.php ENDPATH**/ ?>