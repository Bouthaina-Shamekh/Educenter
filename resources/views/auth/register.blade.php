<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="{{ route('register')}}" class="row" method="POST">
                        @csrf

                        <div class="col-12">
                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="signupName" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3 @error('password') is-invalid @enderror" id="signupEmail" name="email" placeholder="Email" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="password" placeholder="Password">
                        </div>

                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupconfirmPassword" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
