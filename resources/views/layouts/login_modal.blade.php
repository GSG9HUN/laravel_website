
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Login</h4>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <form >


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="Your email address...">

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control     @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password" id="password"
                                           placeholder="Your password...">

                                </div>
                                <button type="submit" class="btn btn-info btn-block btn-round" >Login</button>
                            </form>

                            <div class="text-center text-muted delimiter">or use a social network</div>
                            <div class="d-flex justify-content-center social-buttons">
                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Facebook">
                                    <i class="fab fa-facebook"></i>
                                </button>
                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </button>
                                </di>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer d-inline-flex justify-content-center">
                        <div class="text-left">
                            <a  href="{{route("password.request")}}">
                                Forgot your password?
                            </a>

                        </div>
                        <div class="signup-section">
                            Not a member yet?
                            <a href="{{route('register')}}" class="text-info"> Sign Up</a>.</div>

                    </div>
                </div>
            </div>
        </div>
    </form>
