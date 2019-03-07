# innovastoretest
Few points to consider before running the app.

- dump-productsspecs-201903071710.sql file contains the DB structure and schema, it will be required to insert data into tables. Migrations are already created for all the required tables creation but the data can be inserted using the insert statements which can be taken from mentioned SQL file. I could have created the Seeders for that but that would take a lot time.

- Products can be viewed by just browsing the main / route or by /products

- Single product details can be viewed by passing product id in the url like /product/1/

- I have also created another route /specifications to view specifications.

- Single specification details can be viewed by passing specification id in the url like /specifications/1/
