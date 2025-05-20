# Rapid Content Management Framework

[![Code Quality](https://github.com/wimulkeman/Rapid-Content-Management-Framework/actions/workflows/code-quality.yml/badge.svg)](https://github.com/wimulkeman/Rapid-Content-Management-Framework/actions/workflows/code-quality.yml)
[![Tests](https://github.com/wimulkeman/Rapid-Content-Management-Framework/actions/workflows/tests.yml/badge.svg)](https://github.com/wimulkeman/Rapid-Content-Management-Framework/actions/workflows/tests.yml)

The Rapid Content Management Framework is meant to create webpages and their content with as
little additional coding needed as possible. To achieve this, there is a combination used of
template parsing and dynamic wizard steps to fill those templates.

Roadmap
-------

The following parts are planned for inclusion into this project:

v 0.1:

* Adding the ability to parse templates
* Creating a fast accessable webpage
* Creating the wizard for filling in a webpage
* Adding a routing structure

v 0.2:

* Adding support for global settings
* Adding menu structure support
* Adding multiple images support

v 0.3:

* Reading needed image sizes from the templates
* Detecting changes in the image sizes
* Detecting template changes

## Development

### Code Quality

This project uses PHPStan for static analysis and PHP_CodeSniffer with the Symfony ruleset for coding standards. These tools are automatically run on every push to the main branch and on every pull request through GitHub Actions.

#### Running Code Quality Checks Locally

You can run the code quality checks locally using the following Composer scripts:

```bash
# Run PHP_CodeSniffer
composer cs-check

# Fix coding standards automatically where possible
composer cs-fix

# Run PHPStan static analysis
composer analyse

# Run all checks (coding standards, static analysis, and tests)
composer check-all
```

### Running the Application

You can run the application locally using PHP's built-in web server:

```bash
# Start the server with the router script
php -S localhost:8000 -t web/ web/router.php
```

Then open your browser and navigate to `http://localhost:8000`.