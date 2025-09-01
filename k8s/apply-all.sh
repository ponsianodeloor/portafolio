#!/usr/bin/env bash
set -euo pipefail

NS=portafolio

echo "Applying namespace..."
kubectl apply -f k8s/001-namespaces/namespace-portafolio.yaml

echo "Creating/updating app secret (env)..."
if [ -f k8s/005-secrets/portafolio.env ]; then
  kubectl -n "$NS" create secret generic portafolio-secrets \
    --from-env-file=k8s/005-secrets/portafolio.env \
    --dry-run=client -o yaml | kubectl -n "$NS" apply -f -
else
  echo "WARN: k8s/005-secrets/portafolio.env not found; skipping app secret"
fi

echo "Creating/updating TLS secret..."
if [ -f k8s/004-cert/www_k8s-ponsianodeloor_dev.pem ] && [ -f k8s/004-cert/www_k8s-ponsianodeloor_dev.key ]; then
  kubectl -n "$NS" create secret tls tls-k8s-ponsianodeloor-dev \
    --cert=k8s/004-cert/www_k8s-ponsianodeloor_dev.pem \
    --key=k8s/004-cert/www_k8s-ponsianodeloor_dev.key \
    --dry-run=client -o yaml | kubectl -n "$NS" apply -f -
else
  echo "WARN: TLS cert/key not found; skipping TLS secret"
fi

echo "Applying ConfigMap..."
kubectl -n "$NS" apply -f k8s/002-configmap/portafolio-nginx-conf.yaml

echo "Applying Deployment/Service..."
kubectl -n "$NS" apply -f portafolio.yaml

echo "Applying Ingress..."
kubectl -n "$NS" apply -f k8s/006-ingress-path-tls/ingress-portafolio.yaml

echo "Done. Resources applied to namespace '$NS'."
