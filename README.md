# Install

`git clone git@github.com:bayurifkialghifari/tubes-ccdp.git` <br>
`cd tubes-ccdp` <br>
`composer install` <br>
`create the mysql database` <br>
`cp .env.example .env` <br>
`set the DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT` <br>
`php artisan migrate` <br>
`php artisan db:seed` <br>
`php artisan run` <br>

# Design Pattern

`front controller` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/public/index.php">Example</a> <a href="https://webdevetc.com/blog/the-front-controller-design-pattern-in-php/"> Explanation</a><br>
`⁠⁠singleton` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/src/Utils/Session.php">Example</a> <a href="https://refactoring.guru/design-patterns/singleton/php/example/"> Explanation</a><br>
`⁠⁠mvc` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/tree/main/src">Example</a> <a href="https://www.geeksforgeeks.org/mvc-design-pattern/"> Explanation</a><br>
`⁠⁠builder pattern` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/src/Utils/Model.php">Example</a> <a href="https://refactoring.guru/design-patterns/builder/php/example"> Explanation</a><br>
`⁠⁠attomic design` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/tree/main/src/View/components">Example</a> <a href="https://dev.to/sanfra1407/how-to-organize-your-components-using-the-atomic-design-dj3"> Explanation</a><br>
`⁠⁠Strategy` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/src/Utils/Route.php">Example</a> <a href="https://refactoring.guru/design-patterns/strategy/php/example"> Explanation</a><br>
`⁠⁠tell dont ask` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/src/Utils/Url.php">Example</a> <a href="https://medium.com/@abel_rincon/the-tell-dont-ask-principle-and-the-law-of-demeter-in-object-oriented-programming-8ad6ca1abd4"> Explanation</a><br>
`⁠⁠repository pattern` <a href="https://github.com/bayurifkialghifari/tubes-ccdp/blob/main/src/Controller/LoginController.php">Example</a> <a href="https://doeken.org/blog/repository-pattern"> Explanation</a><br>


# WADUH

`php artisan run {port?}` to start the application on localhost:8080 <br>
`php artisan make:migration {name}` to create migration <br>
`php artisan make:seeder {name}` to create seeder <br>
`php artisan make:controller {name}` to create controller <br>
`php artisan make:view {name}` to create model <br>
`php artisan migrate` to run migration <br>
`php artisan db:seed {name?}` to run seeder <br>
`php artisan rollback` to rollback migration <br>