# Barlito

php bin/console server:run    // demarre le server

php bin/console doctrine:schema:update --force  // met à jour la base par rapport au entities

php bin/console doctrine:generate:entities AppBundle:Client  // genere les getter/setter

php bin/console assets:install web --symlink // met à jours les ccs, js...