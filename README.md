# Install
`git clone git@github.com:bayurifkialghifari/tubes-ccdp.git`
`cd tubes-ccdp`
`composer install`
`create the mysql database`
`cp .env.example .env`
`set the DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT`
`php artisan migrate`
`php artisan db:seed`
`php artisan run`


# WADUH

`php artisan run {port?}` to start the application on localhost:8080 <br>
`php artisan make:migration {name}` to create migration <br>
`php artisan make:seeder {name}` to create seeder <br>
`php artisan make:controller {name}` to create controller <br>
`php artisan make:view {name}` to create model <br>
`php artisan migrate` to run migration <br>
`php artisan db:seed {name?}` to run seeder <br>
`php artisan rollback` to rollback migration <br>