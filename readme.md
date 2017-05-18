```bash
cp .env.example .env

./artisan key:generate

# edit .env and setup your database config

./artisan maghead:db create master

./artisan maghead:schema build

./artisan maghead:sql

```
