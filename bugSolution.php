```php
<?php
$arr = [];
$arr['10'] = 'ten';
$arr['10.0'] = 'ten point zero';
$arr['10'] = 'ten as string'; //This will overwrite the previous value

echo "Count: " . count($arr) . "\n"; // Outputs 2, not 3
print_r($arr);
//Output:
//Array
//(
//    ['10'] => ten as string
//    ['10.0'] => ten point zero
//)
?>
```