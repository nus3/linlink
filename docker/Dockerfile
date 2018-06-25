FROM amazonlinux:2

LABEL maintainer "yhada"

RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm

RUN yum update -y

RUN yum install -y \
    initscripts \
    sudo \
    git \
    zip \
    unzip \
    tar \
    httpd \
    wget \
    less \
    libxslt \
    automake \
    autoconf \
    mysql \
    libmcrypt \
    libtool-ltdl \
    which \
    gcc gcc-c++

# php7.2 nginx install
RUN amazon-linux-extras install php7.2 nginx1.12

RUN yum install -y --disablerepo=amzn-main,amzn-updates --enablerepo=remi,remi-php72 \
    php-devel \
    php-mbstring \
    php-xml

RUN rm -f /etc/nginx/default.d/php.conf
RUN chown -R root:nginx /var/log/nginx
RUN chmod -R 770 /var/log/nginx/

RUN useradd docker

RUN systemctl enable nginx.service
RUN systemctl enable php-fpm.service

CMD ["systemctl", "start", "nginx.service"]
CMD ["systemctl", "start", "php-fpm.service"]