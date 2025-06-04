# sandbox-drupal-module

[![Build Status](https://github.com/RumenDamyanov/sandbox-drupal-module/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-drupal-module/actions?query=branch%3Amaster)
[![codecov](https://codecov.io/gh/RumenDamyanov/sandbox-drupal-module/branch/master/graph/badge.svg)](https://codecov.io/gh/RumenDamyanov/sandbox-drupal-module)
[![PHPStan](https://github.com/RumenDamyanov/sandbox-drupal-module/actions/workflows/phpstan.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-drupal-module/actions?query=workflow%3APHPStan)

This is a minimal example Drupal 10 custom module with automated tests and GitHub Actions integration for CI and code coverage.

- Example functionality in `src/`
- PHPUnit tests in `tests/`
- CI and coverage badges above
- PHPStan static analysis badge above

## Usage

Place this module in `web/modules/custom/example_module` of a Drupal 10 site and enable it.

## Testing

Tests run automatically on push to the master branch. To run locally:

```sh
composer test
```

## Static Analysis

PHPStan runs automatically in CI. To run locally:

```sh
composer analyze
```
