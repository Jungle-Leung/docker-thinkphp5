FROM composer:latest

RUN docker-php-ext-install pdo_mysql \
 	&& docker-php-ext-install mysqli

WORKDIR /home/www-data

#更改国内源
CMD composer config -g repo.packagist composer https://packagist.phpcomposer.com \

#更改权限
&& chmod -R 777 . \

#安装组件
&& composer install \

#数据迁移
&& ./think migrate:run \

&& echo "脚本执行完成"