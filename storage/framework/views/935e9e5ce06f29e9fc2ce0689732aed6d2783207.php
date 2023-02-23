<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>

<?php if(!empty($users)): ?>
    <!--<div>
        <label>Full Name</label>
        <?php echo e($users->name); ?>

    </div>
    <div>
        <label>Email Address</label>
        <?php echo e($users->email); ?>

    </div>
    <div>
        <label>Password</label>
        <?php echo e($users->password); ?>

    </div>
    <button type="button" onclick="window.location='/userlist'">Cancel</button>
    <button type="button" onclick="window.location='/useredit?rid=<?php echo e($users->id); ?>'">Edit</button>
</form>-->

<form>
    <br><br><h1 class="h3 mb-3 fw-normal">Users Information</h1>
<div>
    <label>Full Name</label><br>
    <?php echo e($users->name); ?>

</div>
<br>
<div>
    <label>Email Address</label><br>
    <?php echo e($users->email); ?>

</div>
<br>
<div>
    <label>Password</label><br>
    <?php echo e($users->password); ?>

</div>
<br>
<div class="d-flex justify-content-center">
    <button class="w-40 btn btn-sm btn-primary" type="button" onclick="window.location='/useredit?rid=<?php echo e($users->id); ?>'">Edit</button>
    </div>
    <br>
<div class="d-flex justify-content-center">
    <button class="w-30 btn btn-sm btn-secondary" type="button" onclick="javascript:history.back()">Cancel</button>
    </div>
    <!--<button type="button" onclick="javascript:history.back()">Cancel</button>-->
  </form>
</main>

<?php else: ?>
no record Found
<?php endif; ?>
<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/userview.blade.php ENDPATH**/ ?>