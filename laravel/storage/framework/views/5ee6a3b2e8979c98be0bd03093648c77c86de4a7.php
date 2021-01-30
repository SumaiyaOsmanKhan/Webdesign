<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<?php $__env->startSection('content'); ?>
<body>
<div>
<div style="background-image: url('https://lh3.googleusercontent.com/proxy/wfmgl8sGW4cN8qvmSCO20oiPPPw_hiycPzJLV1cZHCvLjlCrtSnJJus2B6dr5ZgGOhfR5-IBoV_VhCxnv65m3pBVRMC0CnD_f8E3pQnAKSxsM07lu1z_qxjQ');" style="background-repeat: no-repeat;">
	<h1 class="text-center"> পাঠক তালিকা </h1>

	<br>
	

	<br>
	<hr>

	<table class="table table-striped" border="2" width="800">
		<tr>
			<th scope="col"> Name </th>
			<th scope="col">Mobile Number </th>
			<th scope="col"> Address </th>
			<th scope="col"> Action </th>
		</tr>

		<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="table-info" scope="row"> 
			<td><?php echo e($student->student_id); ?> </td>
			<td><?php echo e($student->name); ?> </td>
			<td><?php echo e($student->batch); ?> </td>
			<td>
				<form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
					<a class="btn btn-primary" href="<?php echo e(route('students.edit', $student->id)); ?>" > Edit </a>					
					<?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?> 

					<button class="btn btn-danger" type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

	</table>

</div>
<br>
<a class="btn btn-success" href="<?php echo e(route('students.create')); ?>">পাঠক তালিকায় যোগ হোন</a>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/students/index.blade.php ENDPATH**/ ?>