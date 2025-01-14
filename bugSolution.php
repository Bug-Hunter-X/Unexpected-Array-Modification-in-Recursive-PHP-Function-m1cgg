```php
function processData(array $data): array {
  return array_map(function ($value) {
    if (is_array($value)) {
      return processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
      return substr($value, 0, 10); // Truncate long strings
    } else {
      return $value; //Return other data types as they are
    }
  }, $data);
}

$input = [
  "name" => "John Doe",
  "address" => [
    "street" => "123 Main Street, Cityville, State 12345, Country",
    "zip" => "12345"
  ],
  "description" => "This is a very long description that exceeds the 10 character limit."
];

$output = processData($input);
print_r($output);
```