 
<?php
require('fpdf/fpdf.php');


$conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
$sql = "select *from register";
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

$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(25,6,'First Name',1,0,'C',1);
$pdf->SetX(45);
$pdf->Cell(25,6,'Last Name',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(35,6,'EPIC_Number',1,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(30,6,'Mobile No',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(30,6,'E-mail ID',1,0,'C',1);
$pdf->SetX(165);
$pdf->Cell(30,6,'Password',1,0,'C',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);
$pdf->MultiCell(25,6,$column_fname,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(25,6,$column_lname,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(35,6,$column_epic,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(105);
$pdf->MultiCell(30,6,$column_mobile,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_Email,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(165);
$pdf->MultiCell(30,6,$column_Password,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(195);
$i = 0;

$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(20);
    $pdf->MultiCell(175,6,'',1);
    $i = $i +1;
}

$pdf->Output();
