# PHP CLI Testing
```diff
- THIS IS A TEST PROJECT NOT INTENDED FOR PRODUCTION USE.
```

A big testing environment for CLI on most of the recent php versions.

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
### Enter terminal
#### PHP 5.6
npm style
```bash
# npm run enter:php56
```
Docker style
```bash
# docker exec -it phptesting-php56-1 ash
```
#### PHP 7.0
npm style
```bash
# npm run enter:php70
```
Docker style
```bash
# docker exec -it phptesting-php70-1 ash
```
#### PHP 7.1
npm style
```bash
# npm run enter:php71
```
Docker style
```bash
# docker exec -it phptesting-php71-1 ash
```
#### PHP 7.2
npm style
```bash
# npm run enter:php72
```
Docker style
```bash
# docker exec -it phptesting-php72-1 ash
```
#### PHP 7.3
npm style
```bash
# npm run enter:php73
```
Docker style
```bash
# docker exec -it phptesting-php73-1 ash
```
#### PHP 7.4
npm style
```bash
# npm run enter:php74
```
Docker style
```bash
# docker exec -it phptesting-php74-1 ash
```
#### PHP 8.0
npm style
```bash
# npm run enter:php80
```
Docker style
```bash
# docker exec -it phptesting-php80-1 ash
```
#### PHP 8.1
npm style
```bash
# npm run enter:php81
```
Docker style
```bash
# docker exec -it phptesting-php81-1 ash
```
#### PHP 8.2
npm style
```bash
# npm run enter:php82
```
Docker style
```bash
# docker exec -it phptesting-php82-1 ash
```

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

## Not yet supported

### PHP versions
* PHP 5.5
* PHP 5.4
* PHP 5.3
* PHP 5.2
* PHP 5.1
* PHP 5.0

Which version will be supported is more of a work in progress. The list is to be considered a wish list.

## Exposed ports
Each PHP service has a port exposed. The port used is 10000 plus the PHP version multipled by 100. (The first attempt on this was to multiply by 10. But then PHP 8.0 would have the port 10080 and that port is considered unsafe by browsers.)

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

## Used and alternative distributions
All versions are based on official PHP docker images with an Alpine distribution.

PHP 8.2, PHP 8.1, PHP 8.0 and PHP 7.4 each have a Dockerfile that uses the standard distribution used by PHP (Debian based) that can be used by altering *docker-composer.yml*.

PHP 5.5 and earlier doesn't have any official docker images based on Alpine. We might add these later.