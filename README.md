# Http Headers

## Description

Little methods collection in order to create http headers, for request responses, status codes, mime-types...etc

## How to use

### Status Codes
```
echo Codes::OK; //200
```

### Status Messages
```
echo Messages::OK; //OK
```
or 
```
echo Headers::getMessage(Codes::OK); //OK
```

### Extensions
```
echo Extensions::JS; //js
```


### Mime types
```
echo MimeTypes::HTML; //text/html
```

or

```
echo ContentType::get("/home/users/me/Donwloads/file.txt"); //text/plain
```