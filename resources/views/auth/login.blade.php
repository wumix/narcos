@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Narcos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <p>
                Is a text-based multiplayer game where you try to build an illegal empire which sells narcotics around the globe. Rise to top
                and make millions! Already got an account? Log in on the right/bottom. Interested on becoming the next big kingpin? View the
                screenshots and <a class="bold" href="/register">register</a> straight away.
            </p>
            <h4 class="mt-4">Screenshots</h4>
            <div class="row">
                <div class="col">
                    <a href="/1.png" target="_blank">
                        <img class="img-fluid img-thumbnail" src="/1.png">
                    </a>
                </div>
                <div class="col">
                    <a href="/2.png" target="_blank">
                        <img class="img-fluid img-thumbnail" src="/2.png">
                    </a>
                </div>
                <div class="col">
                    <a href="/3.png" target="_blank">
                        <img class="img-fluid img-thumbnail" src="/3.png">
                    </a>
                </div>
            </div>
            <h4 class="mt-4">Statistics</h4>
            <p>
                {{ App\Stats::totalCharacters() }}
            </p>
        </div>
        <div class="col-md-4 col-lg-4">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <table class="table table-sm table-dark">
                    <thead>
                        <tr>
                            <th colspan="2">{{ __('Login') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="cell-fit">
                                <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                            </td>
                            <td>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail address" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            </td>
                            <td>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                <div class="col">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="mb-0" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <div class="text-center">
                                            <a class="btn btn-link btn-sm mt-3" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
