<?php
class Controlador_Factura extends Controlador_Base{
    public $datos_guardar;
    public $datos_empresa;
    public function obten_datos($tabla){
        $modelo = new $tabla($this->link);
        $campo_id = $tabla.'_id';
        $registro_id = $_POST[$campo_id];
        $resultado = $modelo->obten_por_id($tabla,$registro_id);
        $datos = $resultado['registros'][0];
        return $datos;
    }

    public function genera_folio($sufijo, $tabla,$folio_inicial){
        $modelo = new Factura($this->link);
        $ultimo_id = $modelo->obten_ultimo_id($tabla);
        $ultimo_folio = $ultimo_id + $folio_inicial;
        $ultimo_folio++;
        $folio = $sufijo.'_'.$ultimo_folio;
        return $folio;

    }

    private function carga_datos_empresa(){
        $this->datos_guardar['lugar_expedicion'] = $this->datos_empresa['cp'];
        $this->datos_guardar['calle_expedicion'] = $this->datos_empresa['calle'];
        $this->datos_guardar['exterior_expedicion'] = $this->datos_empresa['exterior'];
        $this->datos_guardar['interior_expedicion'] = $this->datos_empresa['interior'];
        $this->datos_guardar['colonia_expedicion'] = $this->datos_empresa['colonia'];
        $this->datos_guardar['municipio_expedicion'] = $this->datos_empresa['municipio'];
        $this->datos_guardar['estado_expedicion'] = $this->datos_empresa['estado'];
        $this->datos_guardar['pais_expedicion'] = $this->datos_empresa['pais'];
        $this->datos_guardar['serie'] = $this->datos_empresa['serie'];
        $this->datos_guardar['rfc_emisor'] = $this->datos_empresa['rfc'];
        $this->datos_guardar['nombre_emisor'] = $this->datos_empresa['razon_social'];
        $this->datos_guardar['regimen_fiscal_emisor_codigo'] = $this->datos_empresa['regimen_fiscal'];
        $this->datos_guardar['regimen_fiscal_emisor_descripcion'] = $this->datos_empresa['regimen_fiscal_descripcion'];


    }
    public function alta_bd(){
        $modelo_empresa = new Empresas();
        $numero_empresa = $_SESSION['numero_empresa'];
        $this->datos_empresa = $modelo_empresa->empresas[$numero_empresa];


        $datos_metodo_pago = $this->obten_datos('metodo_pago');
        $datos_tipo_comprobante = $this->obten_datos('tipo_comprobante');
        $datos_moneda = $this->obten_datos('moneda');
        $datos_forma_pago = $this->obten_datos('forma_pago');
        $datos_cliente = $this->obten_datos('cliente');
        $datos_uso_cfdi = $this->obten_datos('uso_cfdi');
        $fecha = date('Y-m-d');
        $hora = date('H:m:00');
        $fecha_emision = $fecha.'T'.$hora;
        $sufijo = $this->datos_empresa['sufijo_folio'];
        $folio_inicial = $this->datos_empresa['folio_inicial'];
        $folio = $this->genera_folio($sufijo,'factura',$folio_inicial);
        $this->datos_guardar = array();

        $this->carga_datos_empresa();

        $this->datos_guardar['metodo_pago_codigo'] = $datos_metodo_pago['metodo_pago_codigo'];
        $this->datos_guardar['metodo_pago_descripcion'] = $datos_metodo_pago['metodo_pago_descripcion'];

        $this->datos_guardar['tipo_comprobante_codigo'] = $datos_tipo_comprobante['tipo_comprobante_codigo'];
        $this->datos_guardar['tipo_comprobante_descripcion'] = $datos_tipo_comprobante['tipo_comprobante_descripcion'];

        $this->datos_guardar['moneda_codigo'] = $datos_moneda['moneda_codigo'];
        $datos_guardar['moneda_descripcion'] = $datos_moneda['moneda_descripcion'];

        $this->datos_guardar['condiciones_pago'] = $_POST['condiciones_pago'];

        $this->datos_guardar['forma_pago_codigo'] = $datos_forma_pago['forma_pago_codigo'];
        $this->datos_guardar['forma_pago_descripcion'] = $datos_forma_pago['forma_pago_descripcion'];
        $this->datos_guardar['fecha'] = $fecha_emision;
        $this->datos_guardar['folio'] = $folio;
        $this->datos_guardar['cliente_id'] = $_POST['cliente_id'];

        $this->datos_guardar['cliente_rfc'] = $datos_cliente['cliente_rfc'];
        $this->datos_guardar['cliente_razon_social'] = $datos_cliente['cliente_razon_social'];

        $this->datos_guardar['uso_cfdi_codigo'] = $datos_uso_cfdi['uso_cfdi_codigo'];
        $this->datos_guardar['uso_cfdi_descripcion'] = $datos_uso_cfdi['uso_cfdi_descripcion'];
        $this->datos_guardar['status'] = 1;

        $this->datos_guardar['status_factura'] = 'sin timbrar';

        $this->datos_guardar['observaciones'] = $_POST['observaciones'];

        $this->tabla = $_GET['seccion'];
        $resultado = $this->modelo->alta_bd($datos_guardar, $tabla);

        if($resultado['error']){
            $mensaje = $resultado['mensaje'];
            header("Location: ./index.php?seccion=$tabla&accion=alta&mensaje=$mensaje&tipo_mensaje=error");
            exit;
        }

        header("Location: ./index.php?seccion=$tabla&accion=lista&mensaje=Registro insertado con éxito&tipo_mensaje=exito");
    }

