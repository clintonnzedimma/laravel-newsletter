## Description
This is a laravel application meant to store posts and Newsletter subscriptions

When a new post is created, the details of that post will be sent to each subscribed user on the database

## Steps to setup the aplication
set up the .env file with your database authentication credentials and mail server credentials

Generate migration with 'php artisan migrate'

To run the application use 'php artisan serve'

to add a subscriber, send a post request to http://localhost:8000/api/subscribe with parameters {email}

to add a post, send a post request to http://localhost:8000/api/createpost with parameters {title, description}
