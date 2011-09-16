<?php
include('config.php');
include('DB.php');
include('datamodels/Speaker.php');

//if(!isset($_GET['sid'])) {
//	return;
//}
//
//$id = $_GET['sid'];
//
//$speaker = SpeakerFactory::retrieveSpeakerByID($id);
//echo $speaker->getJsonObject();

$speakers = array();

DB::update('truncate speakers');

$name = "Cliff Click";
$bio = "With more than thirty years experience developing compilers, Cliff serves as Azul Systems' Chief JVM Architect. Cliff joined Azul in 2002 from Sun Microsystems where he was the architect and lead developer of the HotSpot Server Compiler, a technology that has delivered dramatic improvements in Java performance since its inception. 

Previously he was with Motorola where he helped deliver industry leading SpecInt2000 scores on PowerPC chips, and before that he researched compiler technology at HP Labs. Cliff has been writing optimizing compilers and JITs for over 25 years. He is invited to speak regularly at industry and academic conferences including JavaOne, ECOOP, JVM and VEE; serves on the Program Committee of many conferences (including PLDI and OOPSLA); and has published many papers about HotSpot technology and more than a dozen related patents. Cliff holds a PhD in Computer Science from Rice University. ";

$photo_url = "cliff_c";
$job_title = "Distinguished Engineer";
$affiliation = "Azul Systems";


$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Josh Bloch";
$bio = "n/a";
$photo_url = "josh_b";
$job_title = "Chief Java Architect";
$affiliation = "Google";


$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "John 'maddog' Hall";
$bio = "n/a";
$photo_url = "john_h";
$job_title = "Executive Director";
$affiliation = "Linux International";


$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Mark Russinovich";
$bio = "Mark Russinovich is a Technical Fellow in the Windows Azure group at Microsoft working on Microsoft's datacenter operating system. He is a widely recognized expert in Windows operating system internals as well as operating system security and design.

Russinovich is the author of the recently published cyberthriller Zero Day, co-author of the Microsoft Press Windows Internals books, and co-author of the Sysinternals Administrator's Reference.

Russinovich joined Microsoft in 2006 when Microsoft acquired Winternals Software, the company he cofounded in 1996, as well as Sysinternals, where he authors and publishes dozens of popular Windows administration and diagnostic utilities. He is a featured speaker at major industry conferences.";

$photo_url = "mark_r";
$job_title = "Technical Fellow";
$affiliation = "Microsoft";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);




$name = "Scott Klemmer";
$bio = "Scott is an Associate Professor of Computer Science at Stanford
University, where he co-directs the Human-Computer Interaction Group.
Organizations around the world use his lab's open-source design tools
and curricula; several books and popular press articles have covered
his research and teaching. He has been awarded the Katayanagi Emerging
Leadership Prize, Sloan Fellowship, NSF CAREER award, Microsoft
Research New Faculty Fellowship, and several best paper awards at the
premier human-computer interaction conferences (CHI and UIST). His
former PhD students are leaders at top universities, research
organizations, and in Silicon Valley. He has a dual BA in
Art-Semiotics and Computer Science from Brown University, Graphic
Design work at RISD, and an MS and PhD in Computer Science from UC
Berkeley. He is the program co-chair of UIST 2011.";

$photo_url = "scott_k";

$job_title = "HCI Researcher";
$affiliation = "Stanford University";


$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);

$name = "Mark Makdad";
$bio = "Mark Makdad has been a developer since the 6th grade, but one sad day
after writing Real Software for Real Users to pay Real Bills, he
learned that users don't care about good code, they care about cool
stuff that works.
Mark became passionate about making software that \"Does What I Mean\";
software the adapts to humans to work the way they expect it to, not
the other way around.
Mark lives in Japan, where he spent previously four years managing a
multi-million dollar IT services & staffing business in Tokyo.
In 2010, Mark took his passion for user experience to the mobile
platform, founding Long Weekend to design & develop the next
generation of Awesome mobile user experiences.";
$photo_url = "mark_m";
$job_title = "Director/Founder";
$affiliation = "Long Weekend LLC";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Ben Kamens";
$bio = "Ben started volunteering for the Khan Academy after watching one of Sal's talks and feeling left with no choice but to help. He now spends most of his time helping grow a great dev team and working on any code that helps scale the influence of great teachers. He has trouble sleeping if he hasn't coded at least a little bit each day.

