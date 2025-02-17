The solution uses strict comparison (`===`) to ensure that both the type and value are the same.

```php
<?php
$a = "10";
$b = 10;
if ($a === $b) {
  echo "They are equal!";
} else {
  echo "They are not equal!";
}
?>
```

Now, the output will correctly be "They are not equal!" because the types are different.  Always use strict comparison when dealing with mixed types to prevent unexpected behavior.