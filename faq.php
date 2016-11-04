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
				<div id="breadcrumb">Startseite » FAQ</div>
<?php include("includes/login.inc.php");?>
			</div>

      <div class="teaser">
      <h1><strong>FAQ.</strong></h1>
      <h2>Häufig gestellte Fragen</h2>
      <p>Während unserer eigenen Tätigkeit als Honorarärzte sind wir auf viele Probleme gestoßen, die wir anderen ersparen wollen. Wir haben hier eine Übersicht häufig gestellter Fragen zusammengestellt, die allerdings keinen Anspruch auf Vollständigkeit erhebt und laufend ergänzt wird.  
Falls Sie noch einige Ergänzungen haben, kontaktieren Sie uns einfach. Wir nehmen Ihre Anregungen gerne auf! Obwohl wir uns bemüht haben, alle Themen sorgfältig zu recherchieren, stellt diese Übersicht keine juristische Beratung dar.</p>
      </div>
      <div id="content">
      <span class="headline-faq">Allgemeines</span>
      <h2 class="faq-question">Was ist ein Honorararzt?</h2>
      <p class="faq-answer">Der Bundesverband der Honorarärzte e.V. versucht es mit folgender Definition: 
<i>„Honorarärzte sind Fachärztinnen und Fachärzte, die in medizinischen Einrichtungen zeitlich befristet freiberuflich auf Honorarbasis tätig sind.“</i>
Wir finden, jeder Arzt kann ein Honorararzt sein, egal ob im Hauptberuf oder nur für Nebentätigkeiten. 
Viele in unserem Team arbeiten als Selbständige für begrenzte Zeit (also ohne Festanstellung) auf der Basis eines zuvor festgelegten Honorars. Andere arbeiten durchgehend selbständig oder werden nur für einen besonderen Einsatz neben ihrer Festanstellung tätig. 
</p>
		<h2 class="faq-question">Was macht DOCVOCAT?</h2>
		<p class="faq-answer">Wir haben DOCVOCAT gegründet, weil wir als Honorarärzte in Deutschland auf viele Probleme gestoßen sind, die wir anderen ersparen wollen. 
Wir wollen anderen Ärzten dabei helfen, interessante Arbeitsplätze zu finden ohne sich mit der lästigen Suche nach Aufträgen oder der langweiligen Bürokratie beschäftigen zu müssen. 
Umgekehrt kennen wir auch die Probleme vieler Einrichtungen bei der Besetzung von Stellen und haben DOCVOCAT als eine Plattform entwickelt, die es Ärzten und medizinischen Einrichtungen vereinfachen soll, miteinander in Kontakt zu treten. 
Wir wollen ein Netzwerk aufbauen, um beiden Seiten den unkomplizierten Austausch von Informationen zu ermöglichen. 
Hierfür haben wir einen Algorithmus entwickelt, der automatisch die Daten von Ärzten und Einrichtungen abgleicht und beide Seiten bei einer Übereinstimmung in relevanten Punkten informiert. 
Die Eingabe der Daten erfolgt schnell, einfach und intuitiv. Ärzte geben Ihr Profil und Ihren Stellenwunsch ein. Einrichtungen erstellen ebenfalls ein Profil sowie eine Suchanfrage. Den Rest übernimmt DOCVOCAT. 
Wir halten dabei nichts von Konkurrenzschutzklauseln oder einem kostenpflichtigen Austausch der Kontaktdaten. Aus diesem Grund können sich Ärzte auf Wunsch auch direkt mit den Einrichtungen in Verbindung setzen.<br /><br />
Keiner kennt die jeweiligen Arbeitsbereiche im Gesundheitswesen besser als die dort Beschäftigten. Wir sind daher der Überzeugung, dass ein transparenter Austausch von Informationen in einem Netzwerk automatisch die Qualität für beide Seiten sichert. Damit dies funktioniert, wollen wir zusammen mit Ihnen dieses Netzwerk entwickeln. Falls Sie Vorschläge haben, wie wir uns verbessern können, treten Sie mit uns in Kontakt.<br /><br />
Als Unternehmer und Ärzte arbeiten wir aus Überzeugung und mit Spaß an unserem Projekt. Wieder innerhalb einer typischen Krankenhaushierarchie zu arbeiten, kommt für uns nicht in Frage. Falls dies auch für Sie zutrifft, kommen Sie in unser Team.
</p>
	<span class="headline-faq">Vermittlungsablauf</span>
	<h2 class="faq-question">Wie funktioniert die Vermittlung über DOCVOCAT?</h2>
	<p class="faq-answer">Nach der Registrierung werden Sie von uns per E-Mail über passende Übereinstimmungen mit Suchanfragen von Einrichtung gemäß der Angaben in Ihrem Profil informiert. Je detaillierter diese Angaben sind, desto präziser kann unser Algorithmus Ihre Informationen abgleichen. Sie sollten daher Ihr Profil auch in regelmäßigen Abständen aktualisieren.</p>
	<h2 class="faq-question">Was kostet die Vermittlung an eine Einrichtung durch DOCVOCAT?</h2>
	<p class="faq-answer">Prinzipiell ist die Vermittlung durch uns kostenlos. Für die Ärztinnen und Ärzte ist sie in jedem Fall kostenlos. Wir verstehen uns in erster Linie als ein Netzwerk, das den Informationsaustausch zwischen Ärzten und Einrichtungen, Privatpersonen und anderen Institutionen fördern soll. Aus diesem Grund haben wir einen Algorithmus entwickelt, der beide Seiten bei einer passenden Übereinstimmung automatisch informiert. <br /><br />
