Symfony documentation:
- [DoctrineFixturesBundle](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)

# Important commands
`php bin/console doctrine:fixtures:load`
- use `--append` to not delete database before inserting new fixtures, see this [docs](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html#loading-fixtures)
- use `--group GROUP` to load specific fixtures (fixtures class must implement the `FixtureGroupInterface`), see this [docs](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html#fixture-groups-only-executing-some-fixtures)
- Fixture can share data across multiple files see [docs](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html#sharing-objects-between-fixtures)