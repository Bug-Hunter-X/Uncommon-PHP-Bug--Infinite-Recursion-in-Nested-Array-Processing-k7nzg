```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, 'Error') !== false) {
      // Handle error strings
      $data[$key] = str_replace('Error', 'Problem', $value);
    }
  }
  return $data;
}

$data = [
  'field1' => 'Some data',
  'field2' => [
    'subfield1' => 'Error: This is an error',
    'subfield2' => 'More data'
  ],
  'field3' => 'Another error: Error here'
];

$processedData = processData($data);
print_r($processedData);
```