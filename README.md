# househome
## househome ingatlanos weboldal

### K�rnyezeti v�ltoz� megad�sa a fejleszt�i k�rnyezetben:
- A virtual host be�ll�t�sn�l kell berakni a k�vetkez� sort (httpd-vhosts.conf file!): SetEnv ENVIRONMENT DEV

### Composer update
1. megold�s: m�sold �t a m�sik projektb�l a composer.lock file-t �s vendor mapp�t
2. megold�s: Composer update elv�gz�se (composer.json alapj�n), hogy l�trej�jj�n a composer.lock file �s a vendor mappa