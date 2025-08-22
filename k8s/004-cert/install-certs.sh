# 1️⃣ Crear el secreto TLS para Ingress
kubectl -n portafolio create secret tls tls-k8s-ponsianodeloor-dev \
  --cert=www_k8s-ponsianodeloor_dev.pem \
  --key=www_k8s-ponsianodeloor_dev.key
