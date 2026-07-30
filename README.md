# Forpro x Qualife Backend - Kirby CMS

A content management platform built with Kirby CMS (v5), running on PHP 8.4 with Apache in a Docker environment.

## Local Development (docker-compose)

1. `git clone https://github.com/studio-guez/forpro_x_qualife.git`
1. `cd forpro_x_qualife.cms/`
1. Copy and fill in the environment secrets:

```bash
cp .env.example.php .env.php
# then edit .env.php and set content.salt and cookie.key
# generate values with: docker exec cms-app php -r "echo bin2hex(random_bytes(32));"
```

4. _Vérifier config, surtout conflits ports dans_ `docker-compose.yml`
1. Build and run with your user's UID/GID:

```bash
docker-compose up -d --build
```

5. Fix permissions for writable directories (first time only):

```bash
docker exec forpro_x_qualifecms-app-1 chown -R www-data:www-data /var/www/html/site/sessions /var/www/html/site/accounts /var/www/html/media /var/www/html/content
```

This mounts the entire project and runs Apache with your local user permissions (UID 1000), so you can edit files directly from VS Code or terminal without permission issues.

## Production (Dockerfile only)

For production, use the standard `Dockerfile` which copies files and sets `www-data` ownership:

```bash
docker build -t forpro-qualife-cms .
docker run -d -p 80:80 forpro-qualife-cms
```

## Updating dependencies (Composer)

Composer is not installed in the app image. Use the official Composer Docker image against the project directory:

```bash
docker run --rm -v $(pwd):/app composer:latest update --ignore-platform-req=ext-gd
```

> `--ignore-platform-req=ext-gd` is required because the Composer image lacks the GD extension; it is present in the actual app image.

To check for security advisories without updating:

```bash
docker run --rm -v $(pwd):/app composer:latest audit
```

## Sync content from production

Pull the `content` folder from the remote server:

```bash
rsync -avz --delete n18gob_oplus@n18gob.ftp.infomaniak.com:/home/clients/a582a3f37b5cd510ead76826a1cfe200/sites/cms.rendezvousdesformateurs.ch/content/ ./content
```

## Default access URLs (with default ports)

- **Admin Panel**: http://localhost:8080

