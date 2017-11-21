# Laravel-5.4-crud-pagination-search
Laravel 5.4 - CRUD + Pagination + Search

1. Install Laravel 
>composer create-project --prefer-dist laravel/laravel 5.4 l54


2. Database migration
>php artisan make:migration create_items_table
>Note :add schema in migation table

3.Install Table
>php artisan migrate 	

4 Make Model
>php artisan make:model Items

5. Install HTML package
>composer require "illuminate/html":"5.4.0*"

5. Open /config/app.php and update as follows:

'providers' => [
	...
 
	'Illuminate\Html\HtmlServiceProvider',
],
 
'aliases' => [
 
	...
 
	'Form'=> 'Illuminate\Html\FormFacade', 
	'Html'=> 'Illuminate\Html\HtmlFacade',
],
