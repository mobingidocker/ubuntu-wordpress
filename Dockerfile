FROM ubuntu:14.04
MAINTAINER david.siaw@mobingi.com

RUN apt-get update
RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor

RUN apt-get install -y openssh-server
RUN mkdir -p /var/run/sshd

RUN apt-get install -y apache2
RUN mkdir -p /var/lock/apache2 /var/run/apache2

RUN apt-get install -y php5 libapache2-mod-php5
RUN a2enmod rewrite

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY config /config

RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz
RUN cp -r wordpress/* /var/www/html

COPY wp-config.php /var/www/html/wp-config.php

EXPOSE 22 80
CMD ["/usr/bin/supervisord"]

