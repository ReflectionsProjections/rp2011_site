<?php
include('Speaker.php');
class SpeakerFactory {

	public static function retrieveSpeakerByID($id) {
		$sanitizedID = DB::san($id);
		
		$query = "SELECT * FROM speakers WHERE id=" . $id;
		$result = DB::query($query, false);
		
		if(empty($result)) {
			return null;
		}
		
		$result = $result[0];
		$id = $result['ID'];
		$name = $result['NAME'];
		$bio = $result['BIO'];
		$jobTitle = $result['JOB_TITLE'];
		$affiliation = $result['AFFILIATION'];
		$photoURL = $result['PHOTO_URL'];
		return new Speaker($id, $name, $bio, $photoURL, $jobTitle, $affiliation);
	}
	
	public static function retrieveAllSpeakers() {
		
		$query = "SELECT * FROM speakers ORDER BY ordering";
		$result = DB::query($query);
		
		if(empty($result)) {
			return null;
		}

		
		$speakers = array();
		foreach($result as $r) {
			$id = $r['ID'];
			$name = $r['NAME'];
			$bio = $r['BIO'];
			$jobTitle = $r['JOB_TITLE'];
			$affiliation = $r['AFFILIATION'];
			$photoURL = $r['PHOTO_URL'];
			
			$speakers[] = new Speaker($id, $name, $bio, $photoURL, $jobTitle, $affiliation);
		}

		return $speakers;
	}
}