Hier gibt es keine Konkurrenzschutzklauseln und wir geben den Ärzten und Einrichtungen die Möglichkeit, direkt in Kontakt zu treten. 
Nur falls die Ärzte unsere Zusatzleistungen in Anspruch nehmen fallen bei den Auftraggebern (Einrichtungen, Privatpersonen, usw.) Gebühren an.</p>
	<h2 class="faq-question">Welche Unterlagen werden für eine Vermittlung benötigt?</h2>
	<p class="faq-answer">Für eine Vermittlung brauchen wir von den Ärzten zumindest folgende Unterlagen:<br />
		<br />
		<strong>Kopie Ihrer Approbationsurkunde</strong><br />
		<strong>Kopie Ihres Personalausweises (Vorder- und Rückseite)</strong><br />
		<br />
		Je nach nachgefragter Tätigkeit oder Stelle brauchen wir zusätzlich:<br />
		<br />
		Kopie Ihres Facharztzeugnisses<br />
		Kopien der Fach- und Sachkundennachweise (Notarzt, Strahlenschutz etc.)<br />
		Tabellarischer Lebenslauf<br />
		Kopie Ihres KV-Ausweises / Notdienstausweises<br />
	</p>
	<h2 class="faq-question">Wie lange dauert ein Einsatz?</h2>
	<p class="faq-answer">Dies ist unterschiedlich – von Stunden im Rahmen von Notarzteinsätzen, über Tage, Wochen oder Monate im Stationsdienst. Durchschnittlich arbeiten Honorarärzte wochenweise. Viele Einrichtungen geben aber auch die Möglichkeit, die Einsatzdauer variabel zu gestalten, falls ein Angebot nicht durchgehend wahrgenommen werden kann.</p>
	<h2 class="faq-question">Wo werden die Honorarärzte eingesetzt?</h2>
	<p class="faq-answer">Wo Bedarf ist! Wir geben Ihnen die Möglichkeit, den Einsatzort anhand geographischer Kriterien festzulegen und/oder anhand einer Stellenbeschreibung auszuwählen. Außerdem fragen wir weitere Einsatzdaten ab, die sowohl den Ärzten als auch den Einrichtungen helfen, sich optimal aufeinander abzustimmen. Je detaillierter die Angaben in den Profilen sind, desto präziser kann unsere Datenbank die Informationen abgleichen.</p>
	<h2 class="faq-question">Vermittelt DOCVOCAT auch Ärzte in Festanstellung?</h2>
	<p class="faq-answer">Ja, unsere registrierten Ärzte haben die Möglichkeit, sich auch auf ausgeschriebene Festanstellungen zu bewerben. Wir arbeiten hierbei eng mit der Firma H2U-Wissen zusammen.</p>
	<h2 class="faq-question">Hilft DOCVOCAT bei der Einarbeitung der Honorarärzte?</h2>
	<p class="faq-answer">Für kurz- und mittelfristige Einsätze setzten wir zunächst auf unseren Algorithmus, der die Daten von Ärzten und Einrichtungen abgleicht und beide Seiten automatisch bei Übereinstimmung in relevanten Punkten informiert. Hierbei wurde eine Unterteilung in persönliche und medizinische Daten sowie Einsatzdaten und Indikatoren vorgenommen, die schon vor der Vermittlung beiden Seiten zeigen, ob die wesentlichen Voraussetzungen für eine Zusammenarbeit gegeben sind.</p>
	<h2 class="faq-question">Wie bekunde ich Interesse an einem Angebot und was geschieht dann?</h2>
	<p class="faq-answer">Falls Ärzte Interesse an einem Vertretungsangebot haben, dann können Sie den entsprechenden Link in Ihrer Angebotsliste oder in Ihrer E-Mail aktivieren. Falls das Angebot noch gültig ist, werden wir den Arzt dem Auftraggeber für die Vertretung vorschlagen. Der Auftraggeber entscheidet dann, ob er sich mit dem betreffendem Arzt in Verbindung setzen möchte. 
