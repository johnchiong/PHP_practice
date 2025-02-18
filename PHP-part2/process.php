<?php
function stopwords($words) {
    $stopwords = ["i", "me", "my", "myself", "we", "our", "ours", "ourselves", 
    "you", "your", "yours", "yourself", "yourselves", "he", "him", "his", 
    "himself", "she", "her", "hers", "herself", "it", "its", "itself", "they", 
    "them", "their", "theirs", "themselves", "what", "which", "who", "whom", "this", 
    "that", "these", "those", "am", "is", "are", "was", "were", "be", "been", "being", 
    "have", "has", "had", "having", "do", "does", "did", "doing", "a", "an", "the", "and", 
    "but", "if", "or", "because", "as", "until", "while", "of", "at", "by", "for", "with", 
    "about", "against", "between", "into", "through", "during", "before", "after", "above", 
    "below", "to", "from", "up", "down", "in", "out", "on", "off", "over", "under", "again", 
    "further", "then", "once", "here", "there", "when", "where", "why", "how", "all", "any", 
    "both", "each", "few", "more", "most", "other", "some", "such", "no", "nor", "not", "only", 
    "own", "same", "so", "than", "too", "very", "s", "t", "can", "will", "just", "don", "should", "now"];

    return array_filter($words, function($word) use ($stopwords) {
        return !in_array(strtolower($word), $stopwords); // Case-insensitive check
    });
}
function tokenizeText($text) {
    $text = strtolower($text); // Convert to lowercase
    $text = preg_replace('/[^\w\s]/', '', $text); // Remove punctuation
    $words = explode(" ", $text); // Split into words
    return array_filter($words, function($word) {
        return !empty($word);
    });
}

function countWordFrequency($words) {
    return array_count_values($words);
}

function sortWordsByFrequency($wordFrequencies, $order) {
    if ($order === 'asc') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }
    return $wordFrequencies;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    $sortingOrder = $_POST['sorting_order'];
    $displayLimit = $_POST['display_limit']; 

    $words = tokenizetext($inputText);
    $filteredWords = stopwords($words);
    $wordFrequencies = countWordFrequency($filteredWords);
    $sortedWords = sortwordsbyfrequency($wordFrequencies, $sortingOrder);

    echo "<h2>Word Frequency Results</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Word</th><th>Frequency</th></tr>";

    $count = 0;
    foreach ($sortedWords as $word => $frequency) {
        if ($count >= $displayLimit) break;
        echo "<tr><td>$word</td><td>$frequency</td></tr>";
        $count++;
    }

    echo "</table>";
}
?>