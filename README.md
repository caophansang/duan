- Install process:

1. Clone the project with https or ssh
```
git clone https://github.com/Dat1606/phansang.git
```
or 
```
git clone git@github.com:Dat1606/phansang.git
```

2. Create .env file
```
cd ./phansang
cp .env.example .env
```
Edit .env file with suitable DB connection.

3. Install dependencies

```
php artisan key:generate
composer install
npm install
npm run dev
```

4. Create storage dir to store images file
```
mkdir ./storage/app/public/users
mkdir ./storage/app/public/banners
mkdir ./storage/app/public/products
php artisan storage:link
```

5. Ready to run the app
```
php artisan serve
```

ERD: recently not updated
```
https://cacoo.com/diagrams/4Y7P9ZvlpuzSyw2H/CA8FF
```
