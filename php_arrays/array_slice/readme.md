# Funtion array_slice

## Description
```
Extract a slice of the array.

array_slice(array $array, int $offset, ?int $length = null, bool $preserve_keys = false): array

** array **
    The input array.

** offset **
    * If offset > 0, the sequence starts at that offset in the array;
    * If offset < 0, the sequence starts that far from the end of the array;

** length **
    * If length > 0, then the sequence will have up to that many elements in it;
    * If length < count(array), then only the available array elements will be present;
    * If length < 0, the sequence will stop that many elements from the end of the array;
    * If is omitted, then the sequence will have everything from offset up until the end of the array;

** preserve_keys **
    * String keys are always preserved, regardless of this parameter;
```