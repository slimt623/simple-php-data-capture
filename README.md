Simple Data Capturing System PHP Codeignitor


Simple Data Capturing System

- You have agents in the field capturing information from people
- You require a system to let your agents enter this information and easily get it stored in a central Database
- Setting up of this system should be really easy 
- Exporting of captured data for analysis 
- We make use of the Grocery CRUD (https://www.grocerycrud.com) is an open source library that makes a developer's life easier. This speeds development by making use of a few lines of code.

How to setup

1. Clone this repo 
2. Place files in your PHP server in a directory "simpledatacapturephp"
4. Create mysql database and import database from application/sql/thedb.sql
5. Set your database details in database config
6. Set base url to http://localhost:8888/simpledatacapturephp/  in application/config/config.php
$config['base_url'] = 'http://localhost:8888/simpledatacapturephp';


visit http://localhost:8888/simpledatacapturephp/

Username: admin@admin.com Password: password


Platform developed using 
codeignitor https://www.grocerycrud.com/documentation/codeigniter_installation 
Ion Auth https://github.com/benedmunds/CodeIgniter-Ion-Auth
and Grocery Crud (https://www.grocerycrud.com for fast development
