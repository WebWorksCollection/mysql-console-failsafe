mysql-console
=============

## $(whatisit) ##
A simple MySQL Console using old MySQL functions

## Features ##
* Execute query from a simple textarea
* Automatic table column detection and resize
* Shows alert on syntax error

## Installation

Change the following line in index.php to your MySQL host, username, password and default database.

```php
$mysql = mysql_connect('localhost', 'user', '123456');
```

Copy and paste `index.php` and `style.css` anywhere, then enjoy!

## Requirements ##
* PHP 4