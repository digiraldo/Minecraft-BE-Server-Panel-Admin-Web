<?php

// Usage
include 'UUID.php';

// Named-based UUID.
$v3uuid = UUID::v3('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');
$v5uuid = UUID::v5('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');

// Pseudo-random UUID
$v4uuid = UUID::v4();

?>

