<?php
$deck =  [
    'Ace of Hearts' => 1,
    '2 of Hearts' => 2,
    '3 of Hearts' => 3,
    '4 of Hearts' => 4,
    '5 of Hearts' => 5,
    '6 of Hearts' => 6,
    '7 of Hearts' => 7,
    '8 of Hearts' => 8,
    '9 of Hearts' => 9,
    '10 of Hearts' => 10,
    'Jack of Hearts' => 10,
    'Queen of Hearts' => 10,
    'King of Hearts' => 10,
    'Ace of Spades' => 1,
    '2 of Spades' => 2,
    '3 of Spades' => 3,
    '4 of Spades' => 4,
    '5 of Spades' => 5,
    '6 of Spades' => 6,
    '7 of Spades' => 7,
    '8 of Spades' => 8,
    '9 of Spades' => 9,
    '10 of Spades' => 10,
    'Jack of Spades' => 10,
    'Queen of Spades' => 10,
    'King of Spades' => 10,
    'Ace of Clubs' => 1,
    '2 of Clubs' => 2,
    '3 of Clubs' => 3,
    '4 of Clubs' => 4,
    '5 of Clubs' => 5,
    '6 of Clubs' => 6,
    '7 of Clubs' => 7,
    '8 of Clubs' => 8,
    '9 of Clubs' => 9,
    '10 of Clubs' => 10,
    'Jack of Clubs' => 10,
    'Queen of Clubs' => 10,
    'King of Clubs' => 10,
    'Ace of Diamonds' => 1,
    '2 of Diamonds' => 2,
    '3 of Diamonds' => 3,
    '4 of Diamonds' => 4,
    '5 of Diamonds' => 5,
    '6 of Diamonds' => 6,
    '7 of Diamonds' => 7,
    '8 of Diamonds' => 8,
    '9 of Diamonds' => 9,
    '10 of Diamonds' => 10,
    'Jack of Diamonds' => 10,
    'Queen of Diamonds' => 10,
    'King of Diamonds' => 10
];

//var_dump($deck);
foreach  ($deck as $cards) {
    echo $cards .', ';
};

echo '<br>';echo '<br>';echo '<br>';echo '<br>';
/**
 * Shuffles all values of an array and pops two last values
 * @param $deck array array of integers (passed by reference to array $deck
 * @return int sum of values of two picked integers (cards)
 */
function PickACard (&$deck){
    $cardone = array_pop ($deck);
    $cardtwo = array_pop ($deck);
    return $cardone+$cardtwo;
};

echo 'Player 1';
echo '<br>';
echo 'Score: ';
shuffle ($deck);
$result1 = PickACard ($deck);
echo $result1;
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo 'Player 2';
echo '<br>';
echo 'Score: ';
$result2 = PickACard ($deck);
echo $result2;
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
/**
 * Compares sum of two cards of Player1 and sum of 2 cards of Player2 and picks a winner
 * or, if draw, echoes 'friendship wins'
 * @param $result1 int sum of 2 array_popped integers
 * @param $result2 int sum of 2 array_popped integer
 */
function PickAWinner ($result1, $result2){
    if ($result1<=21&&$result1>$result2) {
        echo 'Player 1 wins!';
    } elseif ($result1==$result2) {
        echo 'Friendship wins!';
    } else  {
        echo 'Player 2 wins!';
    };
};
$winner = PickAWinner ($result1, $result2);
echo $winner;








