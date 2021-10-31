<x-layout>
    <?php $page = "Log In"; ?>
    <x-breadcrumb :page="$page" />



    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="login-register-page-area section-space--ptb_80">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 m-auto">
                            <div class="login-content">

                                <div class="login-header mb-40">
                                    <h5>LOG IN YOUR ACCOUNT</h5>
                                </div>

                                <form action="/login/user" method="POST">
                                    @csrf
                                    <input type="text" placeholder="Username" name="username" value="{{ old('username') }}">
                                    @error('username')
                                        <span style="color:red;font-size:small;font-weight:bold;">{{$message}}</span>
                                    @enderror
                                    <input type="password" placeholder="Password" name="password">
                                    <div class="remember-forget-wrap mb-30">
                                        <div class="remember-wrap">
                                            <input type="checkbox">
                                            <p>Remember</p>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-primary btn-large">Log in</button>
                                    <div class="member-register mt-5">
                                        <p> Not a member? <a href="/sign-up"> Register now</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
