# Http Headers

## Description

Little methods collection in order to create http headers, for request responses, status codes, mime-types...etc

## How to use

### Status Codes
```php
echo Codes::OK; //200
```

### Status Messages
```php
echo Messages::OK; //OK
```
or 
```php
echo Headers::getMessage(Codes::OK); //OK
```

### Extensions
```php
echo Extensions::JS; //js
```


### Mime types
```php
echo MimeTypes::HTML; //text/html
```

or

```php
echo ContentType::get("/home/users/me/Donwloads/file.txt"); //text/plain
```