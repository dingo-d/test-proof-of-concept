# Proof of concept integration test example

Related WPSE question: https://wordpress.stackexchange.com/questions/330004/integration-testing-hook-callback-was-executed

# Setup

```bash
composer install
bash bin/install-wp-tests.sh wordpress_test root '' localhost latest
```

For integration test start run (without coverage)

```bash
composer pint
```

For integration test start run (without coverage)

```bash
composer pint-cov
```

