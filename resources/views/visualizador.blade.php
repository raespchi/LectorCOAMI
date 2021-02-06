@section('title', 'Visualizador de XML')

@extends('layout')

@section('content')

<?php $destino = '../public/xml/'.$ano.'/'.$tipo.'/'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../public">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visualizador</li>
  </ol>
</nav>

<font color="#24AAFF"><h2><?PHP echo "CFDI ".$tipo. " de el cliente con RFC " .$rfc. " del mes de " .$mes?></h2></font>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Egresos</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ingresos</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Nómina</a>
    <a class="nav-item nav-link" id="nav-pagos-tab" data-toggle="tab" href="#nav-pagos" role="tab" aria-controls="nav-pagos" aria-selected="false">Pagos</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">

<!-- PRIMEROOOOOOOOOOOOOOOOOOOOOOOOO -->
  
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<?php

if(is_dir($destino)){
        if($dir = opendir($destino)){
            while(($archivo = readdir($dir)) !== false){               
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){                    
        
        libxml_use_internal_errors(true); 
try{ 
        $xml = new SimpleXMLElement ($destino.'/'.$archivo,null,true);
        $namespaces = $xml->getDocNamespaces();

        $dom = new DOMDocument('1.0','utf-8'); 
        $dom->load($destino.'/'.$archivo);      


foreach ($xml->xpath('//cfdi:Comprobante') as $tipo){ 
  foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){
    if ($tipo['TipoDeComprobante'] == "E" && $Emisor['Rfc'] == $rfc){      
    
      foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/TimbreFiscalDigital', '*') as $uuid) 
      {          
      echo $uuid->getAttribute('UUID').'</br>';          
      }        
    } 
  }
}
}      
catch (Exception $e){  } 
        }
      } 
        }
    closedir($dir);
    }            
?>

</div>

<!-- SEGUNDOOOOOOOOOOOOOOOOOOOOOOOOO -->

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

<?PHP

 if(is_dir($destino)){
        if($dir = opendir($destino)){
            while(($archivo = readdir($dir)) !== false){               
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){                    
        
        libxml_use_internal_errors(true); 
try{ 
        $xml = new SimpleXMLElement ($destino.'/'.$archivo,null,true);
        $namespaces = $xml->getDocNamespaces();

        $dom = new DOMDocument('1.0','utf-8'); 
        $dom->load($destino.'/'.$archivo);      


foreach ($xml->xpath('//cfdi:Comprobante') as $tipo){ 
 foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){
    if ($tipo['TipoDeComprobante'] == "I" && $Emisor['Rfc'] == $rfc){   
    foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/TimbreFiscalDigital', '*') as $uuid) 
        {   
        echo $uuid->getAttribute('UUID').'</br>';          
        }   
  }    

}
}
}
      
catch (Exception $e){  } 
        }
      } 
        }
    closedir($dir);
    }            
?>

</div>

<!-- TERCEROOOOOOOOOOOOOOOO -->

<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


<table class="table table-hover table-bordered" id="xml" class="display">
    <thead>
      <tr>
        <th>PRODUCTO</th>    
        <th>UUID</th>
        <th>RFC</th>    
        <th>EMPLEADO</th>
        <th>PUESTO</th>        
        <th>PERCEPCIONES</th>    
        <th>NETO</th>
        <th>FECHA PAGO</th>
        <th>F.I. PAGO</th>
        <th>F.F. PAGO</th>                        
      </tr>
    </thead>    
<tbody>  

<?php
 if(is_dir($destino)){
        if($dir = opendir($destino)){
            while(($archivo = readdir($dir)) !== false){               
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){                    
        
        libxml_use_internal_errors(true); 
try{ 
        $xml = new SimpleXMLElement ($destino.'/'.$archivo,null,true);
        $namespaces = $xml->getDocNamespaces();

        $dom = new DOMDocument('1.0','utf-8'); 
        $dom->load($destino.'/'.$archivo);      


foreach ($xml->xpath('//cfdi:Comprobante') as $tipo){ 

 foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){
    if ($tipo['TipoDeComprobante'] == "N" && $Emisor['Rfc'] == $rfc){   
     foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Concepto') as $Concepto)
        {
        foreach ($xml->xpath('//cfdi:Comprobante') as $Total)
        {
        foreach ($xml->xpath('//nomina12:Nomina') as $Fechas)
        {                 
                
            echo '<tr>';
            echo '<td>'.$Fechas['TipoNomina'].'</td>';
            foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/TimbreFiscalDigital', '*') as $elemento) 
            {                 
            echo '<td>'.$elemento->getAttribute('UUID').'</td>';  
            }   
            foreach ($xml->xpath('//cfdi:Comprobante//nomina12:Receptor') as $Pues)
            {            
            foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor)
            {    

            echo '<td>'.$Receptor['Rfc'].'</td>';
            echo '<td>'.$Receptor['Nombre'].'</td>';  
            echo '<td>'.$Pues['Puesto'].'</td>';                    
            echo '<td>$'.$Concepto['Importe'].'</td>';                                                         
            echo '<td>$'.$Total['Total'].'</td>';
            echo '<td>'.$Fechas['FechaPago'].'</td>';
            echo '<td>'.$Fechas['FechaInicialPago'].'</td>';
            echo '<td>'.$Fechas['FechaFinalPago'].'</td>';
           
            }                   
            
         
       }  
       echo '</tr>';
}
}
      }//cierra foreach
  }    
}
}
}
      
catch (Exception $e){  } 
        }
      } 
        }
    closedir($dir);
    }            
?>
    

</tbody>
</table>
</div>

<!-- CUARTOOOOOOOOOOOOOOOO -->
  <div class="tab-pane fade" id="nav-pagos" role="tabpanel" aria-labelledby="nav-pagos-tab">    

<?PHP

 if(is_dir($destino)){
        if($dir = opendir($destino)){
            while(($archivo = readdir($dir)) !== false){               
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){                    
        
        libxml_use_internal_errors(true); 
try{ 
        $xml = new SimpleXMLElement ($destino.'/'.$archivo,null,true);
        $namespaces = $xml->getDocNamespaces();

        $dom = new DOMDocument('1.0','utf-8'); 
        $dom->load($destino.'/'.$archivo);      


foreach ($xml->xpath('//cfdi:Comprobante') as $tipo){ 
  foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){
    if ($tipo['TipoDeComprobante'] == "P" && $Emisor['Rfc'] == $rfc){   
      foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/TimbreFiscalDigital', '*') as $uuid) 
      {   
        echo $uuid->getAttribute('UUID').'</br>';         
      }   
    }    
  }
}
}      
catch (Exception $e){  } 
    }
      } 
        }
    closedir($dir);
    }            
?>


</div>

@endsection
