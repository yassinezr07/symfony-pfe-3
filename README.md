<strong>Steps to run the project </strong>

1: composer install <br>
2: php bin/console doctrine:database:create <br>
3: php bin/console doctrine:schema:update --force <br>
4: php bin/console doctrine:fixtures:load --append --group=user <br>
5: symfony serve (symfony cli should be installed) 