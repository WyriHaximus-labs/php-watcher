## 0.4.2 (2019-10-18)
* Fix: Make script argument required via cli [#36](https://github.com/seregazhuk/php-watcher/pull/36)
* Fix: Move symfony process to dev dependencies [#34](https://github.com/seregazhuk/php-watcher/pull/34) 
* Fix: improvements in spinner rendering [#32](https://github.com/seregazhuk/php-watcher/pull/32)

## 0.4.1 (2019-10-15)
* Fix: CLI empty options override values from config file [#30](https://github.com/seregazhuk/php-watcher/pull/30)

## 0.4.0 (2019-10-15)
* Fix: allow to listen to signals when running inside the docker container [#27](https://github.com/seregazhuk/php-watcher/pull/27)
* Feature: send custom signals to restart the app [#27](https://github.com/seregazhuk/php-watcher/pull/27)

## 0.3.1 (2019-10-10)
* Fix: autoload path inside watcher.php fixed for composer project
 installation  ([#16](https://github.com/seregazhuk/php-watcher/pull/16)) by [gorbunov](https://github.com/gorbunov)
* Fix: custom spinner implementation ([#19](https://github.com/seregazhuk/php-watcher/pull/19))   
* Fix: restore screen cursor when interrupting the script ([#20](https://github.com/seregazhuk/php-watcher/pull/20)) 

## 0.3.0 (2019-10-08)

* Feature: add spinner to output ([#11](https://github.com/seregazhuk/php-watcher/pull/11))
* Feature / BC break: move to PHP 7.2 ([#11](https://github.com/seregazhuk/php-watcher/pull/11))
* Fix: make it truly async ([#10](https://github.com/seregazhuk/php-watcher/pull/10))

## 0.2.0 (2019-10-04)

* Feature: allow to specify config file via CLI option ([#6](https://github.com/seregazhuk/php-watcher/pull/6))
* Fix: default CLI options override config values ([#2](https://github.com/seregazhuk/php-watcher/pull/4))

## 0.1.0 (2019-10-03)

* First tagged release
