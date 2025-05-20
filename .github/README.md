# GitHub Workflows

This directory contains GitHub Actions workflows for the Rapid Content Management Framework.

## Code Quality Workflow

The `code-quality.yml` workflow runs on every push to the main/master branch and on every pull request. It performs the following checks:

1. **PHPStan** - Static analysis to find bugs and errors in your code
2. **PHP_CodeSniffer** - Checks if your code follows the Symfony coding standards

### Workflow Details

- Runs on Ubuntu latest
- Uses PHP 8.3
- Caches Composer dependencies for faster builds
- Installs the Symfony coding standard from GitHub
- Runs PHPStan with the configuration from `phpstan.neon`
- Runs PHP_CodeSniffer with the configuration from `phpcs.xml.dist`

## Tests Workflow

The `tests.yml` workflow runs on every push to the main/master branch and on every pull request. It performs the following:

1. **PHPUnit** - Runs all tests in the `tests` directory
2. **Code Coverage** - Generates code coverage reports and uploads them to Codecov

### Workflow Details

- Runs on Ubuntu latest
- Uses PHP 8.3 with Xdebug for code coverage
- Caches Composer dependencies for faster builds
- Runs PHPUnit with code coverage enabled
- Uploads coverage reports to Codecov

## Badges

You can add the following badges to your main README.md to show the status of your workflows:

```markdown
[![Code Quality](https://github.com/{username}/Rapid-Content-Management-Framework/actions/workflows/code-quality.yml/badge.svg)](https://github.com/{username}/Rapid-Content-Management-Framework/actions/workflows/code-quality.yml)
[![Tests](https://github.com/{username}/Rapid-Content-Management-Framework/actions/workflows/tests.yml/badge.svg)](https://github.com/{username}/Rapid-Content-Management-Framework/actions/workflows/tests.yml)
```

Replace `{username}` with your GitHub username.
