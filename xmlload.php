<!DOCTYPE html>

<meta charset="utf-8">

<title>XML to Fpdf</title>
<!--
  DO NOT SIMPLY COPY THOSE LINES. Download the JS and CSS files from the
  latest release (https://github.com/enyo/dropzone/releases/latest), and
  host them yourself!
-->
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

<form action="#" method="POST" enctype="multipart/form-data" class="dropzone">
<input hidden="true" type="file" name="file" />
<input type="submit" value="Enviar">
</form>
<?php
   if(isset($_FILES['file']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['file']['name'],-4)); //Pegando extensão do arquivo
      $name_old = "estruturaFPDF" . $ext;
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads

      //move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
      move_uploaded_file($_FILES['file']['tmp_name'], $dir.$name_old);
      //var_dump($dir.$name_old);
      //$xml = file_get_contents($dir.$name_old.".xml");
      $teste = "Teste!";
      $xml = '<?xml version="1.0" encoding="UTF-8"?>
      <?mso-application progid="Excel.Sheet"?><Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:c="urn:schemas-microsoft-com:office:component:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:x2="http://schemas.microsoft.com/office/excel/2003/xml" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office"><Colors><Color><Index>3</Index><RGB>#c0c0c0</RGB></Color><Color><Index>4</Index><RGB>#ff0000</RGB></Color></Colors></OfficeDocumentSettings><ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel"><WindowHeight>9000</WindowHeight><WindowWidth>13860</WindowWidth><WindowTopX>240</WindowTopX><WindowTopY>75</WindowTopY><ProtectStructure>False</ProtectStructure><ProtectWindows>False</ProtectWindows></ExcelWorkbook><Styles><Style ss:ID="Default" ss:Name="Default"/><Style ss:ID="Result" ss:Name="Result"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/></Style><Style ss:ID="Result2" ss:Name="Result2"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/><NumberFormat ss:Format="Currency"/></Style><Style ss:ID="Heading" ss:Name="Heading"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></Style><Style ss:ID="Heading1" ss:Name="Heading1"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></Style><Style ss:ID="co1"/><Style ss:ID="co2"/><Style ss:ID="co3"/><Style ss:ID="co4"/><Style ss:ID="co5"/><Style ss:ID="co6"/><Style ss:ID="co7"/><Style ss:ID="ta1"/></Styles><ss:Worksheet ss:Name="Planilha1"><Table ss:StyleID="ta1"><Column ss:Width="28.9417"/><Column ss:Width="57.2031"/><Column ss:Width="54.8504"/><Column ss:Width="55.5874"/><Column ss:Width="85.4079"/><Column ss:Width="144.1417"/><Column ss:Span="1" ss:Width="64.0063"/><Row ss:AutoFitHeight="0" ss:Height="12.8126"><Cell><Data ss:Type="String">Nome</Data></Cell><Cell><Data ss:Type="String">Peso</Data></Cell><Cell><Data ss:Type="String">Altura</Data></Cell><Cell><Data ss:Type="String">Idade</Data></Cell><Cell><Data ss:Type="String">Telefone</Data></Cell><Cell><Data ss:Type="String">Email</Data></Cell><Cell ss:Index="8"/></Row><Row ss:AutoFitHeight="0" ss:Height="12.8126"><Cell><Data ss:Type="String">Florisvaldo da Silva</Data></Cell><Cell><Data ss:Type="Number">1</Data></Cell><Cell><Data ss:Type="Number">2</Data></Cell><Cell><Data ss:Type="Number">3</Data></Cell><Cell><Data ss:Type="Number">4</Data></Cell><Cell ss:HRef="mailto:teste@teste.com.br"><Data ss:Type="String">teste@teste.com.br</Data></Cell><Cell ss:Index="8"/></Row><Row ss:Height="12.8126"><Cell ss:Index="8"/></Row><Row ss:Index="5" ss:Height="12.8126"><Cell ss:Index="8"><Data ss:Type="Number">28337.962037962</Data></Cell></Row></Table><x:WorksheetOptions/></ss:Worksheet></Workbook>'; 
     
      $seach = '<workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:c="urn:schemas-microsoft-com:office:component:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:x2="http://schemas.microsoft.com/office/excel/2003/xml" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><officedocumentsettings xmlns="urn:schemas-microsoft-com:office:office"><colors><color><index>3</index><rgb>#c0c0c0</rgb></color><color><index>4</index><rgb>#ff0000</rgb></color></colors></officedocumentsettings><excelworkbook xmlns="urn:schemas-microsoft-com:office:excel"><windowheight>9000</windowheight><windowwidth>13860</windowwidth><windowtopx>240</windowtopx><windowtopy>75</windowtopy><protectstructure>False</protectstructure><protectwindows>False</protectwindows></excelworkbook><styles><style ss:id="Default" ss:name="Default"><Style ss:ID="Result" ss:Name="Result"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/></style><style ss:id="Result2" ss:name="Result2"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/><NumberFormat ss:Format="Currency"/></style><style ss:id="Heading" ss:name="Heading"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></style><style ss:id="Heading1" ss:name="Heading1"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></style><style ss:id="co1"><Style ss:ID="co2"/><Style ss:ID="co3"/><Style ss:ID="co4"/><Style ss:ID="co5"/><Style ss:ID="co6"/><Style ss:ID="co7"/><Style ss:ID="ta1"/></Styles><ss:Worksheet ss:Name="Planilha1"><Table ss:StyleID="ta1">';
      //$col = str_replace($seach, "", $xml);
      $buscaTeste = "e";
      $subtituaPor = " ";
      $vowels = array('<?xml version="1.0" encoding="UTF-8"?>
      <?mso-application progid="Excel.Sheet"?><Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:c="urn:schemas-microsoft-com:office:component:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:x2="http://schemas.microsoft.com/office/excel/2003/xml" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office"><Colors><Color><Index>3</Index><RGB>#c0c0c0</RGB></Color><Color><Index>4</Index><RGB>#ff0000</RGB></Color></Colors></OfficeDocumentSettings><ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel"><WindowHeight>9000</WindowHeight><WindowWidth>13860</WindowWidth><WindowTopX>240</WindowTopX><WindowTopY>75</WindowTopY><ProtectStructure>False</ProtectStructure><ProtectWindows>False</ProtectWindows></ExcelWorkbook><Styles><Style ss:ID="Default" ss:Name="Default"/><Style ss:ID="Result" ss:Name="Result"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/></Style><Style ss:ID="Result2" ss:Name="Result2"><Font ss:Bold="1" ss:Italic="1" ss:Size="10" ss:Underline="Single"/><NumberFormat ss:Format="Currency"/></Style><Style ss:ID="Heading" ss:Name="Heading"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></Style><Style ss:ID="Heading1" ss:Name="Heading1"><Font ss:Bold="1" ss:Italic="1" ss:Size="16"/></Style><Style ss:ID="co1"/><Style ss:ID="co2"/><Style ss:ID="co3"/><Style ss:ID="co4"/><Style ss:ID="co5"/><Style ss:ID="co6"/><Style ss:ID="co7"/><Style ss:ID="ta1"/></Styles><ss:Worksheet ss:Name="Planilha1"><Table ss:StyleID="ta1">','<Row ss:AutoFitHeight="0" ss:Height="12.8126"><Cell><Data ss:Type="String">Nome</Data></Cell><Cell><Data ss:Type="String">Peso</Data></Cell><Cell><Data ss:Type="String">Altura</Data></Cell><Cell><Data ss:Type="String">Idade</Data></Cell><Cell><Data ss:Type="String">Telefone</Data></Cell><Cell><Data ss:Type="String">Email</Data></Cell><Cell ss:Index="8"/></Row><Row ss:AutoFitHeight="0" ss:Height="12.8126"><Cell><Data ss:Type="String">Florisvaldo da Silva</Data></Cell><Cell><Data ss:Type="Number">1</Data></Cell><Cell><Data ss:Type="Number">2</Data></Cell><Cell><Data ss:Type="Number">3</Data></Cell><Cell><Data ss:Type="Number">4</Data></Cell><Cell ss:HRef="mailto:teste@teste.com.br"><Data ss:Type="String">teste@teste.com.br</Data></Cell><Cell ss:Index="8"/></Row><Row ss:Height="12.8126"><Cell ss:Index="8"/></Row><Row ss:Index="5" ss:Height="12.8126"><Cell ss:Index="8"><Data ss:Type="Number">28337.962037962</Data></Cell></Row></Table><x:WorksheetOptions/></ss:Worksheet></Workbook>');
      
      $onlyconsonants = str_replace($vowels, "", $xml);
      var_dump($onlyconsonants);
      //print_r($xml->Column);
   }
?>
