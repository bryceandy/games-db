# games-db

1. __System requirements & installation__

Your environment requires the following dependencies

- PHP 8.0

Clone the repo

```bash
git clone https://github.com/bryceandy/games-db.git
```
 or using the Github CLI

```bash
gh repo clone bryceandy/games-db
```
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

3. __Run the app__

```bash
php artisan serve
```
   
4. __Testing__

Run the test suite

```bash
php artisan test
```



