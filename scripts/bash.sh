#!/usr/bin/env bash
set -eo pipefail

source "./etc/envs/commons.env"

# Enter container bash
docker exec -it laravel-ddd-example.kanban-api bash
