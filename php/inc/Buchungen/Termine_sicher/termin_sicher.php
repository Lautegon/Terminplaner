<?php
	
		$start = new DateTime('NOW');
		$start->add(new DateInterval('P1D'));
		$stopp = new DateTime('NOW');
		$stopp->add(new DateInterval('P8D'));
		
		$pdfAuthor = "Cananga Thaimassage";

		
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($start, $interval, $stopp);
		
		foreach ($period as $dt) {
			$abfrage_ID = $dt->format("ymd");
			$abfrage_IDS[] = $abfrage_ID;
		}
		//print_r ($abfrage_IDS);
		include "../../dbNew.php";
		
		$stmt_vorschau = $dbNew->prepare("Select * FROM buchungen where id LIKE ? ORDER BY id");

		
		$html = '';
		
			foreach ($abfrage_IDS as $vid) {
					$jahr = "20".substr("$vid", 0, 2);
					$monat = substr("$vid", 2, 2);
					$day = substr("$vid", 4, 2);
								
					$suchVar = $vid."%";
						$stmt_vorschau->execute(array($suchVar));
							$vorschau = $stmt_vorschau->fetchAll(PDO::FETCH_GROUP);
					//print_r($vorschau);
				$html .= '<table border="1" cellpadding="6" cellspacing="0" style="width: 100%; font-size: 8pt;"><tr><th style="font-size: 11pt; text-align: center; color: red; ">'.$day.'.'.$monat.'.'.$jahr.'</th></tr>
<tr><th style="width: 8%; font-weight: bold;">Uhrzeit</th><th style="width: 6%; font-weight: bold;">Raum</th><th style="width: 17%; font-weight: bold;">Massage</th><th style="width: 6%; font-weight: bold;">Dauer</th><th style="width: 9%; font-weight: bold;">Masseurin</th><th style="width: 9%; font-weight: bold;">Masseurin</th><th style="width: 22%; font-weight: bold;">Name</th><th style="width: 16%; font-weight: bold;">Telefon</th><th style="width: 7%; font-weight: bold;">Preis</th></tr>';

						foreach ($vorschau as $zeit => $value) {
							$raum = substr("$zeit", 6, 1);
							$stunde = substr("$zeit", 7, 2);
							$minute = substr("$zeit", 9, 2);
							$html .='<tr><td>'.$stunde.':'.$minute.'</td><td>'.$raum.'</td><td>'.$value[0]['massageart'].'</td><td>'.$value[0]['dauer'].'</td><td>'.$value[0]['masseurin_1'].'</td><td>'.$value[0]['masseurin_2'].'</td><td>'.$value[0]['vorname'].'  '.$value[0]['nachname'].'</td><td>'.$value[0]['telefon'].'</td><td>'.$value[0]['Preis'].'</td></tr>';
						}
					$html .= '</table>';
			}
			
//////////////////////////// Erzeugung PDF Dokuments \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 
// TCPDF Library laden
require_once('../../tcpdf_min/tcpdf.php');


 
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        
		// Title
        $image_file = K_PATH_IMAGES.'logo.jpg';
		        // Set font
		$this->SetFont('helvetica', 'B', 18);
        $this->Cell(0, 15, 'Termine', 0, false, 'L', 0, '', 0, false, 'M', 'B');
		// Logo
        $this->Image($image_file, 10, 2, 22, '', 'JPG', '', 'T', false, 300, 'R', false, false, 0, false, false, false);


    }

    // Page footer
     public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
		//Anschrift
		$html = '<table>
					<tr><td style="width: 30%;">Cananga Thaimassage</td><td style="width: 50%;">Mail: info@canangathaimassage-herzogenaurach.de</td><td style="width: 20%;"> </td></tr>
					<tr><td>Röntgenstraße 24</td><td>Tel.: 0 91 32 / 7 91 86 00</td><td> </td></tr>
					<tr><td>91074 Herzogenaurach</td><td>Steuernr.: 123456789123</td><td style="text-align: right;">Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages().' </td></tr>
				</table>';
			
		//$this->Cell(10, 0, 'Cananga Thaimassage', 0, false, 'C', 0, '', 0, false, 'T', 'M');
		//$this->Cell(5, 8, 'Röntgenstraße 24', 0, false, 'C', 0, '', 0, false, 'T', 'M');
		//$this->Cell(0, 16, '91123 Herzogenaurach', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        // Page number
		$this->writeHTML($html, true, false, true, false, '');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Cananga Thaimassage');
//$pdf->SetTitle('TCPDF Example 003');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set Footer off
//$pdf->SetPrintFooter(false);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(8, 20, 8);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetHeaderMargin(10, PDF_MARGIN_TOP, 10);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);
 
// Image Scale 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
// Schriftart
$pdf->SetFont('helvetica', '', 6);
 
// Neue Seite
//$pdf->AddPage('P', 'A4');
$pdf->AddPage();
 
// Fügt den HTML Code in das PDF Dokument ein
$pdf->writeHTML($html, true, false, true, false, '');
 
//Ausgabe der PDF
 
//Variante 1: PDF direkt an den Benutzer senden:
$pdf->Output('Termine Vorschau', 'I');
 
//Variante 2: PDF im Verzeichnis abspeichern:
//$pdf->Output(dirname(__FILE__).'/'.$pdfName, 'F');
//echo 'PDF herunterladen: <a href="'.$pdfName.'">'.$pdfName.'</a>';

			

?>