# Airlines

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

