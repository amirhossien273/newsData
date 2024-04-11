
## Run Project With docker

## Installation

1. at first, you make volume with this command:

```bash
pip docker volume create manage-mysql-data
```

2. docker-compose up

```bash
pip docker-compose up
```

## migrate database

for php artisan commands use this:

```bash
pip docker exec -it Laravel-php /bin/bash
```

```bash
pip php artisan migrate
```

## Show Database

link [http://localhost:8000/db.php](http://localhost:8000/db.php)

Server mysql
Username root
Password 12345678

like .env.example