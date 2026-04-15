# Forpro x Qualife Backend - Kirby CMS

A content management platform built with Kirby CMS (v5), running on PHP 8.3 with Apache in a Docker environment.

## Local Development (docker-compose)

1. `git clone https://github.com/studio-guez/forpro_x_qualife.git`
1. `cd forpro_x_qualife.cms/`
1. _Vérifier config, surtout conflits ports dans_ `docker-compose.yml`
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

## Sync content from production

Pull the `content` folder from the remote server:

```bash
rsync -avz --delete n18gob_oplus@n18gob.ftp.infomaniak.com:/home/clients/a582a3f37b5cd510ead76826a1cfe200/sites/cms.rendezvousdesformateurs.ch/content/ ./content
```

## Default access URLs (with default ports)

- **Admin Panel**: http://localhost:8080

