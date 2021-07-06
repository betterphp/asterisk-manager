# Asterisk Manager

JSON API and config management for my Asterisk VoIP server. Quite specific to
my setup and unlikely to be much use to anyone else :)

## Build

To set up a local version of the API using docker

```
docker-compose build
docker-compose up --no-start
```

## Testing

Style checking is done with phpcs

```
docker-compose run cli composer lint
```

Static analysis with Phan

```
docker-composer run cli composer analyse
```

Tests with PHPUnit

```
docker-compose run cli composer test
```

## Database

To populate the local database run

```
docker-compose exec api php artisan migrate:fresh
docker-compose exec api php artisan db:seed
```
