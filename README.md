# DDEV Symfony Template

## Stack

- PHP 8.3
- Symfony 7
- Postgres 16
- Node LTS

## Symfony configuration

- Doctrine
- Form
- Security
- Mercure
- Twig
- Webpack (+ Stimulus)
- Maker
- Web Profiler

## Build

After creating your project with this template, in the project directory:

````bash
ddev start
````

Then the containers is running (you can check with `ddev describe`)

````bash
ddev ssh
````

And within the container:

````bash
composer i
npm i
npm run build
````

## Good to knows

Don't forget to edit these files before start:

- .ddev/config.yaml
- .ddev/docker-compose.mercure.yaml
- .env

⚠️ Do not change the DATABASE_URL, it's the default database configuration
