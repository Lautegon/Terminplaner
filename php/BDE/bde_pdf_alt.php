<?php
		$zeile_th = $_POST['zeile_th'];
			//echo $zeile_th."<br />";
		$zeile_B = $_POST['zeile_B'];
			//echo $zeile_B."<br />";
		$zeile_C = $_POST['zeile_C'];
			//echo $zeile_C."<br />";
		$start = $_POST['start'];
			//echo $start."<br />";
		$stopp = $_POST['stopp'];
			//echo $stopp."<br />";
		$titel = $_POST['titel'];
			//echo $titel."<br />";
		$pdfName = $_POST['pdfName'];
		
	if (isset($_POST['zeile_th_E'])) {
		$zeile_E = $_POST['zeile_th_E'];
		//echo $zeile_E;
	}
	
	if (isset($_POST['zeile_F'])) {
		$zeile_F = $_POST['zeile_F'];
		//echo $zeile_F;
	}
		

$pdfAuthor = "Cananga Thaimassage";


		
$html = $zeile_th.$zeile_B.$zeile_C;

	if (isset($zeile_E, $zeile_F)) {
		$html .= $zeile_E.$zeile_F;
	}






//$pdfName = $pdfName_1;
					
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
$pdf->SetAutoPageBreak(TRUE, 25);
 
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
$pdf->Output($pdfName, 'I');
 
?>


				
