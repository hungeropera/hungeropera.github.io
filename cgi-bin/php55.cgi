#!/bin/sh
export PHP_FCGI_CHILDREN=3
exec /hsphere/shared/php55/bin/php-cgi /home/homegrownchode/hungeropera.com/cgi-bin/php.ini