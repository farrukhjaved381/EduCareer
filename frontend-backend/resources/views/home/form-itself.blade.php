<form id="test-form" class="white-popup-block mfp-hide" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Sign in</h3>
            <div class="row">
                <!-- Email Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Email</label>
                    <input type="email" name="email" :value="old('email')" required placeholder="Enter email">
                    <!-- Display email validation errors -->
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Password Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Password</label>
                    <input type="password" name="password" required placeholder="Password">
                    <!-- Display password validation errors -->
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Remember Me Checkbox -->
                <div class="col-xl-12">
                    <label for="remember_me" style="color: white;">
                        <input id="remember_me" type="checkbox" name="remember" style="width: 15px; height: 15px;">
                        <span class="ms-2 remember-me-text">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <!-- Submit Button -->
                <div class="col-xl-12">
                    <button type="submit" class="boxed_btn_orange">Sign in</button>
                </div>
            </div>
            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <p class="doen_have_acc">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </p>
            @endif
            <!-- Sign Up Link -->
            <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2"><b>Sign Up</b></a></p>
        </div>
    </div>
</form>

{{-- <style>
    /* Custom CSS for the Remember Me checkbox and text */
    .remember-me-checkbox {
        width: 5px; /* Adjust the size of the checkbox */
        height: 5px; /* Adjust the size of the checkbox */
        margin-right: 2px; /* Add some spacing between the checkbox and text */
        color: white;
    }

    .remember-me-text {
        color: white; /* Make the text white */
        font-weight: bold; /* Make the text bold */
        font-size: 14px; /* Adjust the font size if needed */
    }

    .remember-me-label {
        display: flex;
        align-items: left; /* Align the checkbox and text vertically */
    }
</style> --}}
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Registration</h3>
            <div class="row">
                <!-- Name Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Enter your name">
                    <!-- Display name validation errors -->
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Email Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required placeholder="Enter email">
                    <!-- Display email validation errors -->
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Password Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Password</label>
                    <input type="password" name="password" required placeholder="Password">
                    <!-- Display password validation errors -->
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Confirm Password Input -->
                <div class="col-xl-12 col-md-12">
                    <label for="" style="color: white">Confirm Password</label>
                    <input type="password" name="password_confirmation" required placeholder="Confirm password">
                </div>
                <!-- Submit Button -->
                <div class="col-xl-12">
                    <button type="submit" class="boxed_btn_orange">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</form>
