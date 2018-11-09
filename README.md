# Laravel-Frame-work-Guide-
Laravel Frame work Guide 



# Laravel_Frame_Work_GUIDE

#How to use 
1. install  (composer install) and *npm install() 
2. php artisan key:generate 
3. php artisan serve 




# Laravel How To Note 

# Controller  
1. How to make Controller using php artisan
php artisan make:controller PageController/TestController
The PageController is the folder and TestController is Controller file

2. Access the Controller file in the routefile with sub folder 
 https://stackoverflow.com/questions/18850542/laravel-controller-subfolder-routing


3. This is command is make CRUD generate all the code we need we dont need to type it all. 

php artisan make:controller QuestionController --resource

4. Make Controller default way 
 php artisan make:controller Blogcontroller

#Route

1. How to See all the Route 
php artisan route:list 



#Migration 

1. How to create a migration 
php artisan make:migration create_question_table

2. run the migration 
php artisan migrate 



# Model 

1. How to Create a Model 
php artisan make:model Question

2. Create A Model with Migration
php artisan make:model Question -m


# Blade Template Engine 
1. You have to make your layout to extends by other fails



# Using php artisan tinker
1. How to create Fake data to the database
 

# CSTF
1. using @cstf in the post method form all ways put 

Need To read 18