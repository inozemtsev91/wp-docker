FROM nginx
MAINTAINER devtm91 <devtm91@gmail.com>

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY . ./