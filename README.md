# Lumen PHP Framework

## Comandos

```bash
docker-compose up --build -d

# Usar apenas na inicialização do projeto
composer install

docker-compose exec app composer install

docker-compose exec app php artisan migrate

docker-compose exec app php artisan db:seed

# Comando de permissão caso necessário
sudo chown -R $USER:$USER . 

# Para Derrubar o Db
docker-compose down -v
```