@extends('layouts.app')

@section('content')

        <form method="POST" action="{{ url('/login') }}" class="col-md-7">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="card text-dark bg-light mt-5 w-75">
                    <h5 class="card-header text-center">
                        Вход в Админ
                    </h5>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="inputUserName">Логин</label>
                            <input type="text" name="login" class="form-control" value="{{ old('login') }}" id="inputUserName" aria-describedby="emailHelp" placeholder="Логин" required autofocus>
                            @if ($errors->has('login'))
                                <small class="form-text text-danger font-weight-bold">{{ $errors->first('login') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="InputEmail">Пароль</label>
                            <input type="password" name="password" class="form-control" id="InputEmail" placeholder="Пароль" required>
                            @if ($errors->has('password'))
                                <small class="form-text text-danger font-weight-bold">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Запомнить меня <br><br>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </div>
            </div>
        </form>

@endsection
