FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

# Railway/Render inject a PORT env var at runtime; point Apache at it.
CMD sh -c "sed -i \"s/80/\${PORT:-80}/g\" /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf && apache2-foreground"
