Bands In Town API PHP Library
=====================
This is a library to abstract the Bands In Town API 

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
```php
use BandsInTown\Service\BandsInTown;

include('./vendor/autoload.php')

BandsInTown::getArtists('<band Name>','<appid>');


Note
____
The app id can be anything that identifies the application. 

