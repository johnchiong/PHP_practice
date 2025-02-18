<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h1>Word Frequency Counter</h1>
    
    <form action="process.php" method="post">
        <label for="text">Paste your text here:</label><br>
        <textarea id="text" name="text" rows="10" cols="50" required></textarea><br><br>
    
        <label for="sorting_order">Sort by frequency:</label>
        <select id="sorting_order" name="sorting_order">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select><br><br>
    
        <label for="display_limit">Number of words to display:</label>
        <input type="number" id="display_limit" name="display_limit" value="10" min="1"><br><br>
    
        <input type="submit" value="Calculate Word Frequency">
    </form>

</body>
</html>
