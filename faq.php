<?php include("db-includes/include.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
<title>DOCVOCAT.DE - FAQ</title>
<?php include("includes/head.inc.php");?>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(".faq-answer").hide();
  jQuery(".faq-question").click(function()
  {
    jQuery(this).next(".faq-answer").slideToggle(500);
  });
});
</script>
<style>

.faq-question {
cursor:pointer;
}

</style>

</head>

<body>
	<div id="center">
		<header>
		<div id="logo">
		<object data="images/logo-docvocat.svg" type="image/svg+xml">
			<img src="images/logo-docvocat.png">
		</object>
		</div>
		<nav>
<?php include("includes/nav.inc.php");?>
		</nav>
		</header>
		<div id="main">
			<div id="login">
				<div id="socialmedia">
<?php include("includes/socialmedia.inc.php");?>
				</div>
				<div id="breadcrumb">Startseite � FAQ</div>
<?php include("includes/login.inc.php");?>
			</div>

      <div class="teaser">
      <h1><strong>FAQ.</strong></h1>
      <h2>H�ufig gestellte Fragen</h2>
      <p>W�hrend unserer eigenen T�tigkeit als Honorar�rzte sind wir auf viele Probleme gesto�en, die wir anderen ersparen wollen. Wir haben hier eine �bersicht h�ufig gestellter Fragen zusammengestellt, die allerdings keinen Anspruch auf Vollst�ndigkeit erhebt und laufend erg�nzt wird.  
Falls Sie noch einige Erg�nzungen haben, kontaktieren Sie uns einfach. Wir nehmen Ihre Anregungen gerne auf! Obwohl wir uns bem�ht haben, alle Themen sorgf�ltig zu recherchieren, stellt diese �bersicht keine juristische Beratung dar.</p>
      </div>
      <div id="content">
      <span class="headline-faq">Allgemeines</span>
      <h2 class="faq-question">Was ist ein Honorararzt?</h2>
      <p class="faq-answer">Der Bundesverband der Honorar�rzte e.V. versucht es mit folgender Definition: 
<i>�Honorar�rzte sind Fach�rztinnen und Fach�rzte, die in medizinischen Einrichtungen zeitlich befristet freiberuflich auf Honorarbasis t�tig sind.�</i>
Wir finden, jeder Arzt kann ein Honorararzt sein, egal ob im Hauptberuf oder nur f�r Nebent�tigkeiten. 
Viele in unserem Team arbeiten als Selbst�ndige f�r begrenzte Zeit (also ohne Festanstellung) auf der Basis eines zuvor festgelegten Honorars. Andere arbeiten durchgehend selbst�ndig oder werden nur f�r einen besonderen Einsatz neben ihrer Festanstellung t�tig. 
</p>
		<h2 class="faq-question">Was macht DOCVOCAT?</h2>
		<p class="faq-answer">Wir haben DOCVOCAT gegr�ndet, weil wir als Honorar�rzte in Deutschland auf viele Probleme gesto�en sind, die wir anderen ersparen wollen. 
