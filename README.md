# Airlines
This project was done as a part of Database Management Systems course project. Other resources such as requirement analysis,ERD, SQL code for database creation,triggers,functions and procedure etc for this project can be found at [https://github.com/axelJames/database--Airlines].
Make migration and seed database  
`php artisan migrate:fresh --seed`  
`composer require silber/bouncer v1.0.0-rc.1`  
In user model  
`use Silber\Bouncer\Database\HasRolesAndAbilities;
class User extends Model
{
    use HasRolesAndAbilities;
}`  
`php artisan vendor:publish --tag="bouncer.migrations"`  
`php artisan migrate:fresh --seed`  

## Contributors
- Jude K Anil
- Axel James
