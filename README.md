# A PHP login script (Part of project)

A simple, but secure PHP login script. Uses the ultra-modern & future-proof PHP 5.5.
BLOWFISH hashing/salting functions (includes the official PHP 5.3 & PHP 5.4 compatibility pack, which makes those
functions available in those versions too). Follow me on **[Twitter](https://twitter.com/parry0111)**,

1. **Minimal version** All the basic functions in a clean file structure, uses MySQL and mysqli.
   Register, login, logout.
  

## Requirements

- PHP 5.3.7+
- activated mysqli (last letter is an "i") extension (activated by default on most server setups)

## Installation (quick setup)

Create a database *login* and the table *users* via the SQL statements in the `_install` folder.
Change mySQL database user and password in `config/db.php` (*DB_USER* and *DB_PASS*).

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). You can use this script for free for any
private or commercial projects.

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

