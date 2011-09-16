<?php
	include('header.php');
	include('datamodels/SpeakerFactory.php');

	$speakerID = isset($_GET['sid']) ? $_GET['sid'] : -1;
	$isAjax = isset($_GET['ajax']) ? $_GET['ajax'] : false;

	$speaker = SpeakerFactory::retrieveSpeakerByID($speakerID);

	if($speaker) {
		if($isAjax) {
			echo $speaker->getJsonObject();
		} else {
			createFullPage($speaker);
		}
		exit;
	} else {
		if($isAjax) {
			echo json_encode(array('error' => 'Invalid SpeakerID'));
		} else {
			header('Location: /speakers.php');
		}
	}

	function createFullPage($speaker) {
		include('speaker_full_page.php');
	}



