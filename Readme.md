# Hoe start je het project?

- install php 8.1
- install composer
- install symfony cli om je leven makkelijker te maken
- run `composer install`

Vervang deze regel in de
.env `DATABASE_URL="mysql://username:password@127.0.0.1:3306/project-fedde-2020?serverVersion=8&charset=utf8mb4"`
- `php bin/console doctrine:database:create`
- `php bin/console doctrine:migrations:migrate`
- voer deze functie uit `symfony server:start`

Nu zou de webserver gestart moeten zijn.

- In de migrations folder staan de sql import scripts zodat je gelijk wat data hebt om mee te werken.
- Wanneer je deze wil inserten sluit de webserver af
- Daarna voer je een `npm install` gevolgd door `npm run watch` uit
- Start je de server weer met `symfony server:start`
