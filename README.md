# househome
## househome ingatlanos weboldal

### K�rnyezeti v�ltoz� megad�sa a fejleszt�i k�rnyezetben:
- A virtual host be�ll�t�sn�l kell berakni a k�vetkez� sort (httpd-vhosts.conf file!): SetEnv ENVIRONMENT DEV

### Composer update
- Composer update elv�gz�se manu�lisan, hogy l�trej�jj�n a composer.lock file (.gitignore f�ljban szerepel ez�rt nincs repo l�trehoz�sa ut�n)
- (ha nem update-lesz, akkor csak sim�n m�sold �t az ingatlanok-hitelek composer.lock file-t)