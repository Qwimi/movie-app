@extends('layouts.layout')
@section('content')
    <div class="myform bg-dark">
        <h1 class="text-center">Регистрация</h1>
        <form action="{{ route('users.store') }}" method="POST">

            @csrf

            <div class="mb-3 mt-4">
                <label for="exampleInputLogin" class="form-label">Логин</label>
                <input type="text" class="form-control" id="exampleInputLogin" aria-describedby="loginHelp"
                    placeholder="ExampleLogin" name="name" value="{{ old('name') }}">
            </div>
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
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Повтрорите парль</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Exapmle_password459"
                    name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-light mt-3">Зарегистрироваться</button>
        </form>
        <p class="isSign">Уже есть аккаунт? <a href="{{ route('login') }}">Войтиде</a></p>
    </div>
    {{-- <h2 class="sr-only">Login Form</h2>
    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#"
        class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>s --}}

    {{--
    <body class="font-mono bg-gray-400 h-full">
        <!-- Container -->
        <div class="container mx-auto h-full">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                        First Name
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="firstName" type="text" placeholder="First Name" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                        Last Name
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="lastName" type="text" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email" type="email" placeholder="Email" />
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Password
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password" type="password" placeholder="******************" />
                                    <p class="text-xs italic text-red-500">Please choose a password.</p>
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                        Confirm Password
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="c_password" type="password" placeholder="******************" />
                                </div>
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="button">
                                    Register Account
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#">
                                    Already have an account? Login!
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    --}}
@endsection
