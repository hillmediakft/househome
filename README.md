# househome
## househome ingatlanos weboldal

### Környezeti változó megadása a fejlesztõi környezetben:
- A virtual host beállításnál kell berakni a következõ sort (httpd-vhosts.conf file!): SetEnv ENVIRONMENT DEV

### Composer update
1. megoldás: másold át a másik projektbõl a composer.lock file-t és vendor mappát
2. megoldás: Composer update elvégzése (composer.json alapján), hogy létrejöjjön a composer.lock file és a vendor mappa