Ben was previously VP of Engineering at Fog Creek Software, where he spent five and half years learning how to push bits around with small, fast teams.";

$photo_url = "ben_k";
$job_title = "Lead Developer";
$affiliation = "Khan Academy";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Douglas Hofstadter";
$bio = "Douglas Hofstadter (born in New York, 1945; B.S. with Distinction in mathematics
from Stanford, 1965; Ph.D. in physics from the University of Oregon, 1975) is College of
Arts and Sciences Distinguished Professor of Cognitive Science and Comparative
Literature at Indiana University in Bloomington. He discovered the first fractal ever
found in physics (now known as the ÒHofstadter butterflyÓ) and initiated the study of
meta-Fibonacci sequences in number theory. His research, inspired by a vision of
analogy as the core of human (and animal) cognition, involves the computer modeling of
conceptual fluidity and creative analogy-making in carefully designed microworlds (Fluid
Concepts and Creative Analogies). Most of his scientific ideas have been published in
books rather than articles. Aside from writing a monthly column (ÒMetamagical
ThemasÓ) for Scientific American in the years 1981-83, which gave rise to a book of the
same title, he has explored the mystery of ÒIÓ-ness in Gšdel, Escher, Bach: an Eternal
Golden Braid (Pulitzer Prize, 1980), in The MindÕs I: Fantasies and Reflections on Self
and Soul, and in I Am a Strange Loop, has done literary translation (most notably of
Alexander PushkinÕs novel-in-verse Eugene Onegin) and written on the art of translation
(Le Ton beau de Marot: In Praise of the Music of Language and Translator, Trader: An
Essay on the Pleasantly Pervasive Paradoxes of Translation), and has had several
expositions of his script-influenced line drawings, including many ambigrams. He loves
languages (sounds, symbols, grammars, idioms, poems, songs, speech errors, wordplay,
etc.), and calls himself ÒpilingualÓ, his best two foreign languages being French and
Italian. His current passion is salsa dancing.";

$photo_url = "douglas_h";
$job_title = "Professor of Cognitive Science";
$affiliation = "Indiana University";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);

$name = "Richard Powers";
$bio = "Richard Powers is the author of ten novels that explore connections among disparate
disciplines such as photography, artificial intelligence, music, molecular biology, game
theory, virtual reality, business, and neuroscience. He is a MacArthur fellow, a fellow
of the American Academy of Arts and Sciences, a Lannan Literary Award recipient,
a fellow of the American Academy of Arts and Letters, and the winner of the 2006
National Book Award for his novel The Echo Maker. He is a professor at the Center for
Advanced Study at the University of Illinois.";

$photo_url = "richard_p";
$job_title = "author";
$affiliation = "";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Ari Gesher";
$bio = "A former chair of ACM@UIUC, Ari Gesher has been with Palantir since the early days of building Palantir Government, authoring key components of the backend data systems, as well as building portions of the engineering infrastructure.";
$photo_url = "ari_g";
$job_title = "Lead Technologist";
$affiliation = "Palantir Technologies";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Jason Fennell";
$bio = "Jason Fennell is Manager of Yelp's Search and Data Mining Team
and has been with the company since 2008.  He is a graduate of Harvey
Mudd College '08 where he received a CS/Math major.

In his free time he enjoys long walks on the beach and talking about
his feelings.
";

$photo_url = "jason_f";
$job_title = "Search/Data Mining Lead";
$affiliation = "Yelp";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Rachel Brady";
$bio = "n/a";
$photo_url = "rachel_b";
$job_title = "HCI/Visualizations Researcher";
$affiliation = "Duke University";

$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


$name = "Fred Gallagher";
$bio = "n/a";
$photo_url = "fred_g";
$job_title = "Co-Creator/Cartoonist";
$affiliation = "Megatokyo";


$s = Speaker::persistSpeaker($name, $bio, $photo_url, $job_title, $affiliation);


?>
