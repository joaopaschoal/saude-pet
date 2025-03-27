#!/bin/sh
docker run -d --name db-saude-pet \
  -e POSTGRES_USER=saude-pet \
  -e POSTGRES_DB=saude-pet \
  -e POSTGRES_PASSWORD=saude-pet \
  -v saude-pet:/var/lib/postgresql/data \
  -p 54321:5432 \
  postgres
