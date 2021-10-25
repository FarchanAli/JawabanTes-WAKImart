<?php
function is_anagram($a, $b)
{
    if (strlen($a) != strlen($b)) {
        // jika panjangnya tidak sama 
        return false;
    }

// Pengecekan apakah sama atau tidak
return (count_chars($a,1) == count_chars($b,1));

}

$anagrams = [
    // $a, $b, $is_valid_anagram
        ["ABC", "BAC", true],
        ["OKKO", "KKOO", true],
        ["MLAMA", "MAMAL", true],
        ["RWWUSEH", "HWURWES", true],
        ["ADFG", "AGF", false],
        ["ABC", "BCD", false],
        ["SAYA", "YASO", false],
];

foreach ($anagrams as $anagram) {
    [$a, $b, $is_valid_anagram] = $anagram;
    $result = is_anagram($a, $b);
    $result_message = $result ? " adalah anagram" : " adalah bukan anagram";
    // var_dump("[$a] dan [$b] $result_message");
    echo "<br>[$a] dan [$b] $result_message</br>";
}

?>