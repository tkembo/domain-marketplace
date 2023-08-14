# Contributing to Domain Marketplace Add-on

First off, thank you for considering contributing to the Domain Marketplace Add-on! It's people like you that make this project a great tool. This document provides guidelines for contributing to the project.

## Code of Conduct

By participating in this project, you are expected to uphold our [Code of Conduct](CODE_OF_CONDUCT.md).

## How Can I Contribute?

### Reporting Bugs

- Before submitting a bug report, please check the issue tracker to ensure the bug hasn't already been reported.
- If you're unable to find an open issue addressing the problem, open a new one.
- Be sure to include a title and a clear description, as much relevant information as possible, and a code sample or executable test case demonstrating the expected behavior that is not occurring.

### Suggesting Enhancements

- Open a new issue with a clear list of your enhancement suggestions.
- Provide a clear and detailed explanation about why you believe the enhancement would be beneficial to the project.

### Pull Requests

- Fork the repository and create your branch from `main`.
- If you've added code that should be tested, add tests.
- Ensure the test suite passes.
- Issue that pull request!

## Development Setup

1. Fork the repository to your GitHub account.
2. Clone your fork to your local machine:
   ```bash
   git clone https://github.com/your-github-username/domain-marketplace.git
   ```

3. Navigate to the project directory:

   ```bash
   cd domain-marketplace
   ```

4. Install dependencies:

   ```bash
   composer install
   ```

5. Run tests to ensure everything is set up correctly:

   ```bash
   ./vendor/bin/phpunit --configuration tests/whmcs_module_phpunit.xml
   ```

   ## Styleguides
   ### Git Commit Messages
   - Use the present tense ("Add feature" not "Added feature").
   - Use the imperative mood ("Move cursor to..." not "Moves cursor to...").
   - Limit the first line to 72 characters or less.
   - Reference issues and pull requests liberally after the first line.

   ## PHP Styleguide
   Adhere to the [PSR-12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/).   
