<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(80,10,'REGISTRATION FORM',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
$sql = "select *from register where Email='a@gmail.com'";
$result = mysqli_query($conn, $sql);

$number_of_products = mysqli_num_rows($result);

//Initialize the 3 columns and the total
$column_fname = "";
$column_lname = "";
$column_epic = "";
$column_mobile = "";
$column_Email = "";
$column_Password = "";

//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{

  $fname=$row["F_Name"];
  $lname=$row["L_Name"];
  $epic = $row["EPIC_Number"];
  $mobile =$row["Mobile_No"];
  $Email=$row["Email"];
  $pass=$row["Password"];
  
  
  $column_fname = $column_fname.$fname."\n";
  $column_lname = $column_lname.$lname."\n";
  $column_epic  = $column_epic.$epic."\n"; 
  $column_mobile= $column_mobile.$mobile."\n";
  $column_Email = $column_Email.$Email."\n";
  $column_Password=$column_Password.$pass."\n"; 


}
mysqli_close($conn);

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',12);
 
$pdf->sety(50);
$pdf->SetX(70);
$pdf->Cell(30,1,'Name ',0,0,'L',1);
$pdf->SetX(110);
$pdf->Cell(10,1,"-",0,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(10,1,$column_fname,0,0,'L',1);
$pdf->SetX(130);
$pdf->Cell(10,1,$column_lname,0,0,'L',1);

$pdf->sety(60);
$pdf->SetX(70);
$pdf->Cell(30,1,'EPIC Number ',0,0,'L',1);
$pdf->SetX(110);
$pdf->Cell(10,1,"-",0,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(10,1,$column_epic,0,0,'L',1);

$pdf->sety(70);
$pdf->SetX(70);
$pdf->Cell(30,1,'Mobile No',0,0,'L',1);
$pdf->SetX(110);
$pdf->Cell(10,1,"-",0,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(10,1,$column_mobile,0,0,'L',1);

$pdf->sety(80);
$pdf->SetX(70);
$pdf->Cell(30,1,'E-mail ID ',0,0,'L',1);
$pdf->SetX(110);
$pdf->Cell(10,1,"-",0,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(10,1,$column_Email,0,0,'L',1);

$pdf->sety(90);
$pdf->SetX(70);
$pdf->Cell(30,1,'Password ',0,0,'L',1);
$pdf->SetX(110);
$pdf->Cell(10,1,"-",0,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(10,1,$column_Password,0,0,'L',1);
$pdf->Output('my_profile.pdf','I');
 ?>
 