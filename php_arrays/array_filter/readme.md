# Funtion array_filter

## Description
```
Filter elements of an array using a callback function.

array_filter(array $array, ?callable $callback = null, int $mode = 0): array

- Iterates over each value in the array passing them to the callback function. If the callback function return true, the current value from array is returned into the result array.

**array**
The array to iterate over.

**callback**
The function callback.

**mode**
    - ARRAY_FILTER_USE_KEY => pass only the key to the callback;
    - ARRAY_FILTER_USE_BOTH => pass both value and the key to the callback;
```