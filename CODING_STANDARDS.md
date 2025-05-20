# Coding Standards

This project follows the [Symfony Coding Standards](https://symfony.com/doc/current/contributing/code/standards.html).

## PHP CodeSniffer

PHP CodeSniffer is used to check and fix coding standards violations.

### Installation

The PHP CodeSniffer and Symfony coding standard are already installed as development dependencies:

```bash
composer require --dev squizlabs/php_codesniffer
```

The Symfony coding standard is installed from GitHub:

```bash
git clone https://github.com/djoos/Symfony-coding-standard.git vendor/symfony-coding-standard
vendor/bin/phpcs --config-set installed_paths vendor/symfony-coding-standard
```

### Usage

The following Composer scripts are available:

- `composer cs-check`: Check coding standards
- `composer cs-fix`: Fix coding standards
- `composer analyse`: Run static analysis with PHPStan
- `composer test`: Run PHPUnit tests
- `composer check-all`: Run all checks (coding standards, static analysis, and tests)

#### Examples

Check a specific file:

```bash
composer cs-check -- src/Bearwulf/RCMF/DataLayer/DataLayer.php
```

Fix a specific file:

```bash
composer cs-fix -- src/Bearwulf/RCMF/DataLayer/DataLayer.php
```

Check the entire codebase:

```bash
composer cs-check
```

### Configuration

The PHP CodeSniffer configuration is stored in `phpcs.xml.dist`. This file defines:

- The coding standard to use (Symfony)
- The files to check
- The files to exclude
- Custom rule configurations

## Key Coding Standards

Some key aspects of the Symfony coding standards:

1. **License Header**: All PHP files must have a license header.
2. **Yoda Conditions**: Use Yoda conditions when checking a variable against an expression.
3. **Spacing**: No spaces around concatenation operators.
4. **Annotations**: Group annotations together by type.
5. **Line Endings**: Files must end with a newline.

For more details, see the [Symfony Coding Standards](https://symfony.com/doc/current/contributing/code/standards.html).
