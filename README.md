# PHP test

## 1. Installation

  - create an empty database named "phptest" on your MySQL server
  - import the dbdump.sql in the "phptest" database
  - put your MySQL server credentials in the constructor of DB class
  - you can test the demo script in your shell: "php index.php"

## 2. Expectations

This simple application works, but with very old-style monolithic codebase, so do anything you want with it, to make it:

  - easier to work with
  - more maintainable

## Result

  - Applied Model-View-Controller (MVC) design pattern.
  - Removed unnecessary codes that was not used upon running the script.
  - Implemented Single-Responsibility Principle (S of the SOLID object-oriented design (OOD) principles). This means a class should have only one responsibility like the Model Class that is responsible for the common sql queries, NewsModel and CommentModel corresponding to their database table, config that stores configurations, and database that handles only the database connection.