# Boutique

## Instalation 

- Placer le dossier boutique dans Homestead/code
- Editer Homestead.yaml
- Ajouter dans site :
  
  ```
  - map: boutique.test
    to: /home/vagrant/code/boutique/public
  ```
- Ajouter dans database : 
  ```
  - boutique
  ```

### Configuration de la base de données

- Ajouter dans .env :
  
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=boutique
  DB_USERNAME=root
  DB_PASSWORD=secret
  ```
### Alimentation de la base de données 

- Exécuter ces commandes pour alimenter la base de données :

  ```
  php artisan db:seed --class=VenteSeeder
  php artisan db:seed --class=ProduitSeeder
  php artisan db:seed --class=MarqueSeeder
  ```
