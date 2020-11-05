docker-compose up -d

echo "espera un tiempo para correr las migraciones de laravel ...."
sleep 2m
echo "ejecutando migraciones"
docker exec turnmyapp_backend_1 php artisan migrate
echo "si viste un error de migracion ejecuta el comando"
echo "docker exec turnmyapp_backend_1 php artisan migrate"