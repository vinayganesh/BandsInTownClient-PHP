Echonest API PHP Library
=====================
This is a library to abstract the Echonest API 

Installation
------------
  1. edit `composer.json` file with following contents:

     ```json
     "require": {
        "bandsintown/bandsintown": "dev-master"
     }
     ```
  2. install composer via `curl -s http://getcomposer.org/installer | php` (on windows, download
     http://getcomposer.org/installer and execute it with PHP)
  3. run `php composer.phar install`

Use
---
Configure the service
```php
use BandsInTown\Service\BandsInTown;

