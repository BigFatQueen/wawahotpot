<?php $__env->startSection('content'); ?>

<div class="container-fluid bg-white">

		<div class="bg-white py-2 " id="curry-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					<?php $__currentLoopData = $currys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="<?php echo e(asset($data->photo)); ?>" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4><?php echo e($data->name); ?></h4>
								<h4>Price: <span class="text-warning"><?php echo e($data->price); ?>K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="<?php echo e($data->id); ?>" data-name="<?php echo e($data->name); ?>" data-price="<?php echo e($data->price); ?>" data-photo="<?php echo e($data->photo); ?>" data-category="<?php echo e($data->category->name); ?>">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="meat-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					<?php $__currentLoopData = $meats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="<?php echo e(asset($data->photo)); ?>" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4><?php echo e($data->name); ?></h4>
								<h4>Price: <span class="text-warning"><?php echo e($data->price); ?>K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="<?php echo e($data->id); ?>" data-name="<?php echo e($data->name); ?>" data-price="<?php echo e($data->price); ?>" data-photo="<?php echo e($data->photo); ?>" data-category="<?php echo e($data->category->name); ?>">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="seafood-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					<?php $__currentLoopData = $seafoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="<?php echo e(asset($data->photo)); ?>" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4><?php echo e($data->name); ?></h4>
								<h4>Price: <span class="text-warning"><?php echo e($data->price); ?>K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="<?php echo e($data->id); ?>" data-name="<?php echo e($data->name); ?>" data-price="<?php echo e($data->price); ?>" data-photo="<?php echo e($data->photo); ?>" data-category="<?php echo e($data->category->name); ?>">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="vegetable-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					<?php $__currentLoopData = $vegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card shadow  col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="<?php echo e(asset($data->photo)); ?>" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4><?php echo e($data->name); ?></h4>
								<h4>Price: <span class="text-warning"><?php echo e($data->price); ?>K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="<?php echo e($data->id); ?>" data-name="<?php echo e($data->name); ?>" data-price="<?php echo e($data->price); ?>" data-photo="<?php echo e($data->photo); ?>" data-category="<?php echo e($data->category->name); ?>">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div>
				
				
			</div>
		</div>
	
</div>


<!-- alert Model -->
<div class="col-md-4">
      
      <div class="modal fade" id="error-modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
	    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
	        <div class="modal-content bg-gradient-danger">
	        	
	            <div class="modal-header">
	                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                </button>
	            </div>
	            
	            <div class="modal-body">
	            	
	                <div class="py-3 text-center">
	                    <i class="ni ni-bell-55 ni-3x"></i>
	                    <h4 class="heading mt-4">You should read this!</h4>
	                    <p>You haven't choose the Counter No from above Counter Selection!</p>
	                    <h2 class="text-white">Please Select Counter No Frist!</h2>
	                </div>
	                
	            </div>
	            
	            <div class="modal-footer">
	                <button type="button"  class="btn btn-white" data-dismiss="modal" >Ok, Got it</button>
	                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
	            </div>
	            
	        </div>
	    </div>
	</div>

 </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
		$(document).ready(function(){
	getCountMenu();

	
})
function getCountMenu(){
   // alert('helo');
	$.get('/menus/count',function(response){
		$.each(response.data,function(i,v){
			$(`.${v.name}-backend-count`).html(v.meats_count);
		})

		$.each(response.lastdate,function(i,v){
			$.each(v,function(k,j){
				$(`.${j.category.name}-latestUpdate`).html(j.created_at);
			})
			
		})
	})
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/front_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prj/wawahotpot/resources/views/frontend/homepage.blade.php ENDPATH**/ ?>