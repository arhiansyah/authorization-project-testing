
# Authorization project

A brief description of what this project does and who it's for


## Features

- Authorization with login, register, forgot password, verify email, profile
- Testing with laravel dusk




## Installation

Clone my project

```bash
  clone this project
  cd web-app-responic
```

Install with composer
```bash
  composer install
```

Building Asset with npm
```bash
  npm install && npm run dev
```

Setting Env in project, and set your db then running command :
```bash
  php artisan migrate --seed
  or
  php artisan migrate:fresh --seed
```

if you want check testing for this project, please create new file env.
new env format name is 'env.dusk.local'. it's for note, the db name should not be the same as the env project
and running command if you finish setting env.

```bash
  php artisan dusk
```


    