Wir wollen anderen �rzten dabei helfen, interessante Arbeitspl�tze zu finden ohne sich mit der l�stigen Suche nach Auftr�gen oder der langweiligen B�rokratie besch�ftigen zu m�ssen. 
Umgekehrt kennen wir auch die Probleme vieler Einrichtungen bei der Besetzung von Stellen und haben DOCVOCAT als eine Plattform entwickelt, die es �rzten und medizinischen Einrichtungen vereinfachen soll, miteinander in Kontakt zu treten. 
Wir wollen ein Netzwerk aufbauen, um beiden Seiten den unkomplizierten Austausch von Informationen zu erm�glichen. 
Hierf�r haben wir einen Algorithmus entwickelt, der automatisch die Daten von �rzten und Einrichtungen abgleicht und beide Seiten bei einer �bereinstimmung in relevanten Punkten informiert. 
Die Eingabe der Daten erfolgt schnell, einfach und intuitiv. �rzte geben Ihr Profil und Ihren Stellenwunsch ein. Einrichtungen erstellen ebenfalls ein Profil sowie eine Suchanfrage. Den Rest �bernimmt DOCVOCAT. 
Wir halten dabei nichts von Konkurrenzschutzklauseln oder einem kostenpflichtigen Austausch der Kontaktdaten. Aus diesem Grund k�nnen sich �rzte auf Wunsch auch direkt mit den Einrichtungen in Verbindung setzen.<br /><br />
Keiner kennt die jeweiligen Arbeitsbereiche im Gesundheitswesen besser als die dort Besch�ftigten. Wir sind daher der �berzeugung, dass ein transparenter Austausch von Informationen in einem Netzwerk automatisch die Qualit�t f�r beide Seiten sichert. Damit dies funktioniert, wollen wir zusammen mit Ihnen dieses Netzwerk entwickeln. Falls Sie Vorschl�ge haben, wie wir uns verbessern k�nnen, treten Sie mit uns in Kontakt.<br /><br />
Als Unternehmer und �rzte arbeiten wir aus �berzeugung und mit Spa� an unserem Projekt. Wieder innerhalb einer typischen Krankenhaushierarchie zu arbeiten, kommt f�r uns nicht in Frage. Falls dies auch f�r Sie zutrifft, kommen Sie in unser Team.
</p>
	<span class="headline-faq">Vermittlungsablauf</span>
	<h2 class="faq-question">Wie funktioniert die Vermittlung �ber DOCVOCAT?</h2>
	<p class="faq-answer">Nach der Registrierung werden Sie von uns per E-Mail �ber passende �bereinstimmungen mit Suchanfragen von Einrichtung gem�� der Angaben in Ihrem Profil informiert. Je detaillierter diese Angaben sind, desto pr�ziser kann unser Algorithmus Ihre Informationen abgleichen. Sie sollten daher Ihr Profil auch in regelm��igen Abst�nden aktualisieren.</p>
	<h2 class="faq-question">Was kostet die Vermittlung an eine Einrichtung durch DOCVOCAT?</h2>
	<p class="faq-answer">Prinzipiell ist die Vermittlung durch uns kostenlos. F�r die �rztinnen und �rzte ist sie in jedem Fall kostenlos. Wir verstehen uns in erster Linie als ein Netzwerk, das den Informationsaustausch zwischen �rzten und Einrichtungen, Privatpersonen und anderen Institutionen f�rdern soll. Aus diesem Grund haben wir einen Algorithmus entwickelt, der beide Seiten bei einer passenden �bereinstimmung automatisch informiert. <br /><br />
