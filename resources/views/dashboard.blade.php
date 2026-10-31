<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | The Upside Down</title>

    @vite('resources/css/dashboard.css')
</head>
<body>
    <main class="dashboard-page">

        <!-- Header -->
        <header class="dashboard-header">
            <h1>THE UPSIDE DOWN</h1>
            <p>HAWKINS SYSTEM TERMINAL</p>
        </header>

        <!-- Navigation -->
        <nav class="dashboard-nav">
            <span class="user-greeting">
                Welcome, {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">
                    LOG OUT
                </button>
            </form>
        </nav>

        <!-- Main Content -->
        <section class="dashboard-card">
            <h2>DASHBOARD</h2>

            <p class="dashboard-message">
                You're logged in!
            </p>

            <p class="dashboard-description">
                Your connection to Hawkins is secure.
            </p>

            <div class="dashboard-divider"></div>

            <h2>PRODUCT MANAGEMENT</h2>

            <p class="dashboard-description">
                Manage your products from Hawkins.
            </p>

            <div class="dashboard-actions">
                <a href="{{ route('products.index') }}" class="dashboard-button">
                    VIEW PRODUCTS
                </a>

                @if(Auth::user()->isAdmin())
                    <a href="{{ route('products.create') }}" class="dashboard-button">
                        + CREATE PRODUCT
                    </a>
                @endif

            </div>
        </section>

        <footer class="dashboard-footer">
            HAWKINS LABORATORY // AUTHORIZED ACCESS ONLY
        </footer>

    </main>
</body>
</html>
