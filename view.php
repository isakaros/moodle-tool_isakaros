<?php


require_once(__DIR__ . '/../../../config.php');
$url = new moodle_url('/admin/tool/isakaros/view.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_title('Hello to the');
$PAGE->set_heading(get_string('pluginname', 'tool_isakaros'));

echo get_string('name', 'tool_isakaros');