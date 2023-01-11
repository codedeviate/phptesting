# PHP CLI Testing
```diff
- THIS IS A TEST PROJECT NOT INTENDED FOR PRODUCTION USE.
```

A testing environment for CLI on most of the recent PHP versions and some older ones as well.

It also provides an external port so that browser testing can be done as well.

The internal port is 80 for all sub-environments. The respective external port can be found [here](#exposed-ports)

## package.json???
Just to mess with some purists we've used npm.

## Usage
### Build
npm style
```bash
# npm run build
```
Docker style
```bash
# docker-compose build
```
### Start
npm style
```bash
# npm run start
```
Docker style
```bash
# docker-compose down && docker-compose up -d
```
### Stop
npm style
```bash
# npm run stop
```
Docker style
```bash
# docker-compose down
```
### Restart
npm style
```bash
# npm run restart
```
Docker style
```bash
# docker-compose restart
```
### Logs
npm style
```bash
# npm run logs
```
Docker style
```bash
# docker-compose logs -f
```

## Alpine
The use of Alpine as a Linux distribution is primarily to reduce the size of the project. There are currently 10 PHP environments that run simultaneously in this project. So size and efficiency really matter.

Another reason is of course, that there is a standard Docker image with PHP bundled with Alpine that makes the choice much simpler.

Older versions of PHP that doesn't have any standard Docker image can have unofficial builds or the build will be done within this project.

## Supported PHP versions
The support for PHP in the different version is at the moment basic but will be extended to a useful level.

### PHP 8.2
Version:
* PHP 8.2.1 [^1]
* Alpine 3.17.1 [^2]

### PHP 8.1
Version:
* PHP 8.1.14 [^1]
* Alpine 3.17.1 [^2]

### PHP 8.0
Version:
* PHP 8.0.27 [^1]
* Alpine 3.16.3 [^2]

### PHP 7.4
Version:
* PHP 7.4.33 [^1]
* Alpine 3.16.3 [^2]

### PHP 7.3
Version:
* PHP 7.3.33 [^1]
* Alpine 3.15.1 [^2]

### PHP 7.2
Version:
* PHP 7.2.34 [^1]
* Alpine 3.12.3 [^2]

### PHP 7.1
Version:
* PHP 7.1.33 [^1]
* Alpine 3.10.3 [^2]

### PHP 7.0 
Version:
* PHP 7.0.33 [^1]
* Alpine 3.7.1 [^2]

### PHP 5.6
Version:
* PHP 5.6.40 [^1]
* Alpine 3.8.2 [^2]

## Versions in progress
### PHP 5.5
Version:
* PHP 5.5.38 [^1]
* Alpine 3.4.0 [^2]

This version has not all PHP modules added yet.

It runs and answers on the exposed port but lacks some features.

## Not yet supported

### PHP versions
* PHP 5.4
* PHP 5.3
* PHP 5.2
* PHP 5.1
* PHP 5.0

Which version will be supported is more of a work in progress. The list is to be considered a wish list.

## Exposed ports
Each PHP service has a port exposed. The port used is 10000 plus the PHP version multiplied by 100. (The first attempt at this was to multiply by 10. But then PHP 8.0 would have port 10080 and that was considered unsafe by browsers.)

| Version | Port  |
| ------- | ----- |
| 8.2     | 10820 |
| 8.1     | 10810 |
| 8.0     | 10800 |
| 7.4     | 10740 |
| 7.3     | 10730 |
| 7.1     | 10710 |
| 7.0     | 10700 |
| 5.6     | 10560 |
| 5.5     | 10550 |

## Enter terminal

### PHP 8.2
npm style
```bash
# npm run enter:php82
```
Docker style
```bash
# docker exec -it phptesting-php82-1 ash
```

### PHP 8.1
npm style
```bash
# npm run enter:php81
```
Docker style
```bash
# docker exec -it phptesting-php81-1 ash
```
### PHP 8.0
npm style
```bash
# npm run enter:php80
```
Docker style
```bash
# docker exec -it phptesting-php80-1 ash
```
### PHP 7.4
npm style
```bash
# npm run enter:php74
```
Docker style
```bash
# docker exec -it phptesting-php74-1 ash
```
### PHP 7.3
npm style
```bash
# npm run enter:php73
```
Docker style
```bash
# docker exec -it phptesting-php73-1 ash
```
### PHP 7.2
npm style
```bash
# npm run enter:php72
```
Docker style
```bash
# docker exec -it phptesting-php72-1 ash
```

### PHP 7.1
npm style
```bash
# npm run enter:php71
```
Docker style
```bash
# docker exec -it phptesting-php71-1 ash
```

### PHP 7.0
npm style
```bash
# npm run enter:php70
```
Docker style
```bash
# docker exec -it phptesting-php70-1 ash
```
### PHP 5.6
npm style
```bash
# npm run enter:php56
```
Docker style
```bash
# docker exec -it phptesting-php56-1 ash
```
### PHP 5.5
npm style
```bash
# npm run enter:php55
```
Docker style
```bash
# docker exec -it phptesting-php55-1 ash
```

## Used and alternative distributions
All versions are based on official PHP docker images with an Alpine distribution.

PHP 8.2, PHP 8.1, PHP 8.0, and PHP 7.4 each have a Dockerfile that uses the standard distribution used by PHP (Debian based) that can be used by altering *docker-composer.yml*.

PHP 5.5 and earlier doesn't have any official docker images based on Alpine. We might add these later.

## Footnotes
[^1]: The stated PHP version is the version available when the versions were checked. The version is subject to change.
[^2]: The version for Alpine is based on the version available from the Docker image provided from the source used. The version is subject to change.