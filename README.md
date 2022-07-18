# Dummy PHP

Given a positive sorted array

a = [ 3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21 ];

Define a function f(a, x) that returns x, the next smallest number, or -1 for errors.

Hint: f(a, 13) = 12       // smaller number found

## Start

Start with docker

```
docker run --rm -v $(pwd):/app -w /app php:cli php test.php
```
