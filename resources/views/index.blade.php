@section('title', 'Inicio')

@extends('layout')

@section('content')
					

          
<?php
    $mes_text = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");   
    $mes_num = array("01","02","03","04","05","06","07","08","09","10","11","12");   
?>

<div class="abs-center">
    <form method="post" action="{{url('visualizador')}}" class="border p-3 form" role="form">
      <!-- TOKEN DE VERIFICACION DE USUARIO ENVIANDO SOLICITUDES, SIRVE DE PROTECCION AL FORMULARIO
           ES UN MIDDLEWARE DE LARAVEL Y DEBERA DE PONERSE CADA QUE SE HAGA UN FORMULARIO -->
        {{csrf_field()}}
    <div class="form-group">  

<div class="alert alert-warning" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<p style="font-family: Impact; font-size: 18pt">Seleccione los campos que se requieren en el formulario.</p>
</div>      
 
 
 
 <label for="rfc">RFC</label>
        <select name="rfc" id="rfc" class="form-control" required>
          <option value="">Seleccione uno</option>                   
            <option value="AAPA640328ES9">AAPA640328ES9</option>
            <option value="AAPN681209N55">AAPN681209N55</option>
            <option value="AASF960815119">AASF960815119</option>
            <option value="AOB180413DN3">AOB180413DN3</option>
            <option value="ASM0506231J8">ASM0506231J8</option>
            <option value="AUPR530228MR7">AUPR530228MR7</option>
            <option value="BACD600104EZ0">BACD600104EZ0</option>
            <option value="BADC371127HQ5">BADC371127HQ5</option>
            <option value="BAGG6005117V4">BAGG6005117V4</option>
            <option value="BAGG691104DF2">BAGG691104DF2</option>
            <option value="BEBH660502FEA">BEBH660502FEA</option>
            <option value="BEBM611220SJ1">BEBM611220SJ1</option>
            <option value="BERF981029D57">BERF981029D57</option>
            <option value="BSU060410M79">BSU060410M79</option>
            <option value="CACC810816LX9">CACC810816LX9</option>
            <option value="CAN0809254Y4">CAN0809254Y4</option>
            <option value="CCS101028995">CCS101028995</option>
            <option value="CCV1307276IA">CCV1307276IA</option>
            <option value="CEDA8612149Y1">CEDA8612149Y1</option>
            <option value="CEM110913878">CEM110913878</option>
            <option value="CEX990922QQ6">CEX990922QQ6</option>
            <option value="CIS170210F38">CIS170210F38</option>
            <option value="COCA591222AY4">COCA591222AY4</option>
            <option value="CUDJ370109QS8">CUDJ370109QS8</option>
            <option value="CUOM681115U8A">CUOM681115U8A</option>
            <option value="CVP1607044P3">CVP1607044P3</option>
            <option value="DAAM610109PG3">DAAM610109PG3</option>
            <option value="DUBD841020DQ6">DUBD841020DQ6</option>
            <option value="EEC130624P8A">EEC130624P8A</option>
            <option value="EIBA540406QK4">EIBA540406QK4</option>
            <option value="EUFJ420105BS0">EUFJ420105BS0</option>
            <option value="GOAF910605KX4">GOAF910605KX4</option>
            <option value="GOAR960821582">GOAR960821582</option>
            <option value="GOGC490923169">GOGC490923169</option>
            <option value="GOMV920422TN8">GOMV920422TN8</option>
            <option value="GOPJ960520BJ8">GOPJ960520BJ8</option>
            <option value="GOSV7012176D3">GOSV7012176D3</option>
            <option value="HEMA761206AR8">HEMA761206AR8</option>
            <option value="HORG5711186U1">HORG5711186U1</option>
            <option value="ICS0705165R4">ICS0705165R4</option>
            <option value="LABE570101URA">LABE570101URA</option>
            <option value="MACC9707063T5">MACC9707063T5</option>
            <option value="MOAL410204HF8">MOAL410204HF8</option>
            <option value="MOCG830402MR5">MOCG830402MR5</option>
            <option value="MOCJ6712048NA">MOCJ6712048NA</option>
            <option value="MOCL611024B27">MOCL611024B27</option>
            <option value="MOEL691008KD9">MOEL691008KD9</option>
            <option value="PEC070704GH2">PEC070704GH2</option>
            <option value="PECN330808IS0">PECN330808IS0</option>
            <option value="PICM640322M22">PICM640322M22</option>
            <option value="RATJ960917TS7">RATJ960917TS7</option>
            <option value="SAAH020121PN9">SAAH020121PN9</option>
            <option value="SAAR6009213D1">SAAR6009213D1</option>
            <option value="SAAS0005081M6">SAAS0005081M6</option>
            <option value="SAGC7605218PA">SAGC7605218PA</option>
            <option value="SAHE6410247K8">SAHE6410247K8</option>
            <option value="SAHR741005K25">SAHR741005K25</option>
            <option value="SAPF831227QZ4">SAPF831227QZ4</option>
            <option value="SES1809274Z7">SES1809274Z7</option>
            <option value="SITJ701127BS2">SITJ701127BS2</option>
            <option value="SOSE460608EK5">SOSE460608EK5</option>
            <option value="TCM8710075F7">TCM8710075F7</option>
            <option value="TFS131125UT4">TFS131125UT4</option>
            <option value="TMO080910RK4">TMO080910RK4</option>
            <option value="UAAM600326SS7">UAAM600326SS7</option>
            <option value="UACE370803MC6">UACE370803MC6</option>
            <option value="UALI731201DF9">UALI731201DF9</option>
            <option value="UIGF731004BZ6">UIGF731004BZ6</option>
            <option value="UIGR7608261W5">UIGR7608261W5</option>
            <option value="YAVJ6201094Y9">YAVJ6201094Y9</option>                          
        </select>
      </div>

      <div class="form-group">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" class="form-control" required>
          <option value="">Seleccione uno</option>                
          <option value="emitidos">Emitidos</option>                    
          <option value="recibidos">Recibidos</option>                    
        </select>
      </div>

      <div class="form-group">
        <label for="ano">Año</label>
        <select name="ano" id="ano" class="form-control" required>
          <option value="">Seleccione uno</option>    

          <option value="2020">2020</option>            
          <option value="{{ date('Y') }}">{{ date("Y") }}</option>                                        
        </select>
      </div>

      <div class="form-group">
        <label for="mes">Mes</label>
        <select name="mes" id="mes" class="form-control" required>
          <option value="">Seleccione uno</option>        
        <?php for($i = 0; $i <= count($mes_text)-1; $i++){ ?>
          <option value="<?php echo $mes_num[$i]; ?>"><?php echo $mes_text[$i]; ?></option>
        <?php } ?>                                 
        </select>
      </div>

      <button class="btn btn-info" type="submit" >VISUALIZAR</button>

       
    </form>
  </div>
@endsection