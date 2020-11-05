#!/bin/bash
docker-compose up -d

echo "espera un tiempo para correr las migraciones de laravel ...."

x=120
while [ $x -gt 0 ]
do
    sleep 1s
    clear
    echo "$x esperando .."
    x=$(( $x -1 ))
done

echo "ejecutando migraciones"
docker exec turnmyapp_backend_1 php artisan migrate
echo "si viste un error de migracion ejecuta el comando"

echo "docker exec turnmyapp_backend_1 php artisan migrate"