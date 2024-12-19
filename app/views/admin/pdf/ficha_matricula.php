<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ficha de Matricula</title>
</head>

<body>
  <style>
    /* Estilos comunes */
    * {
      margin: 0;
      padding: 0;
    }

    body {
      display: block;
      row-gap: 10px;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: -0.1mm;
      background-color: #f4f4f4;
    }

    /* Ajustes de las páginas internas (contenedores) */
    .temp--page {
      position: relative;
      display: block;
      margin: auto;
      margin-bottom: 5mm;
      width: 297mm;
      /* Ancho de la página A4 en orientación horizontal */
      height: 210mm;
      /* Alto de la página A4 en orientación horizontal */
      padding: 10mm;
      /* Espaciado dentro de las páginas */
      box-sizing: border-box;
      background-color: white;
    }

    .content--page {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .div--container {
      display: flex;
      position: relative;
      column-gap: 3mm;
      margin-bottom: 2mm;
      width: 100%;
    }

    .div-footer {
      position: absolute;
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      width: 100%;
      column-gap: 5mm;
      bottom: 0;

    }

    .div-footer div {
      width: 100%;
    }

    #logo-imagen {
      position: absolute;
      top: 0;
      left: 0;
      width: 12mm;
      margin: 0 18mm;
    }

    h1,
    h2,
    h3 {
      text-align: center;
    }

    h4,
    h5,
    h6 {
      margin: 0.5mm 0;
    }


    table {
      border-collapse: collapse;
      table-layout: fixed;
    }

    table tr td,
    table tr th {
      border: 1px solid black;
      font-size: 7pt;
      text-align: center;
    }

    table tr th,
    table tr td {
      height: 3.5mm;
    }

    .hg-1 {
      height: 4mm;
    }

    .bg-1 {
      background-color: rgb(211, 211, 211);
    }

    .f-sz-0 {
      font-size: 4pt;
    }

    .f-sz-1 {
      font-size: 2mm;
    }

    .f-sz-2 {
      font-size: 7pt;
    }

    table tr th {
      background-color: rgb(211, 211, 211);
    }

    .t-left {
      text-align: left;
      padding: 0 1mm;
    }

    .fw--normal {
      font-weight: normal;
    }

    .fw--bold {
      font-weight: bold;
    }


    /* TABLE */
    #t--datos-personales {
      width: 190mm;
    }

    #t--datos-personales .header-tr th:nth-child(1) {
      width: calc(32mm);
    }

    #t--datos-personales .header-tr th:nth-child(2) {
      width: 32mm;
    }

    #t--datos-personales .header-tr th:nth-child(3) {
      width: 49mm;
    }

    #t--datos-personales .header-tr th:nth-child(4) {
      width: 22mm;
    }

    #t--datos-personales .header-tr th:nth-child(6) {
      width: 22mm;
    }

    /* TABLE */
    #t--datos-personales-2 {
      width: 160mm;
    }

    #t--datos-personales-2 .header-tr th:nth-child(1) {
      width: calc(26mm);
    }

    #t--datos-personales-2 .header-tr th:nth-child(2) {
      width: calc(8mm);
    }

    #t--datos-personales-2 .header-tr th:nth-child(3) {
      width: calc(8mm);
    }

    #t--datos-personales-2 .header-tr th:nth-child(4) {
      width: calc(10mm);
    }

    #t--datos-personales-2 .header-tr th:nth-child(5) {
      width: calc(32mm);
    }


    /* TABLE */
    #t--domiclio-est {
      width: 180mm;
    }

    #t--domiclio-est .header-tr th:nth-child(1) {
      width: calc(10mm);
    }

    #t--domiclio-est .header-tr th:nth-child(3) {
      width: calc(34mm);
    }

    #t--domiclio-est .header-tr th:nth-child(4) {
      width: calc(22mm);
    }

    #t--domiclio-est .header-tr th:nth-child(5) {
      width: calc(23mm);
    }

    #t--domiclio-est .header-tr th:nth-child(6) {
      width: calc(25mm);
    }

    #t--domiclio-est .header-tr th:nth-child(7) {
      width: calc(14mm);
    }


    /* TABLE*/
    #t--salud-est {
      width: calc(100%);
    }

    #t--salud-est .header-tr th:nth-child(3) {
      width: calc(30mm);
    }



    /* TABLE */
    #t--trabajo-est {
      width: 145mm;
    }

    #t--trabajo-est .header-tr th:nth-child(1) {
      width: calc(10mm);
    }

    #t--trabajo-est .header-tr th:nth-child(2) {
      width: calc(10mm);
    }

    #t--trabajo-est .header-tr th:nth-child(4) {
      width: calc(22mm);
    }


    /* TABLE */
    #t--parents-est {

      width: calc(100% - 23mm);
    }

    #t--parents-est .header-tr th:nth-child(1) {
      width: calc(27mm);
    }



    /* TABLE*/

    #t--matricula-est-1 {
      width: 35mm;
    }

    #t--matricula-est-2 {
      width: 100%;
    }


    /* TABLE */
    #t--traslado-est {
      width: 100%;
    }

    #t--traslado-est .header-tr th:nth-child(1) {
      width: calc(30mm);
    }

    #t--traslado-est .header-tr th:nth-child(2) {
      width: calc(120mm);
    }

    /* TABLE */

    #t--personal-adm-1 {
      width: 35mm;
    }

    #t--personal-adm-2 {
      width: 100%;
    }


    /* TABLE */
    #t--representante-est-1 {
      width: 35mm;
    }

    #t--representante-est-2 {
      width: 100%;
    }

    /* Estilos de impresión */
    @media print {
      @page {
        size: A4 landscape;
        margin: 0;
      }

      table tr th {
        background-color: rgb(211, 211, 211);
      }

      .temp--page {
        margin-bottom: 0;
      }
    }
  </style>


  <div class="temp--page">
    <div class="content--page">
      <img id="logo-imagen" src="logo-20165.png" alt="">

      <h2>FICHA UNICA DE MATRICULA</h2>
      <br>
      <br>

      <h6>1. Datos Generales del Estudiante</h6>
      <h6>1.1 Datos Personales</h6>
      <div class="div--container">
        <table id="t--datos-personales">
          <tr class="header-tr hg-1">
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombres</th>
            <th colspan="4">Sexo</th>
            <th>Estado Civil (1)</th>
            <th colspan="4" class="f-sz-1">Nacimiento Registrado</th>
          </tr>
          <tr class="items-tr">
            <td>
              <?= /* APE_PATERNO */ $data['estudiante']['apellido_paterno'] ?>
            </td>
            <td>
              <?= /* APE_MATERNO */ $data['estudiante']['apellido_materno'] ?>
            </td>
            <td>
              <?= /* APE_NOMBRE */ $data['estudiante']['nombres'] ?>
            </td>

            <th class="fw--normal">H</td>
            <td>
              <?= /* S_HOMBRE */ $data['estudiante']['sexo_cod'] == 'H' ? 'X' : '' ?>
            </td>
            <th class="fw--normal">M</td>
            <td>
              <?= /* S_MUJER */ $data['estudiante']['sexo_cod'] == 'M' ? 'X' : '' ?>
            </td>

            <td>
              <?= mb_strtoupper($data['estudiante']['estado_civil_desc'], 'UTF-8') ?>
            </td>
            <th class="fw--normal">Si</td>
            <td>
              <?= $data['estudiante']['nacimiento_registrado'] == 1 ? 'X' : '' ?>
            </td>
            <th class="fw--normal">No</td>
            <td>
              <?= $data['estudiante']['nacimiento_registrado'] == 0 ? 'X' : '' ?>
            </td>

          </tr>
        </table>
      </div>

      <div class="div--container">
        <table id="t--datos-personales-2">
          <tr class="header-tr">
            <th rowspan="2" class="t-left fw--normal f-sz-2">Fecha de Nacimiento</th>
            <th class="fw--normal f-sz-2">Dia</th>
            <th class="fw--normal f-sz-2">Mes</th>
            <th class="fw--normal f-sz-2">Año</th>
            <th class="t-left fw--normal f-sz-2" rowspan="2">Lengua Materna</th>
            <td rowspan="2" class=" f-sz-2" colspan="12">
              <?= /* LENGUA_MATERNA */ !empty($data['estudiante']['lengua_materna_desc']) ? mb_strtoupper($data['estudiante']['lengua_materna_desc'], 'UTF-8') : 'NINGUNO'; ?>
            </td>
          </tr>
          <tr>
            <td class="f-sz-2">
              <?= /* DIA-NAC */ date('d', strtotime($data['estudiante']['fecha_nacimiento'])); ?>
            </td>
            <td class="f-sz-2">
              <?= /* MES-NAC */ date('m', strtotime($data['estudiante']['fecha_nacimiento'])); ?>
            </td>
            <td class="f-sz-2">
              <?= /* AÑO-NAC */ date('Y', strtotime($data['estudiante']['fecha_nacimiento'])); ?>
            </td>
          </tr>
          <tr>
            <th class="t-left fw--normal"> Lugar de Nacimiento</th>
            <th class="f-sz-2" colspan="3"> </th>
            <th class="f-sz-2 t-left fw--normal"> Segunda Lengua</th>
            <td class="f-sz-2" colspan="12">
              <?= /* SEGUNDA_LENGUA */ !empty($data['estudiante']['segunda_lengua_desc']) ? mb_strtoupper($data['estudiante']['segunda_lengua_desc'], 'UTF-8') : 'NINGUNO'; ?>

            </td>
          </tr>
          <tr>
            <th class="f-sz-2 t-left fw--normal">País</th>
            <td class="f-sz-2" colspan="3">
              <?= /* PAIS_ORIGEN */ mb_strtoupper($data['estudiante']['pais_origen_desc'], 'UTF-8') ?>
            </td>
            <th class="f-sz-2 t-left fw--normal">Religión</th>
            <td class="f-sz-2" colspan="12"> - </td>
          </tr>

          <tr>
            <th class="f-sz-2 t-left fw--normal">Departamento</th>
            <td class="f-sz-2" colspan="3">
              <?= /* DEP_ORIGEN */ mb_strtoupper($data['estudiante']['departamento'], 'UTF-8') ?>
            </td>
            <th class="f-sz-2 t-left fw--normal">Número de Hermanos</th>
            <td class="f-sz-2" colspan="12">
              <?= /* NUM_HERMANOS */ !empty($data['estudiante']['numero_hermanos']) ? mb_strtoupper($data['estudiante']['numero_hermanos'], 'UTF-8') : '-'; ?>
            </td>
          </tr>
          <tr>
            <th class="f-sz-2 t-left fw--normal">Provincia</th>
            <td class="f-sz-2" colspan="3">
              <?= /* PROV_ORIGEN */ mb_strtoupper($data['estudiante']['provincia'], 'UTF-8') ?>
            </td>
            <th class="f-sz-2 t-left fw--normal">Tipo de Discapacidad (3)</th>
            <th class="f-sz-2 fw--normal">DI</th>
            <td class="f-sz-2">
              <?= /* DISC_DI */ $data['estudiante']['tipo_discapacidad_cod'] == 'DI' ? 'X' : '' ?>
            </td>
            <th class="f-sz-2 fw--normal">DA</th>
            <td class="f-sz-2">
              <?= /* DISC_DA */ $data['estudiante']['tipo_discapacidad_cod'] == 'DA' ? 'X' : '' ?>
            </td>
            <th class="f-sz-2 fw--normal">DV</th>
            <td class="f-sz-2">
              <?= /* DISC_DV */ $data['estudiante']['tipo_discapacidad_cod'] == 'DV' ? 'X' : '' ?>
            </td>
            <th class="f-sz-2 fw--normal">DF</th>
            <td class="f-sz-2">
              <?= /* DISC_DF */ $data['estudiante']['tipo_discapacidad_cod'] == 'DF' ? 'X' : '' ?>
            </td>
            <th class="f-sz-2 fw--normal">SC</th>
            <td class="f-sz-2">
              <?= /* DISC_SC */ $data['estudiante']['tipo_discapacidad_cod'] == 'SC' ? 'X' : '' ?>
            </td>
            <th class="f-sz-2 fw--normal">OT</th>
            <td class="f-sz-2">
              <?= /* DISC_OT */ $data['estudiante']['tipo_discapacidad_cod'] == 'OT' ? 'X' : '' ?>
            </td>
          </tr>

          <tr>
            <td class="f-sz-2 t-left fw--normal bg-1">Distrito</td>
            <td class="f-sz-2 " colspan="3">
              <?= /* DIST_ORIGEN */ mb_strtoupper($data['estudiante']['distrito'], 'UTF-8') ?>
            </td>
            <td class="f-sz-2 t-left bg-1">Certif. de discapacidad *</td>
            <td class="f-sz-2  bg-1" colspan="4">Tiene:</td>
            <td class="f-sz-2  " colspan="2">
              <?= /* CERTI_SI */ $data['estudiante']['certificado_discapacidad'] == 1 ? 'X' : '' ?>
            </td>
            <td class="f-sz-2 bg-1" colspan="4"> No Tiene:</td>
            <td class="f-sz-2  " colspan="2">
              <?= /* CERTI_NO */ $data['estudiante']['certificado_discapacidad'] == 0 ? 'X' : '' ?>
            </td>
          </tr>


        </table>
      </div>

      <div class="div--container">
        <div>
          <h6>1.2 Datos de Domicilio de Estudiante</h6>
          <table id="t--domiclio-est">
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold">Año</th>
              <th class="f-sz-2 fw--bold">Dirección</th>
              <th class="f-sz-2 fw--bold">Lugar</th>
              <th class="f-sz-2 fw--bold">Departamento</th>
              <th class="f-sz-2 fw--bold">Provincia</th>
              <th class="f-sz-2 fw--bold">Distrito</th>
              <th class="f-sz-2 fw--bold">Teléfono</th>
            </tr>
            <?php $ind = 0; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>

            <tr>
              <td class="f-sz-2">
                <?= /* AÑO_DIR */ !empty($data['direcciones'][$ind]['periodo_anual']) ? mb_strtoupper($data['direcciones'][$ind]['periodo_anual'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* NOM_DIR */ !empty($data['direcciones'][$ind]['direccion']) ? mb_strtoupper($data['direcciones'][$ind]['direccion'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* LUGAR_DIR */ !empty($data['direcciones'][$ind]['lugar']) ? mb_strtoupper($data['direcciones'][$ind]['lugar'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* DEP_DIR */ !empty($data['direcciones'][$ind]['departamento']) ? mb_strtoupper($data['direcciones'][$ind]['departamento'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* PROV_DIR */ !empty($data['direcciones'][$ind]['provincia']) ? mb_strtoupper($data['direcciones'][$ind]['provincia'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-1">
                <?= /* DIST_DIR */ !empty($data['direcciones'][$ind]['distrito']) ? mb_strtoupper($data['direcciones'][$ind]['distrito'], 'UTF-8') : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* TEL_DIR */ !empty($data['direcciones'][$ind]['telefono']) ? mb_strtoupper($data['direcciones'][$ind]['telefono'], 'UTF-8') : '';  ?>
              </td>
            </tr>
            <?php $ind = 0; ?>



          </table>
        </div>
        <div>

          <h6>1.1.3 Estado de Salud del Estudiante</h6>
          <table id="t--salud-est">
            <tr class="header-tr">
              <th class="f-sz-2 fw--normal bg-1" colspan="4">Enfermedades Sufridas</th>
              <th class="f-sz-2 fw--normal bg-1" colspan="4">Vacunas</th>
              <th class="f-sz-2 fw--normal" colspan="2">Alergias</th>
            </tr>

            <tr>
              <td class="f-sz-1 bg-1">Edad<br>Aprox.</td>
              <td class="f-sz-2 bg-1" colspan="3">Enfermedad</td>
              <td class="f-sz-1 bg-1">Edad<br>Aprox.</td>
              <td class="f-sz-2 bg-1" colspan="3">Vacuna</td>
              <td class="f-sz-1" rowspan="2" colspan="2">
                <?= /* ALERGIAS */ !empty($data['estudiante']['alergias']) ? mb_strtoupper($data['estudiante']['alergias'], 'UTF-8') : 'NINGUNO'; ?>
              </td>
            </tr>

            <?php $ind = 0; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* EDAD_ENF */ isset($data['enfermedades'][$ind]['edad']) ? $data['enfermedades'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_ENF */ !empty($data['enfermedades'][$ind]['descripcion']) ? $data['enfermedades'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* EDAD_VAC */ isset($data['vacunas'][$ind]['edad']) ? $data['vacunas'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_VAC */ !empty($data['vacunas'][$ind]['descripcion']) ? $data['vacunas'][$ind]['descripcion'] : '';  ?>
              </td>
            </tr>
            <?php $ind++; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* EDAD_ENF */ isset($data['enfermedades'][$ind]['edad']) ? $data['enfermedades'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_ENF */ !empty($data['enfermedades'][$ind]['descripcion']) ? $data['enfermedades'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* EDAD_VAC */ isset($data['vacunas'][$ind]['edad']) ? $data['vacunas'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_VAC */ !empty($data['vacunas'][$ind]['descripcion']) ? $data['vacunas'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2 fw--normal bg-1" colspan="2"> Experiencia Traumáticas</td>
            </tr>
            <?php $ind++; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* EDAD_ENF */ isset($data['enfermedades'][$ind]['edad']) ? $data['enfermedades'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_ENF */ !empty($data['enfermedades'][$ind]['descripcion']) ? $data['enfermedades'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* EDAD_VAC */ isset($data['vacunas'][$ind]['edad']) ? $data['vacunas'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_VAC */ !empty($data['vacunas'][$ind]['descripcion']) ? $data['vacunas'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-1" rowspan="2" colspan="2">
                <?= /* ALERGIAS */ !empty($data['estudiante']['experiencias_traumaticas']) ? mb_strtoupper($data['estudiante']['experiencias_traumaticas'], 'UTF-8') : 'NINGUNO'; ?>

              </td>
            </tr>

            <?php $ind++; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* EDAD_ENF */ isset($data['enfermedades'][$ind]['edad']) ? $data['enfermedades'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_ENF */ !empty($data['enfermedades'][$ind]['descripcion']) ? $data['enfermedades'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* EDAD_VAC */ isset($data['vacunas'][$ind]['edad']) ? $data['vacunas'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_VAC */ !empty($data['vacunas'][$ind]['descripcion']) ? $data['vacunas'][$ind]['descripcion'] : '';  ?>
              </td>
            </tr>

            <?php $ind++; ?>
            <tr>
              <td class="f-sz-2">
                <?= /* EDAD_ENF */ isset($data['enfermedades'][$ind]['edad']) ? $data['enfermedades'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_ENF */ !empty($data['enfermedades'][$ind]['descripcion']) ? $data['enfermedades'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-2">
                <?= /* EDAD_VAC */ isset($data['vacunas'][$ind]['edad']) ? $data['vacunas'][$ind]['edad'] : '';  ?>
              </td>
              <td class="f-sz-1" colspan="3">
                <?= /* DESC_VAC */ !empty($data['vacunas'][$ind]['descripcion']) ? $data['vacunas'][$ind]['descripcion'] : '';  ?>
              </td>
              <td class="f-sz-1 fw--bold bg-1">Tipo de Sangre</td>
              <td class="f-sz-2">
                <?= /* TIPO_SANGRE */ !empty($data['estudiante']['tipo_sangre']) ? mb_strtoupper($data['estudiante']['tipo_sangre'], 'UTF-8') : 'NINGUNO'; ?>
              </td>
            </tr>

          </table>

        </div>

      </div>

      <div class="div--container">
        <div>
          <h6>1.3 Datos de la Situacion Laboral de los estudiantes que Trabajan</h6>
          <table id="t--trabajo-est">
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1" rowspan="2">Año</th>
              <th class="f-sz-2 fw--bold bg-1" rowspan="2">Edad</th>
              <th class="f-sz-2 fw--bold bg-1" rowspan="1" colspan="17">Descripcion de la Actividad Laboral (4)</th>
              <th class="f-sz-2 fw--bold bg-1" rowspan="2">Horas Semanales de Trabajo</th>
            </tr>
            <tr class="hd--tr-sub">
              <th class="f-sz-2 fw--normal bg-1">OB</th>
              <td class="f-sz-2 fw--normal bg-1">EM</td>
              <td class="f-sz-2 fw--normal bg-1">TI</td>
              <td class="f-sz-2 fw--normal bg-1">E/O</td>
              <td class="f-sz-2 fw--normal bg-1">TF</td>
              <td class="f-sz-2 fw--normal bg-1">TH</td>
              <td class="f-sz-2 fw--normal bg-1" colspan="11">Especificar</td>
            </tr>

            <tr>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-2 ">

              </td>
              <td class="f-sz-1 " colspan="11">DETALLE DE TARBAJO</td>
              <td class="f-sz-1 ">24 HORAS</td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>
            <tr>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-2 "></td>
              <td class="f-sz-1 " colspan="11"></td>
              <td class="f-sz-1 "></td>
            </tr>

          </table>
        </div>
        <div>
          <h6>1.3 Datos de los Padres</h6>
          <table id="t--parents-est">
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1">Datos</th>
              <th class="f-sz-2 fw--bold bg-1" colspan="4">Padre</th>
              <th class="f-sz-2 fw--bold bg-1" colspan="4">Madre</th>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Apellido Paterno</td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_APE_PAT */ mb_strtoupper($data['padre']['apellido_paterno'], 'UTF-8') ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_APE_MAT */ mb_strtoupper($data['madre']['apellido_paterno'], 'UTF-8') ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Apellido Materno</td>
              <td class="f-sz-2" colspan="4">
                <?= /* MADRE_APE_PAT */ mb_strtoupper($data['padre']['apellido_materno'], 'UTF-8') ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* MADRE_APE_MAT */ mb_strtoupper($data['madre']['apellido_materno'], 'UTF-8') ?>

              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Nombres</td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_NOMBRES */ mb_strtoupper($data['padre']['nombres'], 'UTF-8') ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* MADRE_NOMBRES */ mb_strtoupper($data['madre']['nombres'], 'UTF-8') ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Vive</td>
              <td class="f-sz-2 bg-1" colspan="">Si</td>
              <td class="f-sz-2" colspan="">
                <?= /* PADRE_VIVE */ $data['padre']['vive'] == 1 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1" colspan="">No</td>
              <td class="f-sz-2" colspan="">
                <?= /* PADRE_VIVE */ $data['padre']['vive'] == 0 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1" colspan="">Si</td>
              <td class="f-sz-2" colspan="">
                <?= /* PADRE_VIVE */ $data['madre']['vive'] == 1 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1" colspan="">No</td>
              <td class="f-sz-2" colspan="">
                <?= /* PADRE_VIVE */ $data['madre']['vive'] == 0 ? 'X' : '' ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left" rowspan="2">Fecha de Nacimiento</td>
              <td class="f-sz-2 bg-1">Día</td>
              <td class="f-sz-2 bg-1">Mes</td>
              <td class="f-sz-2 bg-1" colspan="2">Año</td>
              <td class="f-sz-2 bg-1">Día</td>
              <td class="f-sz-2 bg-1">Mes</td>
              <td class="f-sz-2 bg-1" colspan="2">Año</td>
            </tr>
            <tr>

              <td class="f-sz-2 ">
                <?= /* DIA-NAC */ date('d', strtotime($data['padre']['fecha_nacimiento'])); ?>
              </td>
              <td class="f-sz-2 ">
                <?= /* MES-NAC */ date('m', strtotime($data['padre']['fecha_nacimiento'])); ?>
              </td>
              <td class="f-sz-2 " colspan="2">
                <?= /* AÑO-NAC */ date('Y', strtotime($data['padre']['fecha_nacimiento'])); ?>
              </td>
              <td class="f-sz-2 ">
                <?= /* DIA-NAC */ date('d', strtotime($data['madre']['fecha_nacimiento'])); ?>
              </td>
              <td class="f-sz-2 ">
                <?= /* MES-NAC */ date('m', strtotime($data['madre']['fecha_nacimiento'])); ?>
              </td>
              <td class="f-sz-2 " colspan="2">
                <?= /* AÑO-NAC */ date('Y', strtotime($data['madre']['fecha_nacimiento'])); ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Grado de Instrucción</td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_OCUPACION */ mb_strtoupper($data['padre']['escolaridad'], 'UTF-8') ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* MADRE_OCUPACION */ mb_strtoupper($data['madre']['escolaridad'], 'UTF-8') ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Ocupación</td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_OCUPACION */ mb_strtoupper($data['padre']['ocupacion'], 'UTF-8') ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* MADRE_OCUPACION */ mb_strtoupper($data['madre']['ocupacion'], 'UTF-8') ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Vive con el Estudiante</td>
              <td class="f-sz-2 bg-1">Si</td>
              <td class="f-sz-2">
                <?= /* PADRE_VIVE_CON_EST */ $data['padre']['vive_con_estudiante'] == 1 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1">No</td>
              <td class="f-sz-2">
                <?= /* PADRE_VIVE_CON_EST */ $data['padre']['vive_con_estudiante'] == 0 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1">Si</td>
              <td class="f-sz-2">

                <?= /* PADRE_VIVE_CON_EST */ $data['madre']['vive_con_estudiante'] == 1 ? 'X' : '' ?>
              </td>
              <td class="f-sz-2 bg-1">No</td>
              <td class="f-sz-2">
                <?= /* PADRE_VIVE_CON_EST */ $data['madre']['vive_con_estudiante'] == 0 ? 'X' : '' ?>
              </td>
            </tr>
            <tr>
              <td class="f-sz-2 fw--normal bg-1 t-left">Religión</td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_RELIGION */ !empty($data['padre']['religion']) ? mb_strtoupper($data['padre']['religion'], 'UTF-8') : ''; ?>
              </td>
              <td class="f-sz-2" colspan="4">
                <?= /* PADRE_RELIGION */ !empty($data['madre']['religion']) ? mb_strtoupper($data['madre']['religion'], 'UTF-8') : ''; ?>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <div class="div-footer f-sz-2">
        <div>
          <div>(1) S: Soltero, C: Casado, V: Viudo, D: Divorciado, cv: Conviviente</div>
          <div>(2) (Si) si cuenta con partida de nacimiento; (No) no ha sido inscrito en el registro civil.</div>
          <div>(4) (OB)Obrero, (EM)Empleado, (TI)Trabaj.lndependiente, (E/O)Empleador, (TF) Trabaj. Fam. No Remunerado,
            (TH)Trabaj. Del Hogar</div>
        </div>
        <div>
          <div>(3) Tipo de Discapacidad: (DI) Discapacidad Intelectual, (DA) Discapacidad Auditiva, (DV) Discapacidad
            Visual, (DF) Discapacidad
            Fisica,(DM) Discapacidad Motora, (SC)Sordoceguera (OT) Otra.</div>
          <div> * Certificado de Discapacidad emitido por la autoridad competente. Dato válido sólo para fines
            estadísticos, no obligatorio para matrícula.</div>


        </div>
      </div>
    </div>

  </div>

  <div class="temp--page">

    <div class="content--page">

      <h6>2. Datos de la Escolaridad del Estudiante</h6>
      <h6>2.1 Matrícula</h6>
      <div class="div--container">
        <div>
          <table id="t--matricula-est-1">
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1">Datos - Años</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-1 fw--bold bg-1 t-left">Nombre de la Institución Educativa</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Código Modular</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Departamento</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Provincia</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Distrito</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-1 fw--bold bg-1 t-left">Instancia de Gestión Educativa Descentralizada</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Nivel</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Modalidad</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Forma (4)</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Grado</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Sección</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Turno (5)</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Situacion Final (6)</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Año Lectivo</th>
            </tr>
            <tr class="header-tr">
              <th class="f-sz-2 fw--bold bg-1 t-left">Recuperación Pedagógica</th>
            </tr>
          </table>

        </div>
        <div>
          <table id="t--matricula-est-2">
            <tr class="header-tr">
              <?php $ind_m = 0; ?>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="f-sz-2 fw--bold bg-1" colspan="35">
                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                ?>
              </th>

            </tr>

            <?php $ind_m = 0; ?>

            <tr>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan="35">
                <?= /* NOMBRE_IE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['NOMBRE_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>

            </tr>

            <?php
            $ind_m = 0;
            $codigo_modular = $data['data_institucion']['CODIGO_MODULAR'];

            if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
            ?>

            <tr>




              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>

              <?php $ind_m++;

              if (empty($data['matriculas'][$ind_m]['periodo_academico'])) $codigo_modular = '';
              ?>



              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 0, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 1, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>
                <?= substr($codigo_modular, 2, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 3, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 4, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 5, 1); ?>
              </td>
              <td class="f-sz-2" colspan=5>

                <?= substr($codigo_modular, 6, 1); ?>
              </td>


            </tr>
            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DEPARTAMENTO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DEPARTAMENTO_ENTIDAD'], 'UTF-8') : '';
                ?>
              </td>
            </tr>
            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* PROVINCIA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['PROVINCIA_ENTIDAD'], 'UTF-8') : '';
                ?>
              </td>

            </tr>
            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* DISTRITO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['DISTRITO_ENTIDAD'], 'UTF-8') : '';
                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                $ind_m++; ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* UGEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['data_institucion']['INSTANCIA_UGEL'], 'UTF-8') : '';
                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* NIVEL */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['nivel_desc'], 'UTF-8') : '';

                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>



            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* MODALIDAD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['modalidad']['codigo'], 'UTF-8') : '';
                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>

            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* FORMA */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['forma']['descripcion'], 'UTF-8') : '';

                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>

            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* GRADO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['grado'], 'UTF-8') : '';;
                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* SECCION */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['seccion'], 'UTF-8') : '';
                $ind_m++;
                ?>

              </td>

            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 t-left" colspan=35>
                <?= /* TURNO */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['turno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>

            </tr>

            <?php $ind_m = 0; ?>

            <tr>
              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>

              <td class="f-sz-2 bg-1" colspan=7>A</td>
              <td class="f-sz-2 bg-1" colspan=7>RR</td>
              <td class="f-sz-2 bg-1" colspan=7>D</td>
              <td class="f-sz-2 bg-1" colspan=7>R</td>
              <td class="f-sz-2 bg-1" colspan=7>P</td>


            </tr>


            <tr>


              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['situacion_final_anio_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>





            </tr>

            <?php $ind_m = 0; ?>
            <tr>

              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>



              <td class="f-sz-2" colspan="7">

                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'A') ? 'X' : '';
                ?>

              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'RR') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'D') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'R') ? 'X' : '';
                ?>
              </td>
              <td class="f-sz-2" colspan="7">
                <?= (!empty($data['matriculas'][$ind_m]['periodo_academico']) && $data['matriculas'][$ind_m]['recuperacion_pedagogica_cod'] == 'P') ? 'X' : '';
                ?>
              </td>
              <?php $ind_m++; ?>


            </tr>

          </table>
        </div>
      </div>
      <h6>2.2. Traslados</h6>
      <div class="div--container">
        <table id="t--traslado-est">
          <tr class="header-tr">
            <th class="f-sz-2 bg-1 fw--bold" colspan="3">Fecha</th>
            <th class="f-sz-2 bg-1 fw--bold">Motivo de Traslado</th>
            <th class="f-sz-2 bg-1 fw--bold" colspan="22">Institución Educativa de Traslado</th>
          </tr>
          <tr>
            <td class="f-sz-2 bg-1">Día</td>
            <td class="f-sz-2 bg-1">Mes</td>
            <td class="f-sz-2 bg-1">Año</td>
            <td class="f-sz-2 bg-1">Descripción</td>
            <td class="f-sz-2 bg-1" colspan="7">Codigo Modular</td>
            <td class="f-sz-2 bg-1" colspan="15">Nombre</td>
          </tr>
          <tr>
            <td class="f-sz-2">12</td>
            <td class="f-sz-2">12</td>
            <td class="f-sz-2">2024</td>
            <td class="f-sz-2">Modtoasdkadkawdkaw ldawjkd laksjdlakwhj dklawjl</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2">0</td>
            <td class="f-sz-2" colspan="15">ESTRELLITA DE BELEN</td>
          </tr>
          <tr>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2" colspan="15"></td>
          </tr>
          <tr>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2" colspan="15"></td>
          </tr>
          <tr>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2"></td>
            <td class="f-sz-2" colspan="15"></td>
          </tr>

        </table>
      </div>

      <h6>3. Responsable de la Matricula</h6>
      <div class="div--container">
        <div>
          <table id="t--personal-adm-1">
            <tr class="header-tr">
              <th class="fw--bold f-sz-2">Datos - Años</th>
            </tr>

            <tr class=" ">
              <th class="fw--bold f-sz-1 t-left bg-1"><br>Fecha<br><br></th>
            </tr>

            <tr class="">
              <td class="fw--bold f-sz-1 t-left bg-1">Apellidos y Nombres</td>
            </tr>

            <tr class="">
              <td class="fw--bold f-sz-1 t-left bg-1">Cargo</td>
            </tr>

          </table>
        </div>
        <div>

          <?php $ind_m = 0; ?>
          <table id="t--personal-adm-2">
            <tr class="header-tr">
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
            </tr>



            <tr>
              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>


              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>

              <td class="fw--normal f-sz-1 bg-1">Día</td>
              <td class="fw--normal f-sz-1 bg-1">Mes</td>
              <td class="fw--normal f-sz-1 bg-1">Año</td>


            </tr>

            <?php $ind_m = 0; ?>

            <tr>



              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>


              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>
              <td class="fw--normal f-sz-1"></td>

            </tr>
            <tr>
              <td class="fw--normal f-sz-0" colspan="3">BERROCAL GOMEZ ESTEFANIA AMPARO</td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
              <td class="fw--normal f-sz-0" colspan="3"></td>
            </tr>
            <tr>
              <td class="fw--normal f-sz-1" colspan="3">DIRECTOR</td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
              <td class="fw--normal f-sz-1" colspan="3"></td>
            </tr>


          </table>
        </div>
      </div>

      <h6>4. Datos del Representante Legal</h6>
      <div class="div--container">
        <div>
          <table id="t--representante-est-1">
            <tr class="header-tr">
              <th class="f-sz-2"> Datos - Años</th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Apellido Paterno </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Apellido Materno </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Nombres </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Parentesco con el Estudiante </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"><br> Fecha de Nacimiento <br> <br></th>
            </tr>

            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Grado de Instrucción </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Ocupación </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Domicilio </th>
            </tr>
            <tr class="">
              <th class="f-sz-1 t-left bg-1"> Teléfono </th>
            </tr>
          </table>
        </div>
        <div>

          <table id="t--representante-est-2">
            <tr class="header-tr">
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
              <th class="fw--bold f-sz-2" colspan="3">

                <?= /* AÑO_MAT */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['periodo_academico'], 'UTF-8') : '20__';
                $ind_m++; ?>
              </th>
            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_PAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_paterno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* APE_MAT_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['apellido_materno'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* NOMBRES_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['nombres'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>
            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-2 fw--normal" colspan="3">
                <?= /* PARENTESCO_ESTUDIANTE */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['matriculas'][$ind_m]['parentesco_estudiante'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>

            </tr>

            <?php $ind_m = 0;?>
            <tr>
              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

              <td class="f-sz-1 fw--normal bg-1">Día</td>
              <td class="f-sz-1 fw--normal bg-1">Mes</td>
              <td class="f-sz-1 fw--normal bg-1">Año</td>

            </tr>

            <tr>
              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



              <td class="fw--normal f-sz-1">
                <?= /* DIA-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('d', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>
              </td>
              <td class="fw--normal f-sz-1">
                <?= /* MES-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('m', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>
              <td class="fw--normal f-sz-1">
                <?= /* AÑO-NAC */ !empty($data['matriculas'][$ind_m]['periodo_academico']) ? date('Y', strtotime($data['apoderados'][$ind_m]['fecha_nacimiento'])) : ''; ?>

              </td>

              <?php $ind_m++; ?>



            </tr>

            <?php $ind_m =0;?>

            <tr>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* GRADO_INSTRUCCIONS_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['escolaridad'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

            <?php $ind_m = 0; ?>
            <tr>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* OCUPACION_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['ocupacion'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

            <?php $ind_m = 0;?>

            <tr>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-0 fw--normal" colspan="3"> 
              <?= /* DOMICILIO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['domicilio'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

            <?php $ind_m = 0;?>
            <tr>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
              <td class="f-sz-1 fw--normal" colspan="3"> 
              <?= /* TELEFONO_APOD */
                !empty($data['matriculas'][$ind_m]['periodo_academico']) ? mb_strtoupper($data['apoderados'][$ind_m]['telefono'], 'UTF-8') : '';
                $ind_m++;
                ?>
              </td>
            </tr>

          </table>
        </div>
      </div>



      <div class="div-footer f-sz-2">
        <div>
          <div>[ ]: (EBR) Edu. Básica Regular, (EBR-AD) Edu. Básica Regular A Distancia, (EBA) Edu. Básica Alternativa,
            (EBE) Edu. Básica Especial </div>
          <div>[ ]: (Esc) Escolarizado, (NoEsc) No Escolarizado </div>
        </div>
        <div>
          <div>[ ]: (M) Mañana, (T) Tarde, (N) Noche </div>
          <div>[ ]: (A) Aprovado, (RR) Requiere Recuperación, (D) Desaprobado, (R) Retirado </div>
        </div>
        <div></div>

      </div>
    </div>

  </div>



</body>

</html>