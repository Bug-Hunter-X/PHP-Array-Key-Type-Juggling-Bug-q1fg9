# PHP Array Key Type Juggling Bug

This repository demonstrates a subtle bug in PHP related to how it handles array keys.  When a numeric key is used, PHP will implicitly convert it to a string.  This can lead to unexpected behavior, especially if multiple keys cast to the same string representation.  The `bug.php` file showcases this issue; the `bugSolution.php` file offers a corrected approach.

## Problem

PHP's loose typing can cause unexpected results when dealing with array keys.  If you use numeric keys that cast to the same string (e.g., `10`, `10.0`, `'10'`), only one value will be stored. 

## Solution

The best solution is to always use string keys explicitly when there's potential ambiguity. This prevents PHP's type juggling from causing unexpected key collisions.