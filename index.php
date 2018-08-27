<?php
if (isset($_REQUEST['phrase'])) {
    file_put_contents('phrase.txt', $_REQUEST['phrase'] . PHP_EOL, FILE_APPEND);
}
print(file_get_contents('phrase.txt'));