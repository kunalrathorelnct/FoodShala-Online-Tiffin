Follow Simple Steps to Run 'FoodShala' :

1) Setup database :
	
	1) create database named as 'FoodShala'
	2) Inside 'FoodShala' database use below command (Make sure are in Folder where FoodShala.sql file Stored :
		mysql> source FoodShala.sql; // This will populate your database
	3) Data created, use exit;

2) In your System You should have PHP installed with Apache Server or you can use Xampp (for linux)

3) Place this folder in /var/www/html/ folder

4) Make sure you provide valid permissions to that folder , 
	sudo chown -R www-data:www-data *
	sudo chown -R 777 *
	

5) For running at localhost , you can create virtual host for this website or can directly use localhost/folder_name


Thanks for reading !! have a nice day


