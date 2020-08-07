
<?php 
  
  include 'fpdf/fpdf.php';
  include 'conexao.php';
  if (isset($_POST['btn_bd'])){
    $id = mysqli_escape_string($conn, $_POST['id']);
    $sqt = "SELECT * FROM obtidos Where id = '$id'";
    $pdf = new FPDF ;
    $pdf -> AddPage('PORTRAIT', 'A4');
    $pdf -> Image('logo.png',180, 25, 18, 20, 'png');
    $pdf -> SetFont('ARIAL','',13);
    $pdf -> Write(5, date("d-m-Y"));
    $pdf -> Cell(150,15,utf8_decode('RECIBO DE ENTREGA DE DOCUMENTOS'),0,0,"C");
    $pdf -> Ln(15);

    if ($results = mysqli_query($conn, $sqt)){ 
      while ($fila = mysqli_fetch_assoc($results)){
        $pdf ->SetFont("ARIAL","",10);
        $pdf->Write(5,"Nome: ".utf8_decode($fila["nome"]));
          $pdf -> Ln();
        $pdf->Write(5,"Tipo: ".utf8_decode($fila["tipo"]));
          $pdf -> Ln();
        $pdf->Write(5,"Provinca que encontramos: ".utf8_decode($fila["provincia"]));
          $pdf -> Ln();
        $pdf->Write(5,"Data que encontramos: ".utf8_decode($fila["data"]));
          $pdf -> Ln();
        $pdf->Write(5,utf8_decode("Unidade onde esteve o documento: ".$fila["unidade"]));
          $pdf -> Ln(15);
          $pdf -> Cell(200,10,utf8_decode('O Agente'),0,0,"C");$pdf -> Ln();
          $pdf -> Cell(200,10,utf8_decode('________________________________________'),25,0,"C");



    
    }
    }
   }$pdf -> Output();
?>




