@extends('layouts.layout')
@section('content')
    <div class="myform bg-dark">
        <h1 class="text-center">Вход</h1>
        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="mb-3 mt-4">
                <label for="exampleInputEmail" class="form-label">Почта</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="ExampleMail@mail.com" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Exapmle_password459"
                    name="password">
            </div>
            <button type="submit" class="btn btn-light mt-3">Вход</button>
        </form>
        <p class="isSign">Нет аккаунта <a href="{{ route('users.create') }}">Зарегистрируйтесь</a></p>
    </div>
@endsection
