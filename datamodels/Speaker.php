<?php
include('Talk.php');
class Speaker {

	private $id;
	private $name;
	private $bio;
	private $photoURL;
	private $jobTitle;
	private $affiliation;
	private $talks;


	function __construct($id, $name, $bio, $photoURL, $jobTitle, $affiliation) {
		$this->id = $id;
		$this->name = $name;
		$this->bio = $bio;
		$this->photoURL = $photoURL;
		$this->jobTitle = $jobTitle;
		$this->affiliation = $affiliation;
	}
	
	public function getID() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getBio() {
		return $this->bio;
	}

	public function getCroppedPhoto() {
		return $this->photoURL . "_c.png";
	}

	public function getFullPhoto() {
		return $this->photoURL . ".png";
	}

	public function getJobTitle() {
		return $this->jobTitle;
	}

	public function getAffiliation() {
		return $this->affiliation;
	}
	
	public function getTalks() {
		if($this->talks) {
			return $this->talks;
		}
		
		$query = "SELECT talks.title, talks.description, talks.location FROM (talks JOIN speakers_talks ON " .
			"(speakers_talks.talk_id = talks.id)) JOIN speakers ON (speakers.id = speakers_talks.speaker_id) " .
			"WHERE speakers.id = " . $this->getID() . " ORDER BY talks.ordering ASC";
		
		$result = DB::query($query);
		
		$talks = array();
		foreach($result as $r) {
			$title = $r['TITLE'];
			$description = $r['DESCRIPTION'];
			$description = nl2br($description);
			$location = $r['LOCATION'];
			
			$talks[] = new Talk($title, $description, $location);
		}
		
		return $talks;
	}

	public static function persistSpeaker($name, $bio, $photoURL, $jobTitle, $affiliation) {
		$name = DB::san($name);
		$bio = DB::san($bio);
		$photoURL = DB::san($photoURL);
		$jobTitle = DB::san($jobTitle);
		$affiliation = DB::san($affiliation);

		$query = "INSERT INTO speakers (`name`, `bio`, `photo_url`, `job_title`, `affiliation`) VALUES ('$name', '$bio', '$photoURL', '$jobTitle', '$affiliation')";
		
		if(DB::update($query)) {
			
			$id = DB::insertID();
			return new Speaker($id, $name, $bio, $photoURL, $jobTitle, $affiliation);
		} else {
			return null;
		}
	}

	public function getJsonObject() {
		$arr = array();
		$arr['name'] = $this->getName();
		$arr['bio'] = $this->getBio();
		$arr['photo_url_cropped'] = $this->getCroppedPhoto();
		$arr['photo_url_full'] = $this->getFullPhoto();
		$arr['job_title'] = $this->getJobTitle();
		$arr['affiliation'] = $this->getAffiliation();

		return json_encode($arr);
	}

}