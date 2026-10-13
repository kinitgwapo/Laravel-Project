V. Guide Questions

Answer the following questions:
#### 1. What is Laravel Breeze, and what problem does it solve?

  - Laravel breeze is a starter kit for Laravel projects, which is built on a php framework and provides basic authentication features within the frontend design and backend logic. It saves a lot of time for the developers and focus on what their main goal was.


#### 2. What is the difference between registration and authentication?

 - Registration is all about signing up a new user, while authentication focuses on verifying whether the user credentials entered are legitimate.



#### 3. What is the purpose of the auth middleware?

 - Authentication middleware deals with routing access by verifying if there is a currently logged in user or the login credentials is authenticated. If the user accesses a page without logging in, they're redirected back to a specific page.



#### 4. Why should Product CRUD routes be protected from unauthenticated users?

 - Some pages require the users to login to verify who is currently modifying the database. Say, imagine a bank account through the website where anyone can access a specific savings and withdraw anonymously.



#### 5. What is the role of SMTP configuration in password recovery?

 - The purpose of Simple Mail Transfer Protocol (SMTP) is for Laravel to allow sending email configured by a mail server, typically containing password reset, or important information. For this scenario, the SMTP is used for password recovery/reset when the user forgets, and by providing the user's email, they will be sent an email with instructions to reset their account password.



#### 6. Why should email credentials be kept in the .env file?

 - Because the environment file (env) contains credentials like email, database, or simply personal or private information and is used to avoid adding private information directly to the source code. Laravel also excludes it from git commit, which means, it is not tracked the by git history. Although, the developers must ensure that it is kept privately and not published with the project.



#### 7. What is the difference between authentication and authorization?

 - Authentication is all about verifying if the credentials entered during login matches the database, while authorization focuses on what the user is allowed and not allowed to do, such as visiting a private personnel page.



#### 8. Does placing a route inside the auth middleware group automatically make a user an administrator? Explain your answer.

 - No, it depends what level of permission does the current user have, such as administrator mode, or typical consumer or user mode.

























<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).