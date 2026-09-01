# Laravel 9 + Vue 3 (mixed stack)

Small demo wiring **Laravel 9** and **Vue 3** in the same app: Blade for the page shell, Laravel Mix compiling a Vue 3 component.

| | |
|---|---|
| **Source** | https://github.com/dekpo/Laravel9Vue3Mixed |
| Stack | PHP, Laravel 9, Vue 3, Laravel Mix |

Training project: one Vue app mounted on `#app` inside the Laravel welcome view. Vue root component: `resources/js/App.vue`.

## Setup

```bash
composer install
cp .env.example .env && php artisan key:generate
npm install
npm run dev
php artisan serve
```
