# portafolio
Portafolio usando Laravel 9 y Boostrap

## Local development with Docker Compose

1. Copy the example environment file and generate an application key:
   ```bash
   cp .env.example .env
   docker compose run --rm php php artisan key:generate
   ```
2. Start the stack:
   ```bash
   docker compose up --build
   ```

This builds the PHP-FPM image (`ponwick/portafolio:php-fpm`) and runs it behind an nginx server using the config at `docker/nginx/default.conf`. The compose file preserves the image's `vendor` directory, while the `.env` file comes from your working copy.

## Kubernetes deployment

1. **Build and push the image**
   ```bash
   docker build -t <registry>/portafolio:php-fpm .
   docker push <registry>/portafolio:php-fpm
   ```
2. **Create the namespace**
   ```bash
   kubectl apply -f k8s/001-namespaces/namespace-portafolio.yaml
   ```
3. **Load TLS certificates**
   ```bash
   kubectl -n portafolio create secret tls tls-k8s-ponsianodeloor-dev \
     --cert=k8s/004-cert/www_k8s-ponsianodeloor_dev.pem \
     --key=k8s/004-cert/www_k8s-ponsianodeloor_dev.key
   ```
4. **Create application secrets**
   Fill `APP_KEY` in `k8s/005-secrets/portafolio.env` with a value generated via
   `php artisan key:generate --show` and then run:
   ```bash
   kubectl -n portafolio create secret generic portafolio-secrets \
     --from-env-file=k8s/005-secrets/portafolio.env
   ```
5. **Deploy the application and service**
   ```bash
   kubectl apply -f portafolio.yaml
   ```
6. **Configure the Ingress**
   ```bash
   kubectl apply -f k8s/006-ingress-path-tls/ingress-portafolio.yaml
   ```

The Deployment uses a ConfigMap for the nginx configuration located at
`k8s/002-configmap/portafolio-nginx-conf.yaml`.
