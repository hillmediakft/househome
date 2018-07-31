# househome
## househome ingatlanos weboldal

### Környezeti változó megadása a fejlesztõi környezetben:
- A virtual host beállításnál kell berakni a következõ sort (httpd-vhosts.conf file!): SetEnv ENVIRONMENT DEV

### Composer update
- Composer update elvégzése manuálisan, hogy létrejöjjön a composer.lock file (.gitignore fáljban szerepel ezért nincs repo létrehozása után)
- (ha nem update-lesz, akkor csak simán másold át az ingatlanok-hitelek composer.lock file-t)