<form id="contactform Myform" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">



            <input id="loginInputEmail" placeholder="E-mail" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="admin_email" value="{{ old('admin_email') }}" required autofocus>
            <input type="text" name="email" class="form-control" id="loginInputEmail" placeholder="E-mail">
            @if ($errors->has('admin_email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('admin_email') }}</strong>
                </span>
            @endif


    </div>





    <div class="form-group row">


            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

    </div>




    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-block">
                {{ __('Login') }}
            </button>
        </div>
    </div>




</form>






</div>
</div>
</div>
</div>
</div>

<form id="contactform Myform" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">



            <input id="loginInputEmail" placeholder="E-mail" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="admin_email" value="{{ old('admin_email') }}" required autofocus>
            <input type="text" name="email" class="form-control" id="loginInputEmail" placeholder="E-mail">
            @if ($errors->has('admin_email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('admin_email') }}</strong>
                </span>
            @endif


    </div>





    <div class="form-group row">


            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

    </div>




    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-block">
                {{ __('Login') }}
            </button>
        </div>
    </div>




</form>






</div>
</div>
</div>
</div>
</div>
