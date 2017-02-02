<?php
require 'vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\Credentials\CredentialProvider;

$ini = './credentials.ini';
$iniProvider = CredentialProvider::ini('development', $ini);
$iniProvider = CredentialProvider::memoize($iniProvider);

$client = new Aws\DynamoDb\DynamoDbClient([
    'version'     => 'latest',
    'region'      => 'us-east-1',
    'credentials' => $iniProvider
]);
$get_item_array['ConsistentRead'] = true;
$get_item_array['TableName'] = 'dev-lineTalk';
$get_item_array['Key']['id'] = array('S'=>'dfcecd20-e83d-11e6-bf43-7dc55ff52235');
$result = $client->getItem($get_item_array);
print_r($result);

