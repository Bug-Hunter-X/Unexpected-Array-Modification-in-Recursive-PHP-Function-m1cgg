```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate long strings
    }
  }
  return $data;
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