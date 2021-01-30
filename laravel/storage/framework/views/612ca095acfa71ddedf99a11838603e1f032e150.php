<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
 <body>
 <div>
 	<div style="background-image: url('https://lh3.googleusercontent.com/proxy/wfmgl8sGW4cN8qvmSCO20oiPPPw_hiycPzJLV1cZHCvLjlCrtSnJJus2B6dr5ZgGOhfR5-IBoV_VhCxnv65m3pBVRMC0CnD_f8E3pQnAKSxsM07lu1z_qxjQ');" style="background-repeat: no-repeat;">
	<form   action="<?php echo e(route('students.update',$student->id)); ?>"  method="POST">
 	 	<?php echo csrf_field(); ?>
 	 	<?php echo method_field('PUT'); ?>
 	 	<label for="exampleFormControlInput1" class="form-label"> নাম </label>
		<input class="form-control" type="text" id="exampleInputEmail1" aria-describedby="emailHelp"  name="student_id" placeholder="Name" value="<?php echo e($student->student_id); ?>"> 
		<br>
 	 	<label for="exampleFormControlInput1" class="form-label"> মোবাইল নাম্বার </label>

		<input class="form-control" type="text" name="name" placeholder="Mobile Number" value="<?php echo e($student->name); ?>">
		<br>
<label for="exampleFormControlInput1" class="form-label">  ঠিকানা </label>
		 <input class="form-control" type="text" name="batch" placeholder="Address" value="<?php echo e($student->batch); ?>">

		<br><br>
		<button class="btn btn-success" type="submit" >Update</button>

		


	</form>

</div>

</body>
</html>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/students/edit.blade.php ENDPATH**/ ?>