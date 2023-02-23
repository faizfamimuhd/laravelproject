<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<?php if(!empty($users)): ?>
<!--<form action="useredit?rid=<?php echo e($users->id); ?>" method="post">
<?php echo csrf_field(); ?>
    <div>
        <label>Full Name</label>
        <input maxlength="100" value="<?php echo e($users->name); ?>" type="text" name="fullname">
    </div>
    <div>
        <label>Email Address</label>
        <input maxlength="100" value="<?php echo e($users->email); ?>" type="email" name="email">
    </div>
    <div>
        <label>Password</label>
        <input maxlength="50" value="<?php echo e($users->password); ?>" type="text" name="password">
    </div>
    <button type="submit">Update</button>
    <button type="button" onclick="javascript:history.back()">Cancel</button>
</form>-->

<main class="form w-100 m-auto">
<form action="useredit?rid=<?php echo e($users->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <h1 class="h3 mb-3 fw-normal">Update Your Account</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" value="<?php echo e($users->name); ?>" name="fullname" required>
      <label for="floatingInput">Full Name</label>
    </div>
<br>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" value="<?php echo e($users->email); ?>" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>
<br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" value="<?php echo e($users->password); ?>" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>
<br>
<div class="d-flex justify-content-center">
    <button class="w-30 btn btn-lg btn-primary" type="submit">Update</button>
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
<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/useredit.blade.php ENDPATH**/ ?>