Hier gibt es keine Konkurrenzschutzklauseln und wir geben den �rzten und Einrichtungen die M�glichkeit, direkt in Kontakt zu treten. 
Nur falls die �rzte unsere Zusatzleistungen in Anspruch nehmen fallen bei den Auftraggebern (Einrichtungen, Privatpersonen, usw.) Geb�hren an.</p>
	<h2 class="faq-question">Welche Unterlagen werden f�r eine Vermittlung ben�tigt?</h2>
	<p class="faq-answer">F�r eine Vermittlung brauchen wir von den �rzten zumindest folgende Unterlagen:<br />
		<br />
		<strong>Kopie Ihrer Approbationsurkunde</strong><br />
		<strong>Kopie Ihres Personalausweises (Vorder- und R�ckseite)</strong><br />
		<br />
		Je nach nachgefragter T�tigkeit oder Stelle brauchen wir zus�tzlich:<br />
		<br />
		Kopie Ihres Facharztzeugnisses<br />
		Kopien der Fach- und Sachkundennachweise (Notarzt, Strahlenschutz etc.)<br />
		Tabellarischer Lebenslauf<br />
		Kopie Ihres KV-Ausweises / Notdienstausweises<br />
	</p>
	<h2 class="faq-question">Wie lange dauert ein Einsatz?</h2>
	<p class="faq-answer">Dies ist unterschiedlich � von Stunden im Rahmen von Notarzteins�tzen, �ber Tage, Wochen oder Monate im Stationsdienst. Durchschnittlich arbeiten Honorar�rzte wochenweise. Viele Einrichtungen geben aber auch die M�glichkeit, die Einsatzdauer variabel zu gestalten, falls ein Angebot nicht durchgehend wahrgenommen werden kann.</p>
	<h2 class="faq-question">Wo werden die Honorar�rzte eingesetzt?</h2>
	<p class="faq-answer">Wo Bedarf ist! Wir geben Ihnen die M�glichkeit, den Einsatzort anhand geographischer Kriterien festzulegen und/oder anhand einer Stellenbeschreibung auszuw�hlen. Au�erdem fragen wir weitere Einsatzdaten ab, die sowohl den �rzten als auch den Einrichtungen helfen, sich optimal aufeinander abzustimmen. Je detaillierter die Angaben in den Profilen sind, desto pr�ziser kann unsere Datenbank die Informationen abgleichen.</p>
	<h2 class="faq-question">Vermittelt DOCVOCAT auch �rzte in Festanstellung?</h2>
	<p class="faq-answer">Ja, unsere registrierten �rzte haben die M�glichkeit, sich auch auf ausgeschriebene Festanstellungen zu bewerben. Wir arbeiten hierbei eng mit der Firma H2U-Wissen zusammen.</p>
	<h2 class="faq-question">Hilft DOCVOCAT bei der Einarbeitung der Honorar�rzte?</h2>
	<p class="faq-answer">F�r kurz- und mittelfristige Eins�tze setzten wir zun�chst auf unseren Algorithmus, der die Daten von �rzten und Einrichtungen abgleicht und beide Seiten automatisch bei �bereinstimmung in relevanten Punkten informiert. Hierbei wurde eine Unterteilung in pers�nliche und medizinische Daten sowie Einsatzdaten und Indikatoren vorgenommen, die schon vor der Vermittlung beiden Seiten zeigen, ob die wesentlichen Voraussetzungen f�r eine Zusammenarbeit gegeben sind.</p>
	<h2 class="faq-question">Wie bekunde ich Interesse an einem Angebot und was geschieht dann?</h2>
	<p class="faq-answer">Falls �rzte Interesse an einem Vertretungsangebot haben, dann k�nnen Sie den entsprechenden Link in Ihrer Angebotsliste oder in Ihrer E-Mail aktivieren. Falls das Angebot noch g�ltig ist, werden wir den Arzt dem Auftraggeber f�r die Vertretung vorschlagen. Der Auftraggeber entscheidet dann, ob er sich mit dem betreffendem Arzt in Verbindung setzen m�chte. 
