# ICFReader

## Read file from disk
You can easily read in an ICF-file stored on disk.

```php
    $reader = new \ICFReader\Reader($filepath);
    $result = $reader->read();
```

## Read data
If you want, you can also parse data from somewhere else than from disk.
For easy testing, the below example reads the file contents manually and then processes it.

```php
    $icf_file = file_get_contents($filepath); // or from somewhere else.
    
    $reader = new \ICFReader\Reader(''); //requires a filepath parameter, but not required for reading in from data.
    $data = $reader->toArray($icf_file);
    $result = $reader->format($data);
```
