## 1
# Literie 3000

Projet de formation, permet une gestion du stock d'un magasin de literie. Site réservé à l'usage du personnel.

## Prérequis

- WampServer (inclut PHP, MySQL et Apache)
- Composer

## Installation

### 1. Cloner le projet
Pour récupérer le projet sur votre machine locale, utilisez la commande suivante (nécessite Git) :

git clone https://votre-repo/votre-projet.git
cd ECF

Vérifier que Wampserver utilise InnoDB en default storage Engine (MyIsam est mis par défaut, mais la clé étant trop longue, ne fonctionne pas).

Puis:

composer install

php -r "file_exists('.env') || copy('.env.example', '.env');"

Vérifier que le nom de la db corresponde bien avec le contenu du fichier .env

# Génére une clé pour l'application Laravel
php artisan key:generate
(création de la clée, à ajouter au fichier .env)

# Création de la db et migration
php artisan migrate
 et 
php artisan db:seed

# Lancement du server
php artisan serve
