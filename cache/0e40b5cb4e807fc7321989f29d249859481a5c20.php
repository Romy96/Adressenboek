<?php $__env->startSection('content'); ?>

            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sorteer</th>
                            <th>Emailadres</th>
                            <th>Huisadres</th>
                            <th>Postcode</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($adress)): ?>
                            <?php $__currentLoopData = $adress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                                <tr>
                                    <td>
                                        <?php echo e($rows['Name']); ?>

                                    </td>
                                    <td>
                                        <?php echo e($rows['Email_adress']); ?>

                                    </td>
                                    <td>
                                        <?php echo e($rows['Home_adress']); ?>

                                    </td>
                                    <td>
                                        <?php echo e($rows['Zip_code']); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                 </table>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>