    public function descarga_masiva(){
        $facturas = $_GET['factura'];
        foreach ($facturas as $factura_id) {
            header('Location: ./index.php?seccion=cliente&accion=descarga_factura_pdf&factura_id='.$factura_id);
            header('Location: ./index.php?seccion=cliente&accion=descarga_factura_pdf&factura_id='.$factura_id+1);
        }

    }

    public function lista_filtro(){
        $fecha = false;
        if(isset($_POST['fecha'])){
            $fecha = $_POST['fecha'];
        }
        if($fecha == ''){
            $fecha = false;
        }


        $rfc = false;
        if(isset($_POST['rfc'])){
            $rfc = $_POST['rfc'];
        }
        if($rfc == ''){
            $rfc = false;
        }




        $razon_social = false;
        if(isset($_POST['razon_social'])){
            $razon_social = $_POST['razon_social'];
        }
        if($razon_social == ''){
            $razon_social = false;
        }



        $status_factura = false;
        if(isset($_POST['status_factura'])){
            $status_factura = $_POST['status_factura'];
        }
        if($status_factura == ''){
            $status_factura = false;
        }

        $status_descarga = false;
        if(isset($_POST['status_descarga'])){
            $status_descarga = $_POST['status_descarga'];
        }
        if($status_descarga == ''){
            $status_descarga = false;
        }


        $modelo_factura = new Factura($this->link);
        $resultado = $modelo_factura->obten_registros_filtrados('factura', $fecha, $rfc, $razon_social, 
            $status_factura,$status_descarga);

        $this->registros = $resultado['registros'];


    }

