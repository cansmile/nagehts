#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(CDPATH= cd -- "$(dirname -- "$0")" && pwd)"
APP_ROOT="$(CDPATH= cd -- "$SCRIPT_DIR/.." && pwd)"
PHP_BIN="${PHP_BIN:-php}"
PHP_FPM_SERVICE="${PHP_FPM_SERVICE:-php8.4-fpm}"

if [ ! -f "$APP_ROOT/artisan" ]; then
  echo "Laravel artisan not found at $APP_ROOT/artisan" >&2
  echo "Run this from the nagehts production tree or set the script in /home/nagehts/dev." >&2
  exit 1
fi

cd "$APP_ROOT"

echo "[1/3] Clearing Laravel bootstrap caches"
"$PHP_BIN" artisan optimize:clear

echo "[2/3] Reloading PHP-FPM to refresh opcache: $PHP_FPM_SERVICE"
if command -v systemctl >/dev/null 2>&1; then
  sudo -n systemctl reload "$PHP_FPM_SERVICE"
  sudo -n systemctl is-active --quiet "$PHP_FPM_SERVICE"
elif command -v service >/dev/null 2>&1; then
  sudo -n service "$PHP_FPM_SERVICE" reload
else
  echo "No supported service manager found. Reload PHP-FPM manually." >&2
  exit 1
fi

echo "[3/3] Done. PHP-FPM opcache has been refreshed."
