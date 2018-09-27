<?php 
function getName() {
	$ci =& get_instance();
	$id = $ci->session->userdata('id');
	$user = $ci->users->getId($id);
	return $user->name;
}

function getPosition() {
	$ci =& get_instance();
	$id = $ci->session->userdata('id');
	$user = $ci->users->getId($id);
	return $user->position;
}

function sortdata($a, $b) {
	$a = $a['ondate'];
	$b = $b['ondate'];

	print_r($a, $b);
	
	if ($a == $b) return 0;
	return ($a > $b) ? -1 : 1;
	/*return ($a < $b) ? -1 : 1; //asc*/
}
