# PHP Rest API

Can return POST data when requested to `/` OR ```/simpleRequest.php```

## Start Server
```
php -S 127.0.0.1:8000 index.php
```

## Usage

```php

# Send a POST Request

curl --location --request POST 'http://localhost:8000/simpleRequest.php' \
--header 'Content-Type: text/plain' \
--data-raw '{
  "first_name":"John",
  "last_name":"Barrow",
  "email": "john.barrow@domain.net",
  "foo": "bar"
}'

# Output Returned
{"first_name":"John","last_name":"Barrow","email":"john.barrow@domain.net"}

```

## Note
This app behaves like a custom mini php framework which can parse Request, send Response and manage Routes.