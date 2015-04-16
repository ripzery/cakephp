<?php

$paging = isset($this->Paginator->options['url']) ? $this->Paginator->options['url'] : null;

$formatted = array(
	'user' => $user['Users']['username'],
	'list' => array(),
	'paging' => $paging,
);
foreach ($user['Item'] as $item) {
	$formatted['list'][] = $item['name'];
}

echo json_encode($formatted);
