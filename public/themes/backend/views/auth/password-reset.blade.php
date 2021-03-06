<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('backend.dashboard.index.get') }}"><b>Laravel5 Core</b> Backend</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Reset your password</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('auth.password.reset.post') }}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <a href="{{ route('auth.login.get') }}" class="btn btn-flat">Back</a>
                </div><!-- /.col -->
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
                </div><!-- /.col -->
            </div>
        </form>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->