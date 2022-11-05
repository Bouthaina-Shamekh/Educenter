<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('site.index') }}" class="row" method="POST">
                    @csrf
                    <div class="col-12">
                        <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="loginPhone" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>


                    <div class="col-12">
                        <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" id="loginPassword" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
