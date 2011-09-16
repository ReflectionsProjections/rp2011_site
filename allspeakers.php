<?php
include('config.php');
include('DB.php');
include('datamodels/SpeakerFactory.php');


$speakers =SpeakerFactory::retrieveAllSpeakers();

echo count($speakers);