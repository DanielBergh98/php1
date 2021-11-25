<?php
$suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
$cards = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');

$deck = pc_array_shuffle(range(0, 51));

while (($draw = array_pop($deck)) != NULL) {
    print  $cards[$draw / 4] . ' of ' . $suits[$draw % 4] . "\n";
}

?>