@extends('front.partials.layout')

@section('content')
<div class="container">
  <br><br>
    <div class="col-md-6 col-md-offset-3">
          <br>
          <h2 style="color:#000; font-size:30px" class="text-center">Lupa Password</h2>
          <br><br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 pull-right" style="margin-top:6px; margin-right:60px;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Kirim Password Ulang') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
      </div>
</div>
@endsection
