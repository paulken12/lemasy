
## LEMASY

- Download or Clone (git clone https://github.com/paulken12/lemasy.git)

- cd to the project directory and run the command


    >composer install 

    >copy .env.example .env 

    >php artisan key:generate

- create database xampp/wamp : database_name - collations : utf8mb4_unicode_ci

- open .env file and modify the database connection


    ```dotenv
    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    >php artisan migrate

    >php artisan db:seed --class=DatabaseSeeder

    >php artisan serve
