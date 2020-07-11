<?php
$results=wp_remote_retrieve_body( wp_remote_get('https://api.nasa.gov/planetary/apod?api_key=GJ6Jvh1c8erMgH5edhmmQ538fNHcSbldUeAc68AK') );
echo '<pre>';
print_r($results);
echo '</pre>';

