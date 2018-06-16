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