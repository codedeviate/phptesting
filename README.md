# phptesting
```diff
- THIS IS A TEST PROJECT NOT INTENDED FOR PRODUCTION USE.
```

A big testing environment for CLI on most of the recent php versions.

## Supported PHP versions
The support for PHP in the different version are at the moment basic but will be extended to a useful level.

### PHP 8.2
### PHP 8.1
### PHP 8.0
### PHP 7.4
### PHP 7.3
### PHP 7.2
### PHP 7.1
### PHP 7.0 
### PHP 5.6

## Planned support

### PHP versions
* PHP 5.5
* PHP 5.4
* PHP 5.3
* PHP 5.2
* PHP 5.1
* PHP 5.0
Which version will be supported is more of a work in progress. The list is more to be considered a wish list.

## Exposed ports
Each PHP service has a port exposed. The port used is 10000 plus the PHP version multipled by 10.

| Version | Port  |
| ------- | ----- |
| 8.2     | 10082 |
| 8.1     | 10081 |
| 8.0     | 10080 |
| 7.4     | 10074 |
| 7.3     | 10073 |
| 7.1     | 10071 |
| 7.0     | 10070 |
| 5.6     | 10056 |

## Used and alternative distributions
All versions are based on official PHP docker images with an Alpine distribution.

PHP 8.2, PHP 8.1, PHP 8.0 and PHP 7.4 each have a Dockerfile that uses the standard distribution used by PHP (Debian based) that can be used by altering *docker-composer.yml*.

PHP 5.5 and earlier doesn't have any official docker images based on Alpine. We might add these later.