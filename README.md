# Swagger PHP Model Generator

Generates simple models with no dependencies from a Swagger/Open API 2.0 file

#Install
 
clone this repo

Install using composer is not yet ready in future versions it may be like: 

```sh
composer require oxid-professional-services/swagger-php-model-generator
```

Run with:

```php

$generator = new SwaggerGen\GenerateAll('MyNamespace', '/path/to/api.json', '/path/to/library/src/');
echo $generator->saved_models.' - '.$generator->saved_requests;
```

Or run simply from this repo using:

```sh
 php example.php --swagger-file ../paypal-client/Catalog.json  --namespace "OxidProfessionalServices\PayPal\Api\Catalog" --dir ../paypal-client/src/Catalog 
```



