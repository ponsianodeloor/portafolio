kubectl -n portafolio create secret generic portafolio-secrets \
--from-env-file=./portafolio.env
