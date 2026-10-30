<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | The Upside Down</title>

    @vite('resources/css/login.css')
</head>
<body>
    <main class="login-page">
        <section class="login-card">
            <header class="login-header">
                <h1>WELCOME</h1>
                <p>ENTER THE UPSIDE DOWN</p>
            </header>

            @if (session('status'))
                <div class="login-status">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="login-errors" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div class="remember-group">
                    <label for="remember">
                        <input
                            id="remember"
                            type="checkbox"
                            name="remember"
                            value="1"
                        >
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="login-button">
                    LOG IN
                </button>

                @if (Route::has('password.request'))
                    <p class="forgot-password">
                        <a href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </p>
                @endif
            </form>
        </section>
    </main>
</body>
</html>