Wenn Ärzte die Verhandlung und die Abrechnung mit der Einrichtung selbst übernehmen wollen, so tauschen wir direkt die Kontaktdaten.
Falls das Profil eines der Ärzte den Anforderungen einer Einrichtung entspricht, dann kann dies über den entsprechenden Link in der Kandidatenliste aktiviert werden. Wir informieren dann die entsprechenden Ärzte. 
Entscheiden sich die Ärzte dafür, dass wir den administrativen Aufwand übernehmen sollen, dann schicken wir sowohl den Auftraggebern als auch den Auftragnehmern per E-Mail einen Honorarvertrag zu.</p>
	<h2 class="faq-question">Wie sieht es mit den Unterkünften aus?</h2>
	<p class="faq-answer">Teilweise stellen die Auftraggeber den Ärzten eine Unterkunft kostenlos zur Verfügung. Wir verweisen in diesem Zusammenhang allerdings die Auftraggeber darauf hin, dass es hierbei zu Problemen mit der Deutschen Rentenversicherung kommen kann, die hier ein Kriterium der Scheinselbstständigkeit der engagierten Honorarärzte erfüllt sehen kann.</p>
	<h2 class="faq-question">Muss eine Vollverpflegung der Honorarärzte gewährleistet sein?</h2>
	<p class="faq-answer">Hier gilt das Gleiche wie bei der Bereitstellung der Unterkunft. Nach Rücksprache mit der Deutschen Rentenversicherung sollte daher auch die kostenlose Verpflegung der Honorarärzte durch eine alternative Lösung ersetzt werden. Hier kann der Auftraggeber dem Arzt beispielsweise die Teilnahme an der Mitarbeiterverpflegung gegen Bezahlung ermöglichen.</p>
	<h2 class="faq-question">Was passiert bei einer Absage des Auftraggebers?</h2>
	<p class="faq-answer">Im Regelfall kommt es nach einer positiven Zusage des Auftraggebers nur in Ausnahmefällen zu einer Absage. Dann allerdings tragen Honorarärzte als Freiberufler das unternehmerische Risiko Ihrer Tätigkeit. Sie können dann von Ihrem Recht Gebrauch machen, den Auftraggeber auf Schadensersatz zu verklagen, was jedoch mitunter sehr mühselig sein kann, da hierbei ein konkreter Verdienstausfall nachgewiesen werden muss, was meist sehr schwierig ist.</p>
	<h2 class="faq-question">Was passiert, wenn Ärzte kurzfristig absagen?</h2>
	<div class="faq-answer">Zunächst sollten sich die Ärzte dann sofort mit uns und dem Auftraggeber in Verbindung setzen. Anschließend gibt es drei Möglichkeiten:
	<ul>
		<li>Bei einer „Verhinderung aus wichtigem Grund“ teilen die Ärzte uns und dem Arbeitgeber diesen mit. Bei kurzfristiger Absage durch Krankheit vor Aufnahme der Tätigkeit ist zudem ein ärztliches Attest vorzulegen.</li>
		<li>Wir versuchen einen Ersatz für Sie zu finden, was bei kurzfristigen Absagen meist nicht möglich ist, so dass sich die Einrichtung</li>
		<li>als letzte Möglichkeit die Durchsetzung einer Konventionalstrafe vorbehalten kann.</li>
	</ul>	
	</div>
	<h2 class="faq-question">Wer prüft die Qualifikation der Ärzte?</h2>
	<p class="faq-answer">Die Auftraggeber müssen sich vor Beginn des ersten Arbeitstages alle nötigen Originalunterlagen sowie einen gültigen Personalausweis des Arztes vorlegen lassen. Auch wir fordern vor einer ersten Vermittlung bzw. der ersten Kontaktherstellung die nötigen Unterlagen als Kopien an, können jedoch nicht die Echtheit der vorgelegten Dokumente nachprüfen. Dies obliegt dem Auftraggeber.</p>
	<span class="headline-faq">Datenschutz</span>
	<h2 class="faq-question">Sind meine Daten sicher?</h2>
	<p class="faq-answer">Ihre personenbezogenen und medizinischen Daten sind bei uns sicher. Wir geben grundsätzlich keine Daten an unbeteiligte Dritte weiter. Gemäß § 33 Absatz 1 Bundesdatenschutzgesetz werden Ihre personenbezogenen Daten ausschließlich zum Geschäftszweck in maschinenlesbarer Form gespeichert und verarbeitet. Sie haben außerdem jederzeit die Möglichkeit, Ihre Daten unwiderruflich zu löschen.</p>
	<span class="headline-faq">Abrechnung</span>
	<h2 class="faq-question">Wie erfolgt die Abrechnung mit dem Arzt?</h2>
	<p class="faq-answer">Viele Ärzte, die sich über DOCVOCAT anmelden, übernehmen ihre Abrechnung selbst, so dass dies eine Verhandlungssache zwischen Ihnen und dem jeweiligen Auftraggeber ist. Üblich wird ein Zeitraum von zwei bis vier Wochen zur Abrechnung gewählt. Wir bieten den Ärzten in unserem Downloadbereich eine Vorlage für den Stundenabrechnungsbogen an. Dieser Stundenabrechnungsbogen sollte von einem Vertreter der Einrichtung (in der Regel der zuständige Ober- oder Chefarzt) unterschrieben werden.</p>
	<h2 class="faq-question">Wie hoch ist der übliche Honorarsatz?</h2>
	<div class="faq-answer">Dies richtet sich nach Ihrem persönlichen Aus- und Weiterbildungsstand. Als orientierende Beträge können die im Folgenden aufgeführten Stundensätze herangezogen werden. Je nach Auftrag und Qualifikation gibt es aber erhebliche Abweichungen.
	<ul>
		<li>Ärzte in Weiterbildung: ab 60€/h</li>
		<li>Fachärzte: ab 80€/h</li>
		<li>Notarztdienste: ab 30€/h</li>
		<li>Praxisvertretungen: ab 50€/h</li>
	</ul>
	Bereitschaftsdienste werden im Regelfall mit 80% der oben aufgeführten Sätze vergütet. Bezüglich der unterschiedlichen Dienststufen kann die folgende Tabelle aufgrund der sich ändernden Rechtsprechung nur als Orientierung gelten.
	</div>
	<h2 class="faq-question">Wer zahlt das Gehalt aus?</h2>
	<p class="faq-answer">Ärzte erhalten das Honorar direkt von der Einrichtung.</p>
	<span class="headline-faq">Versicherungen</span>
	<h2 class="faq-question">Was ist mit der Krankenversicherung?</h2>
	<p class="faq-answer">Als Freiberufler sind Ärzte nicht gesetzlich verpflichtet, sich zu versichern – die Krankenversicherung ist also freiwillig. Wir empfehlen jedoch unbedingt, eine Krankenversicherung abzuschließen.</p>
	<h2 class="faq-question">Was ist mit der Berufsgenossenschaft?</h2>
	<p class="faq-answer">Es besteht keine gesetzliche Pflicht, sich bei der Berufsgenossenschaft zu melden. Als Freiberufler haben Ärzte allerdings die Möglichkeit, sich bei der BG gegen Arbeits- und Wegeunfälle zu versichern. Auch zusätzlich zur Unfallversicherung hat eine Absicherung über die Berufsgenossenschaft ihre Vorteile. Die Vorteile liegen in der Therapie und Rehabilitation und somit der kompletten medizinischen und rehabilitativen Behandlung eines Arbeitsunfalles während der Ausübung der freiberuflichen Tätigkeit oder eines Wegeunfalls. Als Arbeitsunfall gelten auch Unfälle bei Fort- und Weiterbildungsmaßnahmen. Folgende grobe Unterscheidung kann getroffen werden: Die private Unfallversicherung zahlt bei Dauerinvalidität aufgrund (teilweisen) Verlusts von Gliedmaßen, die Haftpflicht springt bei einer unfallbedingten Erwerbsunfähigkeit im Beruf ein und die Berufsgenossenschaft zahlt bei Minderung der Erwerbsfähigkeit auf dem allgemeinem Arbeitsmarkt.</p>
	<h2 class="faq-question">Was ist mit der Arbeitslosenversicherung?</h2>
	<p class="faq-answer">Diese ist vom Gesetzgeber nur für angestellte Beschäftigte vorgeschrieben! Als Freiberufler besteht allerdings kein Angestelltenverhältnis im rechtlichen Sinn, so dass für Ärzte eine entsprechende Absicherung durch Bildung von Rücklagen sehr empfehlenswert ist.</p>
	<h2 class="faq-question">Was ist mit der Rentenversicherung?</h2>
	<p class="faq-answer">Bis zu einer Beitragsbemessungsgrenze sind Ärzte gesetzlich dazu verpflichtet, aus Einkünften, die aus ärztlicher Tätigkeit bezogen werden, Abgaben zur Rentenversicherung zu zahlen. Sie sind verpflichtet, orientierend an Ihren Einkünften aus ihrer ärztlichen Tätigkeit Abgaben an das für sie zuständige Versorgungswerk (Ärzteversorgung Ihres Bundeslandes) zu leisten.</p>
	<h2 class="faq-question">Was ist mit der Haftpflichtversicherung?</h2>
	<p class="faq-answer">Es ist allgemein üblich, dass sich Freiberufler selbst gegen Haftpflichtschäden versichern.</p>
	<h2 class="faq-question">Was ist mit der Unfallversicherung?</h2>
	<p class="faq-answer">Als Freiberufler sind Ärzte selbst für Ihre Absicherung verantwortlich. Wie oben schon beschrieben können Sie sich außerdem freiwillig bei der Berufsgenossenschaft versichern.</p>
	<span class="headline-faq">Selbstständigkeit</span>
	<h2 class="faq-question">Wie sieht es mit den Steuern aus?</h2>
	<p class="faq-answer">Als freiberuflich tätiger Arzt muss man kein Gewerbe anmelden aber sich grundsätzlich beim Finanzamt melden. Einen entsprechenden Antrag können Sie im Downloadbereich unserer Homepage herunterladen. In Abhängigkeit von dem Finanzamt, bei dem Sie gemeldet sind, erhalten Sie eine neue Steuernummer. Die Höhe der Steuern, die Sie zu zahlen haben, sind abhängig von Ihrem Einkommen. Sie sollten auf jeden Fall zuvor Rücksprache mit Ihrem Steuerberater halten und Rücklagen für Nachzahlungen bilden, da Steuern erst im Nachhinein erhoben werden. Ärztliche Heilbehandlungen sind per Gesetz von der Umsatzsteuerpflicht ausgenommen (UStG §4 Abs. 14). 
