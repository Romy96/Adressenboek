<?php $__env->startSection('content_backend'); ?>

<h1>Adressenlijst</h1>

<div class="row">
    <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="create_adress.php" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> Nieuwe adres
                    </a>
                </div>
            </div>

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
                            <th>Gemaakt in</th>
                            <th>Aangepast in</th>
                            <th data-sortable="false">Acties</th>
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
                                    <td>
                                    	<?php echo e($rows['Created_at']); ?>

                                    </td>
                                    <td>
                                    	<?php echo e($rows['Edited_at']); ?>

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="Edit_adress.php?id=<?php echo e($rows['ID']); ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="Delete_adress_action.php?id=<?php echo e($rows['ID']); ?>&events_id=<?php echo e($rows['events_id']); ?>" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                 </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend/menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>