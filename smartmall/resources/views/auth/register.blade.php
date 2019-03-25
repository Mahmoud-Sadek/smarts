
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="form-group row">

                                <input placeholder="Name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>




                        <div class="form-group row">

                                <input placeholder="E-mail" id="email" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>




                        <div class="form-group row">

                                <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>





                        <div class="form-group row">

                                <input placeholder="Comfirm Password" placeholder="Last Name" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>




                        <div class="form-group">
                                <button type="submit" class="btn btn-block">
                                    {{ __('Sign Up') }}
                                </button>
                        </div>



                    </form>