Umsatzsteuerpflichtig sind ärztliche Tätigkeiten, die nicht als Heilbehandlungen anzusehen sind, z.B. Beratungsleistungen oder Schönheitschirurgie. Zusammenfassend lässt sich sagen: Ausübende der klassischen freien Berufe zahlen keine Gewerbesteuer, da sie keine Unternehmer im Sinne von §5 Abs.1/S.1 Gewerbesteuergesetz sind. Nichts desto trotz sind sie aber umsatz- und einkommensteuerpflichtig, wobei in erster Hinsicht das Finanzamt entscheidet, ob eine selbständig ausgeübte Tätigkeit gewerblich oder freiberuflich anzusehen ist.
</p>
	<h2 class="faq-question">Was muss ich zur Scheinselbstständigkeit wissen?</h2>
	<p class="faq-answer">Von Scheinselbstständigkeit spricht man, wenn sich eine freiberufliche Tätigkeit nicht von der Tätigkeit eines Angestellten unterscheiden lässt. Der Begriff hat einen arbeitsrechtlichen und einen sozialrechtlichen Aspekt. Von Interesse ist für Honorarärzte insbesondere der sozialrechtliche Aspekt, da es hier um die Frage geht, ob für eine erbrachte Leistung Sozialabgaben (Kranken-, Renten- und Arbeitslosenversicherung) gezahlt werden müssen. Eine evtl. Überprüfung erfolgt durch die Deutsche Rentenversicherung. Die Abgaben werden in erster Linie vom Auftraggeber (also nicht vom Honorararzt) nachgefordert. Im Zweifelsfall können Auftraggeber oder Auftragnehmer eine Überprüfung bei der Deutschen Rentenversicherung beantragen. Sollte die Deutsche Rentenversicherung von einer Scheinselbstständigkeit ausgehen, beginnt die Betragspflichtigkeit erst mit Zugang des Bescheids. Einspruch und Rechtsweg sind möglich. Insgesamt geht es also hierbei um die Frage, ob es sich bei dem jeweiligen Dienstverhältnis um ein sozialversicherungspflichtiges Beschäftigungsverhältnis handelt. Das Risiko besteht vor allem für den Auftraggeber, der dann Sozialversicherungsbeiträge und Lohnsteuern nachzahlen muss.</p>
	<h2 class="faq-question">Bei welcher Ärztekammer muss ich  mich melden?</h2>
	<p class="faq-answer">Grundsätzlich müssen Sie sich bei der zuständigen Ärztekammer in dem Bezirk, wo Sie eine Vertretung machen, melden.  Es gibt Bestrebungen eine bundesweite Ärztemitgliedschaft einzuführen, aber bisher gilt noch oben beschriebene Regelung.</p>
	<h2 class="faq-question">Lässt sich eine Tätigkeit als Honorararzt für eine Facharztweiterbildung anerkennen?</h2>
	<p class="faq-answer">Die Grundsätze für die Facharztausbildung sind in der Weiterbildungsordnung der jeweiligen Landesärztekammer geregelt. Wenn eine Tätigkeit als Honorararzt den Anforderungen der Weiterbildungsordnung entspricht, wäre eine Anerkennung theoretisch möglich.
Um eine Tätigkeit anerkennen zu lassen, wird ein Zeugnis des jeweiligen Chefarztes benötigt. Das Zeugnis wird der Chefarzt in der Regel nur für einen angestellten Arzt ausstellen. Als weitere Mindestvoraussetzung muss die Tätigkeit laut Weiterbildungsordnung in den meisten Fällen mindestens sechs Monate betragen. 
</p>
	</div>
		</div>
		<footer>
<?php include("includes/footer.inc.php");?>
		</footer>
	</div>
</body>
</html>