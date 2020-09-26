<?php $__env->startSection('content'); ?>
    <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <!-- <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> -->
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <!--<h2>Please fill these Information!</h2>-->
                <h1>Please Give Attention</h1>
              </div>
              <div>
                  <h4>Here is <span class="text-danger">Accounts of Admin and Staff role</span></h4>
                  <h3>Admin Account ->admin123@gmail.com</h3>
                  <h3> Password -> 123456789</h3>
                  <h3>Staff Account -> staff123@gmail.com</h3>
                  <h3> Password ->123456789</h3>
              </div>   
              
                        
                        <!--<div class="form-group mb-3">-->
                        <!--  <div class="input-group input-group-alternative">-->
                        <!--    <div class="input-group-prepend">-->
                        <!--       <span class="input-group-text"><i class="ni ni-circle-08"></i></span>-->
                        <!--    </div>-->
                        <!--     <input id="password" placeholder="UserName" type="text" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mailusername" required >-->

                        <!--        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong><?php echo e($message); ?></strong>-->
                        <!--            </span>-->
                        <!--        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                        <!--  </div>-->
                        <!--</div>-->

                        <!--<div class="form-group mb-3">-->
                        <!--  <div class="input-group input-group-alternative">-->
                        <!--    <div class="input-group-prepend">-->
                        <!--      <span class="input-group-text"><i class="ni ni-email-83"></i></span>-->
                        <!--    </div>-->
                        <!--     <input id="email" type="email" placeholder="Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mail"  required autocomplete="email" autofocus>-->

                        <!--          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                        <!--              <span class="invalid-feedback" role="alert">-->
                        <!--                  <strong><?php echo e($message); ?></strong>-->
                        <!--              </span>-->
                        <!--          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                        <!--  </div>-->
                        <!--</div>-->

                        
                    

                        

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <!--<button type="submit" class="btn form-control btn-primary btn-submit">-->
                                <!--    <?php echo e(__('Get Accounts Now!')); ?>-->
                                <!--</button>-->
                                <a class="btn form-control btn-primary " href="javascript:void(0)">Thank you So Much</a>
                            </div>
                        </div>
                    
            </div>
          </div>
          <div class="row mt-3">
            <!-- <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div> -->
            <div class="col-12 text-center">
             <p class="text-white">Thank You for using Our System</p>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.custom-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/khinzarchiaung/wawahotpot.khinzarchiaung.me/resources/views/auth/getAccounts.blade.php ENDPATH**/ ?>