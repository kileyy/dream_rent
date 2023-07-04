FROM ryusoft/jammy-yii2:main

ARG USER_ID
ARG GROUP_ID

RUN userdel -f www-data &&\
    if getent group www-data ; then groupdel www-data; fi &&\
    groupadd -g 1000 www-data &&\
    useradd -l -u 1000 -g www-data www-data &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data &&\
    chown www-data:www-data -Rf /var/lib/php  &&\
    chown www-data:www-data -Rf /home/www-data

# Change document root for Apache
COPY ./site.conf /etc/apache2/sites-enabled/000-default.conf
WORKDIR /var/www/app