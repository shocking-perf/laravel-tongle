<?php $__env->startSection('title'); ?>
Account Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    body, h1, h2, p, div, span, a, input, input[type="text"] {
        font-family: 'Poppins', sans-serif;
    }
</style>
<div class="form-box login-register-form-element">
    <div class="bg"></div>
    <!-- FORM BOX DECORATION -->
    <img class="form-box-decoration overflowing" src="/assets/img/landing/rocket.png" alt="rocket">
    <!-- /FORM BOX DECORATION -->

    <!-- FORM BOX TITLE -->
    <h2 class="form-box-title">Account Login</h2>
    <!-- /FORM BOX TITLE -->

    <!-- FORM -->
    <form class="form" method="POST" action="<?php echo e(route('loginPost')); ?>">
        <?php echo csrf_field(); ?>
        <?php if(session('authentication-failed')): ?>
        <!-- FORM ROW -->
        <div class="form-row">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span id="alert-close" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <strong><?php echo e(__('The username or email and password you entered did not match our records. Please double-check and try again, or try to reset your password.')); ?></strong>
            </div>

        </div>
        <!-- /FORM ROW -->
        <?php endif; ?>
        <?php if(session('authentication-blocked')): ?>
        <!-- FORM ROW -->
        <div class="form-row">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span id="alert-close" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <strong><?php echo e(__('This account has been suspended.')); ?></strong>
            </div>

        </div>
        <!-- /FORM ROW -->
        <?php endif; ?>

        <?php if(session('password-updated')): ?>
        <!-- FORM ROW -->
        <div class="form-row">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span id="alert-close" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <strong><?php echo e(__('You have successfully updated the password of your account.')); ?></strong>
            </div>
        </div>
        <!-- /FORM ROW -->
        <?php endif; ?>

        <!-- FORM ROW -->
        <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input">
                    <label for="username-email" style="font-family: poppins; Color: #fff;">Username or Email</label>
                    <input class="<?php $__errorArgs = ['username-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" id="username-email" name="username-email" value="<?php echo e(old('username-email')); ?>" style="background-color: transparent;border:none;border-radius:none;border-radius:0px; border-bottom: 1px solid #D5D5D5;" >
                    <?php $__errorArgs = ['username-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input">
                    <label for="password" style="font-family: poppins; Color: #fff;" >Password</label>
                    <input class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" id="password" name="password" style="background-color: transparent;border-radius:none;border-radius:0px; border:none; border-bottom: 1px solid #D5D5D5;">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row space-between">
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- CHECKBOX WRAP -->
                <div class="checkbox-wrap">
                    <input type="checkbox" id="remember_me" name="remember_me" checked>
                    <!-- CHECKBOX BOX -->
                    <div class="checkbox-box">
                        <!-- ICON CROSS -->
                        <svg class="icon-cross">
                            <use xlink:href="#svg-cross"></use>
                        </svg>
                        <!-- /ICON CROSS -->
                    </div>
                    <!-- /CHECKBOX BOX -->
                    <label for="remember_me">Remember Me</label>
                </div>
                <!-- /CHECKBOX WRAP -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- FORM LINK -->
                <a class="form-link" href="<?php echo e(route('resetPasswordGet')); ?>">Forgot Password?</a>
                <!-- /FORM LINK -->
            </div>
            <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- BUTTON -->
                <button class="button medium secondary" style="border-radius:50px; background-color:#fff; color:#7750F8; box-shadow:3px 6px 8px  rgba(0,0,0,0.2); font-size:15px">Login to your Account!</button>
                <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->
        
                <!-- LINED TEXT -->
        <p class="lined-text">Login with your Social Account</p>
        <!-- /LINED TEXT -->

        <!-- SOCIAL LINKS -->
        <div class="social-links">
            <!-- SOCIAL LINK -->
            <a class="social-link facebook" href="<?php echo e(route('loginRedirectGet', ['platform' => 'facebook'])); ?>">
                <!-- ICON FACEBOOK -->
                <svg class="icon-facebook">
                    <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /ICON FACEBOOK -->
            </a>
            <!-- /SOCIAL LINK -->

            <!-- SOCIAL LINK -->
            <a class="social-link google" href="<?php echo e(route('loginRedirectGet', ['platform' => 'google'])); ?>">
                <!-- ICON TWITTER -->
                <svg class="icon-google">
                    <use xlink:href="#svg-google"></use>
                </svg>
                <!-- /ICON TWITTER -->
            </a>
            <!-- /SOCIAL LINK -->
        </div>
        <!-- /SOCIAL LINKS -->
        
    </form>
    <!-- /FORM -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\msm\resources\views/auth/login.blade.php ENDPATH**/ ?>