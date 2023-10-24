<?php
require __DIR__ . "/vendor/autoload.php";

use App\Model\User;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];
$serializer = new Serializer($normalizers, $encoders);

$user = new User();
$user->setName('Jonny');
$user->setAge(55);

$jsonContent = $serializer->serialize($user, 'json');

print_r($jsonContent);

$data = <<<EOF
<user>
    <name>foo</name>
    <age>99</age>
</user>
EOF;

$user = $serializer->deserialize($data, User::class, 'xml');
print_r($user);