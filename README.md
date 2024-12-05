## Instalation

- Pull the repository
```bash
git clone https://github.com/Jharlzay/VMIS.git
```
- Install App
```bash
composer intall

cp .env.example .env

php artisan key:generate

Update env file with right DB credentials.

php artisan migrate

php artisan db:seed

```

- Run App
```bash
- Local

php artisan serve
