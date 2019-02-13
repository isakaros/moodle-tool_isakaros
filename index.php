<?php


require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

require_login();

$url = new moodle_url('/admin/tool/isakaros/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_title('iSakaros plugin');
$PAGE->set_heading(get_string('pluginname', 'tool_isakaros'));

echo $OUTPUT->header();
// echo $OUTPUT->heading('Select Users');
// $courseid=2;
echo get_string('name', 'tool_isakaros').'<br>';
// echo get_string('idcourse', 'tool_isakaros');



echo $OUTPUT->footer();