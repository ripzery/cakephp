<h2>Weather</h2>

<?php

echo "<h3><a href='" . $jdata->query->results->channel->item->link . "'>"

    . $jdata->query->results->channel->item->title . "</a></h3>";

echo "<p>" . $jdata->query->results->channel->item->description . "</p>";

?>