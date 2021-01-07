# games-db

1. __System requirements & installation__

Your environment requires the following dependencies

- PHP 8.0

then run

 ```bash
composer install && npm install
 ```  

2. __Add required environment variables__

```bash
TWITCH_CLIENT_ID=
TWITCH_CLIENT_SECRET=
TWITCH_AUTH_URL=https://id.twitch.tv/oauth2/token
IGDB_REQUEST_URL=https://api.igdb.com/v4/
```
   
3. __Testing__

Run the test suite

```bash
php artisan test
```



