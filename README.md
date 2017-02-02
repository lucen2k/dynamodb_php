# dynamodb_php

AWS DynamoDB on PHP

### aws sdk install
```php composer.phar require aws/aws-sdk-php```
or
```composer require aws/aws-sdk-php```

### CredentialProvider
* credentials.ini
```
[development]
aws_access_key_id = YOUR_AWS_ACCESS_KEY_ID
aws_secret_access_key = YOUR_AWS_SECRET_ACCESS_KEY
```

### check
```php -f index.php```

### execution result
```
$ php -f index.php 
Aws\Result Object
(
    [data:Aws\Result:private] => Array
        (
            [Item] => Array
                (
                    [fromMsg] => Array
                        (
                            [S] => hello
                        )

                    [updatedUtc] => Array
                        (
                            [S] => 2017-02-01T05:18:32.691Z
                        )

                    [replyToken] => Array
                        (
                            [S] => 5f4909fb9faa4f2c8dd0a874e576f
                        )

                    [sendMsg] => Array
                        (
                            [S] => hello lucen
                        )

                    [id] => Array
                        (
                            [S] => dfcecd20-e83d-11e6-bf43-7dc55ff52
                        )

                )
                ...
```