Fan Play Off
-----------------

Easy Installation
-----------------
**Requirements**
- Apache server
- php>=5.6
- MySQL
- composer

**Steps**
- Clone this repository: `$ git clone git@github.com:alvibd/fanplayoff.git`
- cd to project directory: `$ cd fanplayoff`
- checkout to dev branch: `$ git checkout -b dev`
- pull latest dev: `$ git pull oringin dev`
- copy .env.example to .env: `$ cp .evn.example .env`
- set database configurations in _.env_
- install all the requirements: `$ composer install`
- generate key: `$ php artisan key:generate`
- create all the tables: `$ php artisan migrate`
- run the database seeding: `$ php artisan db:seed`
- insert dummy player data from `players.sql`
- create public disk: `$ php artisan storage:link`
- run `$ php artisan serve` enjoy start the server and enjoy