portal.excellentschoolsdetroit.org API tests
============================================

Use this set of Behat tests to make sure portal.excellentschoolsdetroit.org APIs work.

About
-----


Build
-----

Testing
-------

Acceptance tests for this project are implemented with [Behat](http://behat.org/),
PHPUnit, and Buzz.

### Test environment

To run the acceptance tests, you'll need to install a few libraries and PHP
packages.

Install the PHP curl extension.  On Ubuntu, this looks like:

```
sudo apt-get install curl libcurl3 libcurl3-dev php5-curl
```

Install [Composer](http://getcomposer.org/):

```
curl -s https://getcomposer.org/installer | php
```

Install testing dependencies using Composer:

```
php composer.phar install
```

Install PHP dependencies:

```
pear channel-discover pear.phpunit.de
pear channel-discover components.ez.no
pear channel-discover pear.symfony.com
pear install phpunit/PHPUnit
```

### Running API tests

Run Behat:

```
./bin/behat features/
```

Credits
-------

* Benjamin Chodoroff, @bnchdrff
* [KnpLabs/behat-webapi-demo](https://github.com/KnpLabs/behat-webapi-demo)

License
-------

Copyright 2013, Benjamin Chodoroff. This software is distributed under the terms of the GNU General Public License.