Wenn �rzte die Verhandlung und die Abrechnung mit der Einrichtung selbst �bernehmen wollen, so tauschen wir direkt die Kontaktdaten.
Falls das Profil eines der �rzte den Anforderungen einer Einrichtung entspricht, dann kann dies �ber den entsprechenden Link in der Kandidatenliste aktiviert werden. Wir informieren dann die entsprechenden �rzte. 
Entscheiden sich die �rzte daf�r, dass wir den administrativen Aufwand �bernehmen sollen, dann schicken wir sowohl den Auftraggebern als auch den Auftragnehmern per E-Mail einen Honorarvertrag zu.</p>
	<h2 class="faq-question">Wie sieht es mit den Unterk�nften aus?</h2>
	<p class="faq-answer">Teilweise stellen die Auftraggeber den �rzten eine Unterkunft kostenlos zur Verf�gung. Wir verweisen in diesem Zusammenhang allerdings die Auftraggeber darauf hin, dass es hierbei zu Problemen mit der Deutschen Rentenversicherung kommen kann, die hier ein Kriterium der Scheinselbstst�ndigkeit der engagierten Honorar�rzte erf�llt sehen kann.</p>
	<h2 class="faq-question">Muss eine Vollverpflegung der Honorar�rzte gew�hrleistet sein?</h2>
	<p class="faq-answer">Hier gilt das Gleiche wie bei der Bereitstellung der Unterkunft. Nach R�cksprache mit der Deutschen Rentenversicherung sollte daher auch die kostenlose Verpflegung der Honorar�rzte durch eine alternative L�sung ersetzt werden. Hier kann der Auftraggeber dem Arzt beispielsweise die Teilnahme an der Mitarbeiterverpflegung gegen Bezahlung erm�glichen.</p>
	<h2 class="faq-question">Was passiert bei einer Absage des Auftraggebers?</h2>
	<p class="faq-answer">Im Regelfall kommt es nach einer positiven Zusage des Auftraggebers nur in Ausnahmef�llen zu einer Absage. Dann allerdings tragen Honorar�rzte als Freiberufler das unternehmerische Risiko Ihrer T�tigkeit. Sie k�nnen dann von Ihrem Recht Gebrauch machen, den Auftraggeber auf Schadensersatz zu verklagen, was jedoch mitunter sehr m�hselig sein kann, da hierbei ein konkreter Verdienstausfall nachgewiesen werden muss, was meist sehr schwierig ist.</p>
	<h2 class="faq-question">Was passiert, wenn �rzte kurzfristig absagen?</h2>
	<div class="faq-answer">Zun�chst sollten sich die �rzte dann sofort mit uns und dem Auftraggeber in Verbindung setzen. Anschlie�end gibt es drei M�glichkeiten:
	<ul>
		<li>Bei einer �Verhinderung aus wichtigem Grund� teilen die �rzte uns und dem Arbeitgeber diesen mit. Bei kurzfristiger Absage durch Krankheit vor Aufnahme der T�tigkeit ist zudem ein �rztliches Attest vorzulegen.</li>
		<li>Wir versuchen einen Ersatz f�r Sie zu finden, was bei kurzfristigen Absagen meist nicht m�glich ist, so dass sich die Einrichtung</li>
		<li>als letzte M�glichkeit die Durchsetzung einer Konventionalstrafe vorbehalten kann.</li>
	</ul>	
	</div>
	<h2 class="faq-question">Wer pr�ft die Qualifikation der �rzte?</h2>
	<p class="faq-answer">Die Auftraggeber m�ssen sich vor Beginn des ersten Arbeitstages alle n�tigen Originalunterlagen sowie einen g�ltigen Personalausweis des Arztes vorlegen lassen. Auch wir fordern vor einer ersten Vermittlung bzw. der ersten Kontaktherstellung die n�tigen Unterlagen als Kopien an, k�nnen jedoch nicht die Echtheit der vorgelegten Dokumente nachpr�fen. Dies obliegt dem Auftraggeber.</p>
	<span class="headline-faq">Datenschutz</span>
	<h2 class="faq-question">Sind meine Daten sicher?</h2>
	<p class="faq-answer">Ihre personenbezogenen und medizinischen Daten sind bei uns sicher. Wir geben grunds�tzlich keine Daten an unbeteiligte Dritte weiter. Gem�� � 33 Absatz 1 Bundesdatenschutzgesetz werden Ihre personenbezogenen Daten ausschlie�lich zum Gesch�ftszweck in maschinenlesbarer Form gespeichert und verarbeitet. Sie haben au�erdem jederzeit die M�glichkeit, Ihre Daten unwiderruflich zu l�schen.</p>
	<span class="headline-faq">Abrechnung</span>
	<h2 class="faq-question">Wie erfolgt die Abrechnung mit dem Arzt?</h2>
	<p class="faq-answer">Viele �rzte, die sich �ber DOCVOCAT anmelden, �bernehmen ihre Abrechnung selbst, so dass dies eine Verhandlungssache zwischen Ihnen und dem jeweiligen Auftraggeber ist. �blich wird ein Zeitraum von zwei bis vier Wochen zur Abrechnung gew�hlt. Wir bieten den �rzten in unserem Downloadbereich eine Vorlage f�r den Stundenabrechnungsbogen an. Dieser Stundenabrechnungsbogen sollte von einem Vertreter der Einrichtung (in der Regel der zust�ndige Ober- oder Chefarzt) unterschrieben werden.</p>
	<h2 class="faq-question">Wie hoch ist der �bliche Honorarsatz?</h2>
	<div class="faq-answer">Dies richtet sich nach Ihrem pers�nlichen Aus- und Weiterbildungsstand. Als orientierende Betr�ge k�nnen die im Folgenden aufgef�hrten Stundens�tze herangezogen werden. Je nach Auftrag und Qualifikation gibt es aber erhebliche Abweichungen.
	<ul>
		<li>�rzte in Weiterbildung: ab 60�/h</li>
		<li>Fach�rzte: ab 80�/h</li>
		<li>Notarztdienste: ab 30�/h</li>
		<li>Praxisvertretungen: ab 50�/h</li>
	</ul>
	Bereitschaftsdienste werden im Regelfall mit 80% der oben aufgef�hrten S�tze verg�tet. Bez�glich der unterschiedlichen Dienststufen kann die folgende Tabelle aufgrund der sich �ndernden Rechtsprechung nur als Orientierung gelten.
	</div>
	<h2 class="faq-question">Wer zahlt das Gehalt aus?</h2>
	<p class="faq-answer">�rzte erhalten das Honorar direkt von der Einrichtung.</p>
	<span class="headline-faq">Versicherungen</span>
	<h2 class="faq-question">Was ist mit der Krankenversicherung?</h2>
	<p class="faq-answer">Als Freiberufler sind �rzte nicht gesetzlich verpflichtet, sich zu versichern � die Krankenversicherung ist also freiwillig. Wir empfehlen jedoch unbedingt, eine Krankenversicherung abzuschlie�en.</p>
	<h2 class="faq-question">Was ist mit der Berufsgenossenschaft?</h2>
	<p class="faq-answer">Es besteht keine gesetzliche Pflicht, sich bei der Berufsgenossenschaft zu melden. Als Freiberufler haben �rzte allerdings die M�glichkeit, sich bei der BG gegen Arbeits- und Wegeunf�lle zu versichern. Auch zus�tzlich zur Unfallversicherung hat eine Absicherung �ber die Berufsgenossenschaft ihre Vorteile. Die Vorteile liegen in der Therapie und Rehabilitation und somit der kompletten medizinischen und rehabilitativen Behandlung eines Arbeitsunfalles w�hrend der Aus�bung der freiberuflichen T�tigkeit oder eines Wegeunfalls. Als Arbeitsunfall gelten auch Unf�lle bei Fort- und Weiterbildungsma�nahmen. Folgende grobe Unterscheidung kann getroffen werden: Die private Unfallversicherung zahlt bei Dauerinvalidit�t aufgrund (teilweisen) Verlusts von Gliedma�en, die Haftpflicht springt bei einer unfallbedingten Erwerbsunf�higkeit im Beruf ein und die Berufsgenossenschaft zahlt bei Minderung der Erwerbsf�higkeit auf dem allgemeinem Arbeitsmarkt.</p>
	<h2 class="faq-question">Was ist mit der Arbeitslosenversicherung?</h2>
	<p class="faq-answer">Diese ist vom Gesetzgeber nur f�r angestellte Besch�ftigte vorgeschrieben! Als Freiberufler besteht allerdings kein Angestelltenverh�ltnis im rechtlichen Sinn, so dass f�r �rzte eine entsprechende Absicherung durch Bildung von R�cklagen sehr empfehlenswert ist.</p>
	<h2 class="faq-question">Was ist mit der Rentenversicherung?</h2>
	<p class="faq-answer">Bis zu einer Beitragsbemessungsgrenze sind �rzte gesetzlich dazu verpflichtet, aus Eink�nften, die aus �rztlicher T�tigkeit bezogen werden, Abgaben zur Rentenversicherung zu zahlen. Sie sind verpflichtet, orientierend an Ihren Eink�nften aus ihrer �rztlichen T�tigkeit Abgaben an das f�r sie zust�ndige Versorgungswerk (�rzteversorgung Ihres Bundeslandes) zu leisten.</p>
	<h2 class="faq-question">Was ist mit der Haftpflichtversicherung?</h2>
	<p class="faq-answer">Es ist allgemein �blich, dass sich Freiberufler selbst gegen Haftpflichtsch�den versichern.</p>
	<h2 class="faq-question">Was ist mit der Unfallversicherung?</h2>
	<p class="faq-answer">Als Freiberufler sind �rzte selbst f�r Ihre Absicherung verantwortlich. Wie oben schon beschrieben k�nnen Sie sich au�erdem freiwillig bei der Berufsgenossenschaft versichern.</p>
	<span class="headline-faq">Selbstst�ndigkeit</span>
	<h2 class="faq-question">Wie sieht es mit den Steuern aus?</h2>
	<p class="faq-answer">Als freiberuflich t�tiger Arzt muss man kein Gewerbe anmelden aber sich grunds�tzlich beim Finanzamt melden. Einen entsprechenden Antrag k�nnen Sie im Downloadbereich unserer Homepage herunterladen. In Abh�ngigkeit von dem Finanzamt, bei dem Sie gemeldet sind, erhalten Sie eine neue Steuernummer. Die H�he der Steuern, die Sie zu zahlen haben, sind abh�ngig von Ihrem Einkommen. Sie sollten auf jeden Fall zuvor R�cksprache mit Ihrem Steuerberater halten und R�cklagen f�r Nachzahlungen bilden, da Steuern erst im Nachhinein erhoben werden. �rztliche Heilbehandlungen sind per Gesetz von der Umsatzsteuerpflicht ausgenommen (UStG �4 Abs. 14). 
