FROM node:12.16.1 AS build

WORKDIR /app

COPY package.json .
COPY package-lock.json .
RUN npm install

COPY . .
RUN npm run prod

FROM php:apache
COPY --from=build /app /var/www/html
