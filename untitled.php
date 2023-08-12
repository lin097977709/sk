<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Scraping Example</title>
</head>
<body>
    <?php
    // URL of the webpage to scrape
    $url = 'htttp://www.xvideos.com';

    // Get the webpage content
    $webpageContent = file_get_contents($url);

    // Regular expression patterns to extract title and description
    $titlePattern = '/<title>(.*?)<\/title>/';
    $descriptionPattern = '/<meta name="description" content="(.*?)">/';

    // Perform regex matching
    preg_match($titlePattern, $webpageContent, $titleMatches);
    preg_match($descriptionPattern, $webpageContent, $descriptionMatches);

    // Extract title and description from matches
    $title = isset($titleMatches[1]) ? $titleMatches[1] : 'Title not found';
    $description = isset($descriptionMatches[1]) ? $descriptionMatches[1] : 'Description not found';

    // Display scraped data
    echo '<h1>' . $title . '</h1>';
    echo '<p>' . $description . '</p>';
    ?>
</body>
</html>
