## CakePHP Multiple Test Database Demo

Demo application using multiple databases, tests and fixtures.

There are two application connections (default, other) and two test connections (test, test_other). The Articles fixture goes to the `test` connection and the Comments fixture goes to `test_other`.

### Running tests

```
vendor/bin/phpunit --debug
```

The above will run tests with SQL logging enabled so you can see all the queries being generated.
