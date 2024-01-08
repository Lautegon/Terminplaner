<?php
		$kb_all_day = $_POST['kb_all_day'];
		//$kb_day = $_POST['kb_day'];
		//$kb_ma_pdf_all = $_POST['kb_ma_pdf_all'];
		//$kb_Sma_pdf = $_POST['kb_Sma_pdf'];
		// $zeile_kbEinth = $_POST['zeile_kbEinth'];
		// $zeile_kbEinB = $_POST['zeile_kbEinB'];
		// $zeile_kbEinC = $_POST['zeile_kbEinC'];
		// $zeile_kbAusth = $_POST['zeile_kbAusth'];
		// $zeile_kbAusB = $_POST['zeile_kbAusB'];
		// $zeile_kbAusC = $_POST['zeile_kbAusC'];
		// $zeile_gsEingth = $_POST['zeile_gsEingth'];
		// $zeile_gsEingB = $_POST['zeile_gsEingB'];
		// $zeile_gsEingC = $_POST['zeile_gsEingC'];
		// $zeile_gsVerkth = $_POST['zeile_gsVerkth'];
		// $zeile_gsVerkB = $_POST['zeile_gsVerkB'];
		// $zeile_gsVerkC = $_POST['zeile_gsVerkC'];
		$titel = $_POST['titel'];


$pdfAuthor = "Cananga Thaimassage";


$html = '<style>
table { width: 100%; }
th { font-weight: bold; }
.th_1 { font-size: 12pt; color: red; text-align: center; }
.th_2 { font-size: 7pt; font-weight: bold; color: green; }
.trenner_summe { border: 1px solid green; }
.trenner_end { line-height: 1px; background-color: #BDCCD4; border-bottom: 1px double red; }
.storno { text-decoration: line-through red; font-style: italic; }
.ein_minus { color: blue; }
.aus_null { color: orange; }
.gutscheintausch { color: green; }
</style>';	

$html .= '<table border="1" cellpadding="2" cellspacing="0">';
$html .= $kb_all_day;
//$html .= $kb_ma_pdf_all;
$html .= '</table>';
// $html .= "<p>&nbsp;</p>";
// $html .= $zeile_kbEinth.$zeile_kbEinB.$zeile_kbEinC;
// $html .= "<p>&nbsp;</p>";
// $html .= $zeile_kbAusth.$zeile_kbAusB.$zeile_kbAusC;
// $html .= "<p>&nbsp;</p>";
// $html .= $zeile_gsEingth.$zeile_gsEingB.$zeile_gsEingC;
// $html .= "<p>&nbsp;</p>";
// $html .= $zeile_gsVerkth.$zeile_gsVerkB.$zeile_gsVerkC;





$pdfName = $titel;
					
//////////////////////////// Erzeugung PDF Dokuments \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 
// TCPDF Library laden
require_once('tcpdf_min/tcpdf.php');
 
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {

		// Title
        $image_file = K_PATH_IMAGES.'logo.jpg';
		        // Set font
		$this->SetFont('helvetica', 'B', 18);
        $this->Cell(0, 15, '', 0, false, 'L', 0, '', 0, false, 'M', 'B');
		// Logo
        $this->Image($image_file, 10, 3, 22, '', 'JPG', '', 'T', false, 300, 'R', false, false, 0, false, false, false);
		
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
$pdf->SetMargins(15, 30, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetHeaderMargin(30, 30, 30);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(true, 25);
 
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
$pdf->Output($titel, 'I');
 
?>


				