Umsatzsteuerpflichtig sind �rztliche T�tigkeiten, die nicht als Heilbehandlungen anzusehen sind, z.B. Beratungsleistungen oder Sch�nheitschirurgie. Zusammenfassend l�sst sich sagen: Aus�bende der klassischen freien Berufe zahlen keine Gewerbesteuer, da sie keine Unternehmer im Sinne von �5 Abs.1/S.1 Gewerbesteuergesetz sind. Nichts desto trotz sind sie aber umsatz- und einkommensteuerpflichtig, wobei in erster Hinsicht das Finanzamt entscheidet, ob eine selbst�ndig ausge�bte T�tigkeit gewerblich oder freiberuflich anzusehen ist.
</p>
	<h2 class="faq-question">Was muss ich zur Scheinselbstst�ndigkeit wissen?</h2>
	<p class="faq-answer">Von Scheinselbstst�ndigkeit spricht man, wenn sich eine freiberufliche T�tigkeit nicht von der T�tigkeit eines Angestellten unterscheiden l�sst. Der Begriff hat einen arbeitsrechtlichen und einen sozialrechtlichen Aspekt. Von Interesse ist f�r Honorar�rzte insbesondere der sozialrechtliche Aspekt, da es hier um die Frage geht, ob f�r eine erbrachte Leistung Sozialabgaben (Kranken-, Renten- und Arbeitslosenversicherung) gezahlt werden m�ssen. Eine evtl. �berpr�fung erfolgt durch die Deutsche Rentenversicherung. Die Abgaben werden in erster Linie vom Auftraggeber (also nicht vom Honorararzt) nachgefordert. Im Zweifelsfall k�nnen Auftraggeber oder Auftragnehmer eine �berpr�fung bei der Deutschen Rentenversicherung beantragen. Sollte die Deutsche Rentenversicherung von einer Scheinselbstst�ndigkeit ausgehen, beginnt die Betragspflichtigkeit erst mit Zugang des Bescheids. Einspruch und Rechtsweg sind m�glich. Insgesamt geht es also hierbei um die Frage, ob es sich bei dem jeweiligen Dienstverh�ltnis um ein sozialversicherungspflichtiges Besch�ftigungsverh�ltnis handelt. Das Risiko besteht vor allem f�r den Auftraggeber, der dann Sozialversicherungsbeitr�ge und Lohnsteuern nachzahlen muss.</p>
	<h2 class="faq-question">Bei welcher �rztekammer muss ich  mich melden?</h2>
	<p class="faq-answer">Grunds�tzlich m�ssen Sie sich bei der zust�ndigen �rztekammer in dem Bezirk, wo Sie eine Vertretung machen, melden.  Es gibt Bestrebungen eine bundesweite �rztemitgliedschaft einzuf�hren, aber bisher gilt noch oben beschriebene Regelung.</p>
	<h2 class="faq-question">L�sst sich eine T�tigkeit als Honorararzt f�r eine Facharztweiterbildung anerkennen?</h2>
	<p class="faq-answer">Die Grunds�tze f�r die Facharztausbildung sind in der Weiterbildungsordnung der jeweiligen Landes�rztekammer geregelt. Wenn eine T�tigkeit als Honorararzt den Anforderungen der Weiterbildungsordnung entspricht, w�re eine Anerkennung theoretisch m�glich.
Um eine T�tigkeit anerkennen zu lassen, wird ein Zeugnis des jeweiligen Chefarztes ben�tigt. Das Zeugnis wird der Chefarzt in der Regel nur f�r einen angestellten Arzt ausstellen. Als weitere Mindestvoraussetzung muss die T�tigkeit laut Weiterbildungsordnung in den meisten F�llen mindestens sechs Monate betragen. 
</p>
	</div>
		</div>
		<footer>
<?php include("includes/footer.inc.php");?>
		</footer>
	</div>
</body>
</html>