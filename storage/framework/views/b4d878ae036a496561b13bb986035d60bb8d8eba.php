<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<div class="table-responsive">
    <table class="table table-striped table-sm">
    <?php if(count($listofuser)): ?>
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Create Date</th>
            <th>Updated Date</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listofuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><a href="/userview?rid=<?php echo e($user->id); ?>"><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'); ?></td>
            <td><?php echo e($user->updated_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'); ?></td>
            <td>
                <a  href="/useredit?rid=<?php echo e($user->id); ?>" span class="material-symbols-sharp">add_box</span></a>
                <a href="/deleteuser?rid=<?php echo e($user->id); ?>" span class="material-symbols-sharp">delete</span></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <style>
.h-5 {
height: 1em;
} .flex {
text-align: center;
width: 100%;
} .leading-5 {
padding: 0.8em;
}

.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

</style>

<br><tr><td colspan="7">
    <?php echo e($listofuser->appends(['q' => Request::get('q')])->links()); ?>

</td></tr>
    </tbody>
    <?php else: ?>
    <td>No Record Found</td>
    <?php endif; ?>
</table>
</div>
<br>
<div class="d-flex justify-content-center">
<button class="w-30 btn btn-sm btn-secondary" type="button" onclick="javascript:history.back()">Cancel</button>
</div>
<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/userlist.blade.php ENDPATH**/ ?>