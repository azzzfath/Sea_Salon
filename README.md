# Laravel - README Template

###### tags: `PHP` `Laravel`

&gt; **Date**：2024/02/05
&gt; **Taker**：Sin

&gt; **The following are sample texts that can be used by each laravel project.**

## System Requirements

The following are required to function properly.

* PHP Version：PHP 8.2.x
* Laravel Version：10.42.x
* Node Version：20.x
* Vue Version：3.4.x
* MySQL Version：8.0.x / MariaDB Version：10.3.x

## Features

* Laravel 10 + Inertia + Vue
* Authentication with JWT

## Installation

* copy .env.example .env
* composer install
* php artisan key:generate
* php artisan storage:link
* chmod -R 777 storage bootstrap/cache
* php artisan migrate:fresh --seed
* npm install
* npm run build

## Usage

### Production

#### Composer Install

```bash
  composer install --prefer-dist --no-dev -a
```

#### Set cronjob

```bash
  crontab -e
```

```text
  * * * * * cd /path-to-your-project &amp;&amp; php artisan schedule:run &gt;&gt; /dev/null 2&gt;&amp;1
```

#### Run Queue with Supervisor

```bash
    sudo bash deployment/scripts/install_supervisor.sh
```

### Development

#### Run artisan serve

```bash
  php artisan serve
  npm run dev
```

#### Set redis in local by windows (WSL2)

```dotenv
    REDIS_CLIENT=predis
    REDIS_HOST=localhost
    REDIS_PASSWORD=null
    REDIS_PORT=6379
```

#### If not install redis, please change .env

```dotenv
    CACHE_DRIVER=&#34;file&#34;
    SESSION_DRIVER=&#34;file&#34;
```

#### Clear and cache

`optimize` will clear and cache config, route, file

```bash
  php artisan optimize:clear
```

#### Directory Permissions

```bash
  chmod -R 777 storage bootstrap/cache
```

#### Storage Link

```bash
  php artisan storage:link
```

#### Migrate with seeder

```bash
  php artisan migrate:fresh --seed
```

### Scribe

#### Scribe and Ide Helper Generator

```bash
  composer ide-helper-gen
```

#### Only Scribe Generator

```bash
  php artisan scribe:generate
```

#### how to open api document

1. run development `php artisan serve`
2. use browser open `http://127.0.0.1:8000/docs`

### Feature Flags

#### Feature flags status

```bash
  php artisan feature:status
```

#### Turn on Feature Flags

```bash
  php artisan feature:feature {feature} --activate
```

```bash
  php artisan feature:feature {feature} --a
```

#### Turn off Feature Flags

```bash
  php artisan feature:feature {feature} --deactivate
```

```bash
  php artisan feature:feature {feature} --d
```

### Sail

#### MySQL `.env` setting

```dotenv
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=&#34;caring_deer&#34;
    DB_USERNAME=sail
    DB_PASSWORD=password
```

#### Sail up

```bash
  ./vendor/bin/sail up
```

```bash
  ./vendor/bin/sail up -d
```

#### Sail down

```bash
  ./vendor/bin/sail down
```

### Sidecar

#### Configure AWS Keys (Optional)

```bash
  php artisan sidecar:install
```

#### Deploy to AWS Lambda and activate(Note: This will deploy to AWS Lambda)

```bash
  php artisan sidecar:deploy --activate
```

### Schedule event

#### Run Schedule (Need to add Crontab)

```bash
  php artisan schedule:run
```

#### Schedule List

```bash
  php artisan schedule:list
```

### Queue

#### Run Queue

```bash
    php artisan queue:work --queue social,push
```

#### Rework Queue

```bash
    php artisan queue:restart
```
