<?php

require('fpdf/fpdf.php');

function imprimir($valor){

    
    $pdf = new FPDF();

    $pdf->AddPage();
    
    $pdf->SetFont('Arial','B',16);
    
    $pdf->SetDrawColor(146,146,151);
    
    $pdf->SetFillColor(146,146,151);
    
    $pdf->Rect(60,5,10,5, ($valor >= 0 && $valor <= 20) ? 'DF' : 'D');
    
     
    $pdf->SetDrawColor(146,146,151);
    
    $pdf->SetFillColor(146,146,151);
    
    $pdf->Rect(72,5,10,5,($valor >= 21 && $valor <= 40) ? 'DF' : 'D');
    
     
    
    $pdf->SetDrawColor(146,146,151);
    
    $pdf->SetFillColor(146,146,151);
    
    $pdf->Rect(84,5,10,5,($valor >= 41 && $valor <= 60) ? 'DF' : 'D');
    
     
    
    $pdf->SetDrawColor(146,146,151);
    
    $pdf->SetFillColor(146,146,151);
    
    $pdf->Rect(96,5,10,5,($valor >= 61 && $valor <= 80) ? 'DF' : 'D');
    
     
    
    $pdf->SetDrawColor(146,146,151);
    
    $pdf->SetFillColor(146,146,151);
    
    $pdf->Rect(108,5,10,5,($valor >= 81 && $valor <= 100) ? 'DF' : 'D');
    
     
    
    $pdf->Output();   
}

$valor = $_POST['valor'];

imprimir($valor);