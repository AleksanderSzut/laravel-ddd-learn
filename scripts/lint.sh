#!/usr/bin/env bash
set -eo pipefail

# Migrate database
docker exec -it laravel-ddd-example.kanban-api composer lint