    public function informe_gastos_pdf(){
        $tamano_letra_normal = 7;
        $tamano_letra_titulo = 9;

        $factura_modelo = new Factura($this->link);
        $pdf = new PDF_HTML();
        $factura_id = $_GET['factura_id'];
        $resultado = $factura_modelo->obten_por_id('factura',$factura_id);
        $factura = $resultado['registros'][0];

        $nombre_empresa = $factura['factura_nombre_emisor'];
        $folio = 'I-'.$factura['factura_folio'];
        $fecha = $factura['factura_fecha'];
        $referencia = $factura['factura_referencia'];
        $pedimento = $factura['factura_pedimento'];

        $tipo_cambio = $factura['factura_tipo_cambio'];



        $cliente_razon_social = $factura['cliente_razon_social'];
        $cliente_direccion = $factura['cliente_direccion'];
        $cliente_rfc = $factura['cliente_rfc'];
        $cliente_colonia = $factura['cliente_colonia'];
        $cliente_cp = $factura['cliente_cp'];
        $cliente_zica_ciudad = $factura['cliente_zica_cuidad'];
        $marcas = $factura['factura_marcas'];
        $bultos = $factura['factura_bultos'];
        $clase_descripcion = $factura['factura_clase_descripcion'];
        $peso = $factura['factura_peso'];
        $ref_facturas = $factura['factura_ref_facturas'];
        $proveedor_razon_social = $factura['factura_proveedor_razon_social'];



        $total_ph = $factura['factura_total_ph'];
        $valor_aduana = $factura['factura_valor_aduana'];



        

        $honorarios = $factura['factura_honorarios'];

        if($tipo_cambio!=0){
            $total_ph = round($total_ph/$tipo_cambio,2);
            $valor_aduana = round($valor_aduana/$tipo_cambio,2);
            $honorarios = round($honorarios/$tipo_cambio,2);
        }

        $sub_total = $factura['factura_sub_total'];
        $iva = $factura['factura_total_impuestos_trasladados'];
        $total_neto = $factura['factura_total'];
        $anticipo = $factura['factura_anticipo'];
        $observaciones = $factura['factura_observaciones'];
        $phonorarios = $factura['factura_phonorarios'];


        $total_cuenta = $total_neto+$total_ph;

        $saldo_cuenta = $total_cuenta - $anticipo;

        $empresa = new Empresas();
        $datos_empresa=$empresa->empresas[$_SESSION['numero_empresa']];

        $encabezado_1 = $datos_empresa['encabezado_1'];
        $encabezado_2 = $datos_empresa['encabezado_2'];
        $encabezado_3 = $datos_empresa['encabezado_3'];
        $encabezado_4 = $datos_empresa['encabezado_4'];
        $leyenda_docto = $datos_empresa['leyenda_docto'];


        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Courier','',$tamano_letra_titulo);
        $pdf->Cell(190,7,utf8_decode($nombre_empresa),0,1,'C');
        $pdf->Cell(190,5,utf8_decode($encabezado_1),0,1,'C');
        $pdf->Cell(190,5,utf8_decode($encabezado_2),0,1,'C');

        $pdf->Ln();
        $pdf->SetFont('Courier','',$tamano_letra_normal);
        $pdf->MultiCell(90,5,utf8_decode($encabezado_3),'B','C');
        $pdf->SetXY(110,32);
        $pdf->MultiCell(90,5,utf8_decode($encabezado_4),'B','C');
        $pdf->Ln();

        $ruta_base = $datos_empresa['nombre_base_datos'];
        $ruta_logo = $ruta_base.'/logo.png';

        $pdf->Image($ruta_logo,18,7 ,15);


        $pdf->SetFont('Courier','',$tamano_letra_normal);
        $pdf->MultiCell(190,5,utf8_decode($leyenda_docto),'B','C');

        $txt = 'Informe de Gastos: '.$folio;
        $txt = $txt.' | Fecha: '.$fecha;
        $txt = $txt.' | Referencia: '.$referencia;
        $txt = $txt.' | Pedimento: '.$pedimento;

        $pdf->MultiCell(190,5,utf8_decode($txt),0,'L');


        $pdf->SetFillColor(190);
        $pdf->SetFont('Courier','',$tamano_letra_titulo);
        $pdf->Cell(190,5,'Datos del cliente:',0,1,'C',true);

        $pdf->SetFont('Courier','',$tamano_letra_normal);
        $txt = 'Razón Social: '.$cliente_razon_social;
        $txt = $txt.' | Dirección: '.$cliente_direccion.' '.$cliente_colonia.', '.$cliente_cp;
        $txt = $txt.', '.$cliente_zica_ciudad;
        $txt = $txt.' | RFC: '.$cliente_rfc;
        $pdf->MultiCell(190,5,utf8_decode($txt),0,'L');

        $pdf->SetFont('Courier','',$tamano_letra_titulo);
        $pdf->Cell(190,5,utf8_decode('Datos de la mercancía:'),0,1,'C',true);


        $pdf->SetFont('Courier','',$tamano_letra_normal);

        $txt = 'Marcas y Números: '.$marcas;
        $txt = $txt.' | Bultos: '.$bultos;
        $txt = $txt.' | Clase y Descripción: '.$clase_descripcion;
        $txt = $txt.' | Peso: '.$peso;
        $txt = $txt.' | Facturas: '.$ref_facturas;
        $txt = $txt.' | Proveedor: '.$proveedor_razon_social;

        $pdf->MultiCell(190,5,utf8_decode($txt),0,'L');


        $pdf->SetFont('Courier','',$tamano_letra_titulo);
        $pdf->Cell(190,5,utf8_decode('Pagos Hechos por su Cuenta:'),0,1,'C',true);

        $pdf->SetFont('Courier','',$tamano_letra_normal);
        $pdf->Cell(150,5,utf8_decode('Descripción:'),1,0,'L');
        $pdf->Cell(40,5,utf8_decode('Importe:'),1,1,'L');


        $partida_gasto_modelo = new Modelos($this->link);

        $filtro_partida_gasto = array('folio'=>$factura['factura_folio']);
        $resultado_partida_gasto = $partida_gasto_modelo->filtro_and('partida_informe_gasto',$filtro_partida_gasto);

        $partidas_gastos = $resultado_partida_gasto['registros'];

        $pdf->SetFont('Courier','',$tamano_letra_normal);
        foreach ($partidas_gastos as $partida_gasto){
            $partida_informe_gasto_importe = round($partida_gasto['partida_informe_gasto_importe'],2);

            if($tipo_cambio!=0){
                $partida_informe_gasto_importe = round($partida_informe_gasto_importe/$tipo_cambio,2);
            }


            $pdf->Cell(150,5,utf8_decode($partida_gasto['partida_informe_gasto_descripcion']),'B',0,'L');
            $pdf->Cell(40,5,utf8_decode('$'.number_format($partida_informe_gasto_importe,2,'.',',')),'B',1,'L');
        }
        $pdf->Cell(150,5,utf8_decode('Total PH(1): '),'B',0,'R');
        $pdf->Cell(40,5,utf8_decode('$'.number_format($total_ph,2,'.',',')),'B',1,'L');


        $pdf->MultiCell(190,5,'Observaciones:',0,'C');
        $pdf->Ln();
        $pdf->MultiCell(190,5,$observaciones,1,'L');
        $pdf->Ln();

        $pdf->SetFont('Courier','',$tamano_letra_titulo);
        $pdf->Cell(190,5,utf8_decode('Servicios de Agente Aduanal:'),0,1,'C',true);

        $pdf->SetFont('Courier','B',$tamano_letra_normal);

        $pdf->Cell(190,5,utf8_decode('Cálculo de Honorarios:'),'B',1,'L');

        $pdf->SetFont('Courier','',$tamano_letra_normal);

        $pdf->Cell(120,5,utf8_decode('Valor Normal:'),0,0,'L');
        $pdf->Cell(70,5,utf8_decode('$'.number_format($valor_aduana,2,'.',',')),0,1,'L');

        $pdf->Cell(120,5,utf8_decode('Total de Pagos Hechos por su Cuenta:'),0,0,'L');
        $pdf->Cell(70,5,utf8_decode('$'.number_format($total_ph,2,'.',',')),0,1,'L');

        $base_calculo = $total_ph + $valor_aduana;

        $pdf->Cell(120,5,utf8_decode('Base para el Cálculo:'),0,0,'L');
        $pdf->Cell(70,5,utf8_decode('$'.number_format($base_calculo,2,'.',',')),0,1,'L');



        $pdf->Cell(120,5,utf8_decode("Honorarios al $phonorarios %:"),0,0,'L');
        $pdf->Cell(70,5,utf8_decode('$'.number_format($honorarios,2,'.',',')),0,1,'L');



        $pdf->Cell(20,5,utf8_decode('Cant'),1,0,'C');
        $pdf->Cell(30,5,utf8_decode('U.M.'),1,0,'C');
        $pdf->Cell(80,5,utf8_decode('Descripcion'),1,0,'C');
        $pdf->Cell(30,5,utf8_decode('Precio Unitario'),1,0,'C');
        $pdf->Cell(30,5,utf8_decode('Importe'),1,1,'C');


        $partidas_modelos = new Modelos($this->link);

        $filtro_partida = array('folio'=>$factura['factura_folio']);
        $resultado_partida = $partidas_modelos->filtro_and('partida_factura',$filtro_partida);

        $partidas = $resultado_partida['registros'];

        $pdf->SetFont('Courier','',$tamano_letra_normal);
        foreach ($partidas as $partida){
            $pdf->Cell(20,5,utf8_decode($partida['partida_factura_cantidad']),'B',0,'C');
            $pdf->Cell(30,5,utf8_decode($partida['partida_factura_unidad_descripcion']),'B',0,'C');
            $pdf->Cell(80,5,utf8_decode($partida['partida_factura_descripcion']),'B',0);
            $pdf->Cell(30,5,utf8_decode('$'.number_format($partida['partida_factura_valor_unitario'],2,'.',',')),'B',0,'L');
            $pdf->Cell(30,5,utf8_decode('$'.number_format($partida['partida_factura_importe'],2,'.',',')),'B',1,'L');
        }
        $pdf->SetFont('Courier','B',$tamano_letra_normal);
        $pdf->Cell(160,5,utf8_decode('TOTAL HONORARIOS / SERVICIOS COMPLEMENTARIOS: '),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($sub_total,2,'.',',')),'B',1,'L');
        $pdf->Cell(160,5,utf8_decode('IVA 16%: '),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($iva,2,'.',',')),'B',1,'L');
        $pdf->Cell(160,5,utf8_decode('SUMA(2): '),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($total_neto,2,'.',',')),'B',1,'L');
        $pdf->Cell(160,5,utf8_decode('TOTAL DE ESTA CUENTA (1) + (2):'),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($total_cuenta,2,'.',',')),'B',1,'L');
        $pdf->Cell(160,5,utf8_decode('ANTICIPOS A ESTA CUENTA:'),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($anticipo,2,'.',',')),'B',1,'L');
        $pdf->Cell(160,5,utf8_decode('SALDO DE ESTA CUENTA:'),'B',0,'R');
        $pdf->Cell(30,5,utf8_decode('$'.number_format($saldo_cuenta,2,'.',',')),'B',1,'L');

        $numeros = new NumeroTexto();
        $moneda_codigo = $factura['factura_moneda_codigo'];
        $moneda_letra = array('MXN'=>'PESOS','USD'=>'DOLARES');
        $moneda_letra_enviar = $moneda_letra[$moneda_codigo];

        $importe_texto = $numeros->to_word($saldo_cuenta, $moneda_letra_enviar);

        $pdf->MultiCell(190,5,utf8_decode('Cantidad con letra: '.$importe_texto.' '.$moneda_codigo),'B','C');


        $ruta_logo = './img/iso.jpg';

        $pdf->Line(10,258,200,258);
        $pdf->Image($ruta_logo,10,260 ,25);
        $pdf->SetY(265);
        $pdf->Cell(190,5,'Certificado: 102613-2011-AQ-MEX-EMA ISO - 9001',0,1,'C');

        $pdf->Line(10,282,200,282);

        $empresas = new Empresas();
        $datos_empresa = $empresas->empresas[$_SESSION['numero_empresa']];
        $referencia_ig = $datos_empresa['referencia_if'];

        $referencia = $factura['factura_referencia'];


        $pdf->Output('D', $referencia_ig.'_'.$referencia.'.pdf');

    }


}