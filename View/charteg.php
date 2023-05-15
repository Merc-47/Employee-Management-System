<?php
$videoUrls = file('video-urls.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($videoUrls as $videoUrl) {
    echo '<video controls>';
    echo '<source src="' . $videoUrl . '">';
    echo '</video>';
}
?>