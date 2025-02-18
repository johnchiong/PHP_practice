<?php
/**
 * Add each price of the item and return the result.
 * 
 * @param array $items is the array holding the item price.
 * @param float $total is the total price of item.
 * @return float The total price of the items inside the array.
 */
function get_total_price(array $items): float{
    $total = 0.00;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}
/**
 * Remove spaces and convert to lowercase of the input and return the result
 * 
 * @param string $input is the message given.
 * @return string The $input with removed spaces and lowercased.
 */
function modify_string(string $input): string{
    $input =  str_replace(' ', '', $input);
    $input = strtolower($input);
    return $input;
}
/**
 * Find the parity of the number if they are even or odd and display parity.
 * 
 * @param int $num is the number given.
 */
function get_parity(int $num): void{
    if ($num % 2 == 0) {
        echo "\nThe number ". $num . " is even.";
    } else {
        echo "\nThe number ". $num . " is odd.";
    }
}

$items = [
    ['name'=> 'Widget A', 'price' => 10],
    ['name'=> 'Widget B', 'price' => 15],
    ['name'=> 'Widget C', 'price' => 20],
];

$origMessage = "This is a poorly written program with little structure and readability.";
echo "The total price of the items are ". get_total_price($items). " PHP";

get_parity(42);
echo "\nModified string: ". modify_string($origMessage);
?>