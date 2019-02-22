# E-Store
This repository consists of codes and softwares related to my web development
project. It contains all the necessary .php files and one .sql file. Tools and 
technologies necesary to run this projects:
### Tools : 
- Netbeans IDE
- Wampserver
- Browser (any, with netbeans connector plugin)
### Technologies :
- HTML and CSS
- Bootstrap
- MySQL
- PHP

## Project-Diary:
1. Install netbeans IDE, Wampserver, and a browser with netbeans connector plug-in.
2. In the netbeans IDE, create a directory of php templates with source and include folder.
3. Save this directory in default folder of wampserver (www).
4. Import all the .php files and folders(Bootstrap and all) from E-store folder to the newly created directory.
5. Import items.sql in a newly created E-Store database.
6. Create other tables:
    * users(id, name, email, password, contact, city, address)
    * users_items(id, user_id, item_id, status)

The front-end is designed with HTML, CSS and Bootstrap.
The back-end is designed with PHP and MySQL.
Database should be created in phpMyAdmin using MySQL, via WAMP.
For Password encryption, MD5 is used in the forms. 
