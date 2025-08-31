Before creating the secret, set `APP_KEY` in `portafolio.env` with a value
generated via `php artisan key:generate --show`.

Then create the secret:

```bash
kubectl -n portafolio create secret generic portafolio-secrets \
  --from-env-file=./portafolio.env
```
