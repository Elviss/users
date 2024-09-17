**User management page**

How to Use:

- Install the composer dependencies `php composer install`
- Create a .env file `cp .env.example .env`
- Set DB_USER and DB_PASSWORD env variables to 'user'
- Run docker to create the database `docker-compose.yml up`
- Enter the container created `docker exec -it CONTAINER_ID bash` 
- Inside the container bash `mysql -uuser -puser`
- Choose the database `use users-management`
- Execute the content of `db.sql` file in the mysql to create the table
