<?php $__env->startSection('content'); ?>

<h1>Register</h1>
	
    <div class="row">
        <form role="form" method="post" action="Register_action.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="Username">Gebruikersnaam</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter username">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd">Wachtwoord</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>