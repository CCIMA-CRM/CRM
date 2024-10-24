<!DOCTYPE html>
<html lang="es_MX">

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" contet="ie=edge">
  <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
  <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
  <meta name="keywords"
    content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

  <title>Grupo CCIMA</title>

  <script type="text/javascript" src="media/assets/js/analytics.js"></script>

  <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

  <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
  <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtCalamandaQuoteCtrl as nvtCalamanda">


  <!--Menu actualizado 19-DIC-2022 -->
  <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
    <md-toolbar class="md-hue-2">
      <h1 class="md-toolbar-tools">BUSINESS PARK</h1>
    </md-toolbar>
    <a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Aeropuerto Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Beta Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Calamanda_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Calamanda Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Celta Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Gamma I Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Gamma II Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Pedro Escobedo Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Santa Rosa Business Park
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Sur_57_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Sur 57 Business Park Etapa 1
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Sur_57_E2_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Sur 57 Business Park Etapa 2
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/Navetec-Sur_57_E3_Business_Park" ng-click="close()">
      <div class="link-body link-nav">
        Sur 57 Business Park Etapa 3
      </div>
    </a>
    <md-divider></md-divider>
    <md-toolbar class="md-hue-2">
      <h1 class="md-toolbar-tools">NAVIGATION</h1>
    </md-toolbar>
    <a href="#!/Navetec" ng-click="close()">
      <div class="link-body link-nav">
        Navetec
      </div>
    </a>
    <md-divider></md-divider>
    <a href="#!/" ng-click="close()">
      <div class="link-body link-nav">
        Grupo CCIMA
      </div>
    </a>
    <md-divider></md-divider>
  </md-sidenav>
  <!--Menu Fin 19-DIC-2022 -->

  <div ng-controller="sideNavCtrl" class="navbar-fixed">
    <nav class="cc-nav white" role="navigation">
      <div class="nav-wrapper">
        <div class="container">
          <ul>
            <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
            <li class="right">
              <md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                <svg viewBox="0 0 24 24" width="24">
                  <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
                </svg>
              </md-button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="modal-dialog" ng-class="nvtCalamanda.dialogDisplay">
    <div class="backdrop-dialog" ng-click="nvtCalamanda.closeDialog()"></div>
    <div class="container-dialog p-20">
      <div class="toolbar-dialog blue-txt">
        Cotización
        <span ng-click="nvtCalamanda.closeDialog()">
          <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
        </span>
      </div>
      <div class="content-dialog">

        <div class="divider"></div>

        <div class="p-20 grey lighten-5">
          <div class="p-5">
            <h6 class="futura-med">Navetec Business Park {{nvtCalamanda.propertyData.condominium}}</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">{{nvtCalamanda.propertyData.propertyClass}}</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">{{nvtCalamanda.propertyData.type}}</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">Número {{nvtCalamanda.propertyData.number}}</h6>
          </div>
          <!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCalamanda.propertyData.dimensions}}</h6>
  </div> -->
          <div class="p-5">
            <h6 class="futura-light">Área de {{nvtCalamanda.propertyData.area}} M&sup2;</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">Precio por M&sup2; de ${{nvtCalamanda.propertyData.cost_m2}} MXN</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light green-text">Precio de ${{nvtCalamanda.propertyData.total}} MXN <span
                style="color: #857C82; font-size: 12px;"></span></h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
          </div>
        </div>


        <div class="divider"></div>

        <div class="py-20 ">
          <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
        </div>

        <!-- <div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

        <div class="divider"></div>

        <!--<div class="p-20">-->
        <!--  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>-->
        <!--  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>-->
        <!--  <p class="promo__description grey-text">*Valido hasta {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>-->
        <!--</div>-->

        <!--<div class="divider"></div>-->

        <!--<div class="p-20">-->
        <!--  <h6 class="deep-purple-text futura-light">Compra en Enero y paga la primera mensualidad hasta Febrero</h6>-->
        <!--  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>-->
        <!--  <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>-->
        <!--</div>-->

        <div class="divider"></div>

        <div class="p-20">
          <p class="blue-text futura-book">¡Apártalo ahora!</p>
          <p class="green-text">Con tan solo {{nvtCalamanda.costToBlock}}</p>
          <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
        </div>

      </div>
    </div>

    <div class="divider"></div>
    <div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
      <md-menu class="right mr-20 mt-10" md-offset="0 -60">
        <button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi"
          ng-click="contactCtrl.openMenu($mdMenu, $event)">
          Contacto
        </button>
        <md-menu-content width="4">
          <md-menu-item>
            <md-button disabled="disabled">
              +52 1 442 127 5214
            </md-button>
          </md-menu-item>
          <md-menu-divider></md-menu-divider>
          <md-menu-item>
            <md-button ng-click="contactCtrl.toWhatsapp()">
              Whatsapp
            </md-button>
          </md-menu-item>
          <md-menu-item>
            <md-button ng-click="contactCtrl.toCall()">
              Llamada
            </md-button>
          </md-menu-item>
        </md-menu-content>
      </md-menu>
    </div>

  </div>
  </div>

  <div class="plano_container">

    <div class="container mt-64">
      <div class="row quote-header">
        <div class="col s12">
          <h2 class="center-align futura-med">CALAMANDA</h2>
          <div class="quote-description">
            <p class="left">Cotiza facilmente con un solo Click</p>
            <img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="color-table">
        <div class="color-block ae-property-active-bg left"></div>
        <p class="pl-40 py-2">DISPONIBLE</p>
      </div>
      <div>
        <div class="color-block mustard-bg left"></div>
        <p class="pl-40 py-2">NO DISPONIBLE</p>
      </div>
    </div>

    <div class="">

      <svg id="CLUSTER_ETAPA_CONDO" data-name="CLUSTER / ETAPA / CONDO" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 1511">
        <defs>
          <style>
            .cls-1 {
              fill: #002856;
            }

            .cls-1,
            .cls-2 {
              fill-rule: evenodd;
            }

            .cls-1,
            .cls-2,
            .cls-3 {
              stroke-width: 0px;
            }

            .cls-4 {
              letter-spacing: 0em;
            }

            .cls-4,
            .cls-5,
            .cls-6,
            .cls-7,
            .cls-8,
            .cls-9,
            .cls-10 {
              fill: #fff;
              font-family: CenturyGothic, 'Century Gothic';
            }

            .cls-4,
            .cls-6 {
              font-size: 12px;
            }

            .cls-2 {
              fill: #0047ba;
            }

            .cls-11 {
              fill: none;
              stroke: #fff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 1.8px;
            }

            .cls-5 {
              font-size: 12px;
              letter-spacing: 0em;
            }

            .cls-6 {
              letter-spacing: 0em;
            }

            .cls-7 {
              letter-spacing: 0em;
            }

            .cls-7,
            .cls-8,
            .cls-9 {
              font-size: 12px;
            }

            .cls-8 {
              letter-spacing: 0em;
            }

            .cls-3 {
              fill: #eaaf43;
              opacity: .6;
            }

            .cls-9 {
              letter-spacing: 0em;
            }

            .cls-10 {
              letter-spacing: 0em;
            }

            .cls-10,
            .cls-12 {
              font-size: 12px;
            }

            .cls-12 {
              fill: #ffbf00;
              font-family: CenturyGothic-Bold, 'Century Gothic';
              font-weight: 700;
            }
          </style>
        </defs>
        <g id="COMPLEMENTO">
          <image width="1366" height="1511" xlink:href="media/assets/img/navetec/app/calamanda/calamanda_2.jpg" />
        </g>
        <g id="CLUSTER">
          <g id="MODULO_B" data-name="MODULO B">
            <g id="B-01" ng-class="nvtCalamanda.inmovablesClassList[0]"
              ng-click="nvtCalamanda.showPropertyData(71, '1B', nvtCalamanda.inmovables[0].idProperty)">
              <polyline id="BN-01" class="property nvt-sprite-1"
                points="364.1 1262.4 381.2 1240.4 408.7 1205 575.5 1334.7 530.9 1392 364.1 1262.4" />
              <g>
                <rect class="cls-2" x="405" y="1244.7" width="9.2" height="9.2"
                  transform="translate(1116.5 2357.9) rotate(165.6)" />
                <polygon class="cls-2" points="406.3 1254.9 409.6 1249.4 413 1243.7 404.1 1246 406.3 1254.9" />
              </g>
              <text class="cls-12" transform="translate(440.6 1272.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 01B </tspan>
              </text>
              <text class="cls-10" transform="translate(435.1 1282) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(390.9 1254.2) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-7" transform="translate(537.4 1370.6) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(431.4 1307.5) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
            </g>
            <g id="B-02" ng-class="nvtCalamanda.inmovablesClassList[1]"
              ng-click="nvtCalamanda.showPropertyData(71, '2B', nvtCalamanda.inmovables[1].idProperty)">
              <polyline id="BN-02" class="property nvt-sprite-2"
                points="408.7 1205 453.3 1147.6 620.1 1277.3 575.5 1334.7 408.7 1205" />
              <text class="cls-12" transform="translate(487.1 1217.7) rotate(37.7)">
                <tspan x="0" y="0">NAVE 02B </tspan>
              </text>
              <text class="cls-10" transform="translate(481.6 1227.1) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(435.5 1198) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(487.7 1263.6) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(581.4 1315.1) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-03" ng-class="nvtCalamanda.inmovablesClassList[2]"
              ng-click="nvtCalamanda.showPropertyData(71, '3B', nvtCalamanda.inmovables[2].idProperty)">
              <polyline id="BN-03" class="property nvt-sprite-1"
                points="497.9 1090.2 664.7 1219.9 620.1 1277.3 453.3 1147.6 497.9 1090.2" />
              <text class="cls-12" transform="translate(533.3 1164.4) rotate(37.7)">
                <tspan x="0" y="0">NAVE 03B </tspan>
              </text>
              <text class="cls-10" transform="translate(527.8 1173.9) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(480.2 1139.5) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(532.4 1205) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(626 1256.6) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-04" ng-class="nvtCalamanda.inmovablesClassList[3]"
              ng-click="nvtCalamanda.showPropertyData(71, '4B', nvtCalamanda.inmovables[3].idProperty)">
              <polyline id="BN-04" class="property nvt-sprite-2"
                points="497.9 1090.2 542.5 1032.8 709.3 1162.5 664.7 1219.9 497.9 1090.2" />
              <text class="cls-12" transform="translate(581.4 1109.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 04B </tspan>
              </text>
              <text class="cls-10" transform="translate(575.9 1119) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(524.8 1082.1) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(576.9 1147.7) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(670.6 1199.2) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-05" ng-class="nvtCalamanda.inmovablesClassList[4]"
              ng-click="nvtCalamanda.showPropertyData(71, '5B', nvtCalamanda.inmovables[4].idProperty)">
              <polyline id="BN-05" class="property nvt-sprite-1"
                points="587.1 975.5 753.9 1105.1 709.3 1162.5 542.5 1032.8 587.1 975.5" />
              <text class="cls-12" transform="translate(628.6 1052.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 05B </tspan>
              </text>
              <text class="cls-10" transform="translate(623.1 1062) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(569.4 1024.7) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(621.6 1090.2) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(715.3 1141.8) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-06" ng-class="nvtCalamanda.inmovablesClassList[5]"
              ng-click="nvtCalamanda.showPropertyData(71, '6B', nvtCalamanda.inmovables[5].idProperty)">
              <polyline id="BN-06" class="property nvt-sprite-2"
                points="587.1 975.5 631.7 918.1 798.6 1047.7 753.9 1105.1 587.1 975.5" />
              <text class="cls-12" transform="translate(675.9 995) rotate(37.7)">
                <tspan x="0" y="0">NAVE 06B </tspan>
              </text>
              <text class="cls-10" transform="translate(670.4 1004.4) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(614 967.3) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(666.2 1032.8) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(759.9 1084.4) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-07" ng-class="nvtCalamanda.inmovablesClassList[6]"
              ng-click="nvtCalamanda.showPropertyData(71, '7B', nvtCalamanda.inmovables[6].idProperty)">
              <polyline id="BN-07" class="property nvt-sprite-1"
                points="676.3 860.7 843.2 990.4 798.6 1047.7 631.7 918.1 676.3 860.7" />
              <text class="cls-12" transform="translate(719.1 940.1) rotate(37.7)">
                <tspan x="0" y="0">NAVE 07B </tspan>
              </text>
              <text class="cls-10" transform="translate(713.6 949.5) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(658.6 909.9) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(710.8 975.4) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(804.5 1027) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-08" ng-class="nvtCalamanda.inmovablesClassList[7]"
              ng-click="nvtCalamanda.showPropertyData(71, '8B', nvtCalamanda.inmovables[7].idProperty)">
              <polyline id="BN-08" class="property nvt-sprite-2"
                points="676.3 860.7 720.9 803.3 887.8 933 843.2 990.4 676.3 860.7" />
              <text class="cls-12" transform="translate(764.5 883.2) rotate(37.7)">
                <tspan x="0" y="0">NAVE 08B </tspan>
              </text>
              <text class="cls-10" transform="translate(759 892.6) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(703.2 852.6) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(755.4 918) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(849.1 969.7) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-09" ng-class="nvtCalamanda.inmovablesClassList[8]"
              ng-click="nvtCalamanda.showPropertyData(71, '9B', nvtCalamanda.inmovables[8].idProperty)">
              <polyline id="BN-09" class="property nvt-sprite-1"
                points="720.9 803.3 765.5 745.9 932.4 875.6 887.8 933 720.9 803.3" />
              <text class="cls-12" transform="translate(812.9 829.9) rotate(37.7)">
                <tspan x="0" y="0">NAVE 09B </tspan>
              </text>
              <text class="cls-10" transform="translate(807.4 839.4) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(747.8 795.2) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(800 860.7) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(893.7 912.3) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-10" ng-class="nvtCalamanda.inmovablesClassList[9]"
              ng-click="nvtCalamanda.showPropertyData(71, '10B', nvtCalamanda.inmovables[9].idProperty)">
              <polyline id="BN-10" class="property nvt-sprite-2"
                points="810.2 688.5 977 818.2 932.4 875.6 765.5 745.9 792.1 711.8 810.2 688.5" />
              <text class="cls-12" transform="translate(857.5 769.8) rotate(37.7)">
                <tspan x="0" y="0">NAVE 10B </tspan>
              </text>
              <text class="cls-10" transform="translate(852 779.3) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(792.4 737.8) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(844.6 803.3) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(938.3 854.9) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-11" ng-class="nvtCalamanda.inmovablesClassList[10]"
              ng-click="nvtCalamanda.showPropertyData(71, '11B', nvtCalamanda.inmovables[10].idProperty)">
              <polyline id="BN-11" class="property nvt-sprite-1"
                points="810.2 688.5 854.8 631.2 1021.6 760.8 977 818.2 810.2 688.5" />
              <text class="cls-12" transform="translate(897.7 710.4) rotate(37.7)">
                <tspan x="0" y="0">NAVE 11B </tspan>
              </text>
              <text class="cls-10" transform="translate(892.2 719.9) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(837 680.4) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(889.2 745.9) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(982.9 797.5) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-12" ng-class="nvtCalamanda.inmovablesClassList[11]"
              ng-click="nvtCalamanda.showPropertyData(71, '12B', nvtCalamanda.inmovables[11].idProperty)">
              <polyline id="BN-12" class="property nvt-sprite-2"
                points="899.4 573.8 1066.2 703.4 1021.6 760.8 854.8 631.2 899.4 573.8" />
              <text class="cls-12" transform="translate(939.4 654.8) rotate(37.7)">
                <tspan x="0" y="0">NAVE 12B </tspan>
              </text>
              <text class="cls-10" transform="translate(933.9 664.3) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(881.6 623) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(933.8 688.5) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1027.5 740.1) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-13" ng-class="nvtCalamanda.inmovablesClassList[12]"
              ng-click="nvtCalamanda.showPropertyData(71, '13B', nvtCalamanda.inmovables[12].idProperty)">
              <polyline id="BN-13" class="property nvt-sprite-1"
                points="944 516.4 1110.8 646.1 1066.2 703.4 899.4 573.8 944 516.4" />
              <text class="cls-12" transform="translate(983.8 592.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 13B </tspan>
              </text>
              <text class="cls-10" transform="translate(978.3 602) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(926.2 565.6) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(978.3 631.2) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1072.1 682.7) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-14" ng-class="nvtCalamanda.inmovablesClassList[13]"
              ng-click="nvtCalamanda.showPropertyData(71, '14B', nvtCalamanda.inmovables[13].idProperty)">
              <polyline id="BN-14" class="property nvt-sprite-2"
                points="944 516.4 988.6 459 1155.4 588.7 1110.8 646.1 944 516.4" />
              <text class="cls-12" transform="translate(1024.3 534.9) rotate(37.7)">
                <tspan x="0" y="0">NAVE 14B </tspan>
              </text>
              <text class="cls-10" transform="translate(1018.8 544.4) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(970.8 508.3) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(1023 573.8) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1115.1 626.9) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-15" ng-class="nvtCalamanda.inmovablesClassList[14]"
              ng-click="nvtCalamanda.showPropertyData(71, '15B', nvtCalamanda.inmovables[14].idProperty)">
              <polyline id="BN-15" class="property nvt-sprite-1"
                points="1033.2 401.6 1200 531.3 1155.4 588.7 988.6 459 1033.2 401.6" />
              <text class="cls-12" transform="translate(1071.7 477.4) rotate(37.7)">
                <tspan x="0" y="0">NAVE 15B </tspan>
              </text>
              <text class="cls-10" transform="translate(1066.2 486.9) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(1015.4 452.5) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(1067.6 516.4) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1159.7 569.6) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-16" ng-class="nvtCalamanda.inmovablesClassList[15]"
              ng-click="nvtCalamanda.showPropertyData(71, '16B', nvtCalamanda.inmovables[15].idProperty)">
              <polyline id="B-16-2" data-name="B-16" class="property nvt-sprite-2"
                points="1033.2 401.6 1077.8 344.2 1244.6 473.9 1200 531.3 1033.2 401.6" />
              <text class="cls-12" transform="translate(1116.3 416.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 16B </tspan>
              </text>
              <text class="cls-10" transform="translate(1110.8 426) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(1060 395.2) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(1112.2 459) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1204.3 512.2) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-17" ng-class="nvtCalamanda.inmovablesClassList[16]"
              ng-click="nvtCalamanda.showPropertyData(71, '17B', nvtCalamanda.inmovables[16].idProperty)">
              <polyline id="BN-17" class="property nvt-sprite-1"
                points="1122.4 286.9 1289.2 416.5 1244.6 473.9 1077.8 344.2 1122.4 286.9" />
              <text class="cls-12" transform="translate(1160.2 362.3) rotate(37.7)">
                <tspan x="0" y="0">NAVE 17B </tspan>
              </text>
              <text class="cls-10" transform="translate(1154.7 371.8) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-7" transform="translate(1104.6 337.8) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(1156.8 401.6) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-7" transform="translate(1248.9 454.8) rotate(-52.1)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="B-18" ng-class="nvtCalamanda.inmovablesClassList[17]"
              ng-click="nvtCalamanda.showPropertyData(71, '18B', nvtCalamanda.inmovables[17].idProperty)">
              <polyline id="NB-18" class="property nvt-sprite-2"
                points="1122.4 286.9 1191.4 198 1363.4 321 1289.2 416.5 1122.4 286.9" />
              <text class="cls-12" transform="translate(1216.9 287.8) rotate(37.7)">
                <tspan x="0" y="0">NAVE 18B </tspan>
              </text>
              <text class="cls-10" transform="translate(1211.4 297.3) rotate(37.7)">
                <tspan x="0" y="0">915.17m2</tspan>
              </text>
              <text class="cls-9" transform="translate(1161.5 264.7) rotate(-52.1)">
                <tspan x="0" y="0">21.67</tspan>
              </text>
              <text class="cls-8" transform="translate(1201.4 344.2) rotate(37.9)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(1259.4 264.6) rotate(35.6)">
                <tspan x="0" y="0">40.73</tspan>
              </text>
              <text class="cls-9" transform="translate(1308.4 378.3) rotate(-52.1)">
                <tspan x="0" y="0">23.30</tspan>
              </text>
            </g>
            <g id="LINEAS_DIVISORIAS_MODULO_B" data-name="LINEAS DIVISORIAS MODULO B">
              <line class="cls-11" x1="575.5" y1="1334.7" x2="408.7" y2="1205" />
              <line class="cls-11" x1="620.1" y1="1277.3" x2="453.3" y2="1147.6" />
              <line class="cls-11" x1="664.7" y1="1219.9" x2="497.9" y2="1090.2" />
              <line class="cls-11" x1="709.3" y1="1162.5" x2="542.5" y2="1032.8" />
              <line class="cls-11" x1="753.9" y1="1105.1" x2="587.1" y2="975.5" />
              <line class="cls-11" x1="798.6" y1="1047.7" x2="631.7" y2="918.1" />
              <line class="cls-11" x1="843.2" y1="990.4" x2="676.3" y2="860.7" />
              <line class="cls-11" x1="887.8" y1="933" x2="720.9" y2="803.3" />
              <line class="cls-11" x1="932.4" y1="875.6" x2="765.5" y2="745.9" />
              <line class="cls-11" x1="977" y1="818.2" x2="810.2" y2="688.5" />
              <line class="cls-11" x1="1021.6" y1="760.8" x2="854.8" y2="631.2" />
              <line class="cls-11" x1="1066.2" y1="703.4" x2="899.4" y2="573.8" />
              <line class="cls-11" x1="1110.8" y1="646.1" x2="944" y2="516.4" />
              <line class="cls-11" x1="1155.4" y1="588.7" x2="988.6" y2="459" />
              <line class="cls-11" x1="1200" y1="531.3" x2="1033.2" y2="401.6" />
              <line class="cls-11" x1="1244.6" y1="473.9" x2="1077.8" y2="344.2" />
              <line class="cls-11" x1="1289.2" y1="416.5" x2="1122.4" y2="286.9" />
              <line class="cls-11" x1="530.9" y1="1391.5" x2="364.1" y2="1261.8" />
            </g>
          </g>
          <g id="MODULO_A" data-name="MODULO A">
            <g id="A-01" ng-class="nvtCalamanda.inmovablesClassList[18]"
              ng-click="nvtCalamanda.showPropertyData(71, '1A', nvtCalamanda.inmovables[18].idProperty)">
              <polyline id="AN-01" class="property nvt-sprite-1"
                points="270.6 1191.4 103.3 1062.3 147.7 1004.8 315 1133.9 270.6 1191.4" />
              <g>
                <rect class="cls-2" x="260.7" y="1135.8" width="9.2" height="9.2"
                  transform="translate(805.3 2179.3) rotate(165.6)" />
                <polygon class="cls-2" points="268.7 1134.8 265.4 1140.3 262 1146 270.9 1143.7 268.7 1134.8" />
              </g>
              <text class="cls-12" transform="translate(181.3 1074.6) rotate(37.7)">
                <tspan x="0" y="0">NAVE 01A </tspan>
              </text>
              <text class="cls-10" transform="translate(175.8 1084.1) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(178.5 1114) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(132.9 1046.7) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(279.1 1170.3) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-02" ng-class="nvtCalamanda.inmovablesClassList[19]"
              ng-click="nvtCalamanda.showPropertyData(71, '2A', nvtCalamanda.inmovables[19].idProperty)">
              <polyline id="AN-02" class="property nvt-sprite-2"
                points="359.4 1076.3 342 1098.9 315 1133.9 147.7 1004.8 192.2 947.2 359.4 1076.3" />
              <text class="cls-12" transform="translate(228.6 1018.8) rotate(37.7)">
                <tspan x="0" y="0">NAVE 02A </tspan>
              </text>
              <text class="cls-10" transform="translate(223.1 1028.2) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(222.9 1056.5) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(177.3 989.2) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(323.5 1112.8) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-03" ng-class="nvtCalamanda.inmovablesClassList[20]"
              ng-click="nvtCalamanda.showPropertyData(71, '3A', nvtCalamanda.inmovables[20].idProperty)">
              <polyline id="AN-03" class="property nvt-sprite-1"
                points="192.2 947.2 199.3 938 236.6 889.7 403.8 1018.8 359.4 1076.3 192.2 947.2" />
              <text class="cls-12" transform="translate(270.8 965.9) rotate(37.7)">
                <tspan x="0" y="0">NAVE 03A </tspan>
              </text>
              <text class="cls-8" transform="translate(265.3 975.4) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(267.3 998.9) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(221.7 931.6) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(367.9 1055.3) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-04" ng-class="nvtCalamanda.inmovablesClassList[21]"
              ng-click="nvtCalamanda.showPropertyData(71, '4A', nvtCalamanda.inmovables[21].idProperty)">
              <polyline id="AN-04" class="property nvt-sprite-2"
                points="403.8 1018.8 236.6 889.7 281 832.2 448.2 961.2 403.8 1018.8" />
              <text class="cls-12" transform="translate(319 901.7) rotate(37.7)">
                <tspan x="0" y="0">NAVE 04A </tspan>
              </text>
              <text class="cls-8" transform="translate(313.5 911.2) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(311.7 941.4) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(266.1 874.1) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(412.3 997.7) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-05" ng-class="nvtCalamanda.inmovablesClassList[22]"
              ng-click="nvtCalamanda.showPropertyData(71, '5A', nvtCalamanda.inmovables[22].idProperty)">
              <polyline id="AN-05" class="property nvt-sprite-1"
                points="448.2 961.2 281 832.2 325.4 774.6 492.6 903.7 448.2 961.2" />
              <text class="cls-12" transform="translate(362.2 846.1) rotate(37.7)">
                <tspan x="0" y="0">NAVE 05A </tspan>
              </text>
              <text class="cls-8" transform="translate(356.7 855.6) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(356.1 883.8) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(310.5 816.5) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(456.7 940.2) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-06" ng-class="nvtCalamanda.inmovablesClassList[23]"
              ng-click="nvtCalamanda.showPropertyData(71, '6A', nvtCalamanda.inmovables[23].idProperty)">
              <polyline id="AN-06" class="property nvt-sprite-2"
                points="492.6 903.7 325.4 774.6 351.9 740.3 369.8 717.1 537 846.2 492.6 903.7" />
              <text class="cls-12" transform="translate(404 788.6) rotate(37.7)">
                <tspan x="0" y="0">NAVE 06A </tspan>
              </text>
              <text class="cls-8" transform="translate(398.5 798.1) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(400.5 826.3) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(354.9 759) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(501.1 882.6) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-07" ng-class="nvtCalamanda.inmovablesClassList[24]"
              ng-click="nvtCalamanda.showPropertyData(71, '7A', nvtCalamanda.inmovables[24].idProperty)">
              <polyline id="AN-07" class="property nvt-sprite-1"
                points="581.4 788.6 537 846.2 369.8 717.1 414.2 659.5 581.4 788.6" />
              <text class="cls-12" transform="translate(449.7 731.1) rotate(37.7)">
                <tspan x="0" y="0">NAVE 07A </tspan>
              </text>
              <text class="cls-10" transform="translate(444.2 740.5) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(444.9 768.8) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(399.3 703.1) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(545.5 825.1) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-08" ng-class="nvtCalamanda.inmovablesClassList[25]"
              ng-click="nvtCalamanda.showPropertyData(71, '8A', nvtCalamanda.inmovables[25].idProperty)">
              <polyline id="AN-08" class="property nvt-sprite-2"
                points="414.2 659.5 431.4 637.2 458.6 602 625.8 731.1 608.4 753.7 581.4 788.6 414.2 659.5" />
              <text class="cls-12" transform="translate(500.5 677.1) rotate(37.7)">
                <tspan x="0" y="0">NAVE 08A </tspan>
              </text>
              <text class="cls-10" transform="translate(495 686.6) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(489.3 711.2) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(443.7 645.5) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(589.9 767.6) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-09" ng-class="nvtCalamanda.inmovablesClassList[26]"
              ng-click="nvtCalamanda.showPropertyData(71, '9A', nvtCalamanda.inmovables[26].idProperty)">
              <polyline id="AN-09" class="property nvt-sprite-1"
                points="458.6 602 503 544.5 670.2 673.5 625.8 731.1 458.6 602" />
              <text class="cls-12" transform="translate(542.9 619.9) rotate(37.7)">
                <tspan x="0" y="0">NAVE 09A </tspan>
              </text>
              <text class="cls-10" transform="translate(537.4 629.4) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(533.8 653.7) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(488.1 588) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(634.3 710) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-10" ng-class="nvtCalamanda.inmovablesClassList[27]"
              ng-click="nvtCalamanda.showPropertyData(71, '10A', nvtCalamanda.inmovables[27].idProperty)">
              <polyline id="AN-10" class="property nvt-sprite-2"
                points="670.2 673.5 503 544.5 511 534.1 547.4 486.9 714.6 616 670.2 673.5" />
              <text class="cls-12" transform="translate(584.2 558.4) rotate(37.7)">
                <tspan x="0" y="0">NAVE 10A </tspan>
              </text>
              <text class="cls-10" transform="translate(578.7 567.9) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(575.8 596.2) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(532.5 530.5) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(678.7 652.5) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-11" ng-class="nvtCalamanda.inmovablesClassList[28]"
              ng-click="nvtCalamanda.showPropertyData(71, '11A', nvtCalamanda.inmovables[28].idProperty)">
              <polyline id="AN-11" class="property nvt-sprite-1"
                points="759 558.5 714.6 616 547.4 486.9 591.8 429.4 759 558.5" />
              <text class="cls-12" transform="translate(628.6 502.2) rotate(37.7)">
                <tspan x="0" y="0">NAVE 11A </tspan>
              </text>
              <text class="cls-10" transform="translate(623.1 511.6) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(620.2 538.6) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(576.9 472.9) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(723.1 594.9) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-12" ng-class="nvtCalamanda.inmovablesClassList[29]"
              ng-click="nvtCalamanda.showPropertyData(71, '12A', nvtCalamanda.inmovables[29].idProperty)">
              <polyline id="AN-12" class="property nvt-sprite-2"
                points="591.8 429.4 636.2 371.8 803.4 500.9 786 523.5 759 558.5 591.8 429.4" />
              <text class="cls-12" transform="translate(673.2 441.8) rotate(37.7)">
                <tspan x="0" y="0">NAVE 12A </tspan>
              </text>
              <text class="cls-10" transform="translate(667.7 451.3) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(664.6 481.1) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(621.3 415.4) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(767.5 537.4) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-13" ng-class="nvtCalamanda.inmovablesClassList[30]"
              ng-click="nvtCalamanda.showPropertyData(71, '13A', nvtCalamanda.inmovables[30].idProperty)">
              <polyline id="AN-13" class="property nvt-sprite-1"
                points="803.4 500.9 636.2 371.8 680.6 314.3 847.9 443.4 803.4 500.9" />
              <text class="cls-12" transform="translate(716.3 384.3) rotate(37.7)">
                <tspan x="0" y="0">NAVE 13A </tspan>
              </text>
              <text class="cls-10" transform="translate(710.8 393.8) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(709 423.5) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(665.7 357.9) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(811.9 479.9) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-14" ng-class="nvtCalamanda.inmovablesClassList[31]"
              ng-click="nvtCalamanda.showPropertyData(71, '14A', nvtCalamanda.inmovables[31].idProperty)">
              <polyline id="AN-14" class="property nvt-sprite-2"
                points="680.6 314.3 725 256.8 892.3 385.8 874.8 408.4 847.9 443.4 680.6 314.3" />
              <text class="cls-12" transform="translate(755.9 323.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 14A </tspan>
              </text>
              <text class="cls-10" transform="translate(750.3 333) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(753.4 366) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(710.1 300.3) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(856.3 422.3) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-15" ng-class="nvtCalamanda.inmovablesClassList[32]"
              ng-click="nvtCalamanda.showPropertyData(71, '15A', nvtCalamanda.inmovables[32].idProperty)">
              <polyline id="AN-15" class="property nvt-sprite-1"
                points="936.7 328.3 892.3 385.8 725 256.8 769.4 199.2 936.7 328.3" />
              <text class="cls-12" transform="translate(800.4 271) rotate(37.7)">
                <tspan x="0" y="0">NAVE 15A </tspan>
              </text>
              <text class="cls-10" transform="translate(794.9 280.5) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(797.5 308.7) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(754.5 242.8) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(900.4 365.1) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-16" ng-class="nvtCalamanda.inmovablesClassList[33]"
              ng-click="nvtCalamanda.showPropertyData(71, '16A', nvtCalamanda.inmovables[33].idProperty)">
              <polyline id="AN-16" class="property nvt-sprite-2"
                points="769.4 199.2 813.8 141.7 981.1 270.8 963.6 293.4 936.7 328.3 769.4 199.2" />
              <text class="cls-12" transform="translate(844.6 208.5) rotate(37.7)">
                <tspan x="0" y="0">NAVE 16A </tspan>
              </text>
              <text class="cls-10" transform="translate(839 217.9) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(842.2 250.9) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(798.9 185.2) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(945.1 307.2) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-17" ng-class="nvtCalamanda.inmovablesClassList[34]"
              ng-click="nvtCalamanda.showPropertyData(71, '17A', nvtCalamanda.inmovables[34].idProperty)">
              <polyline id="AN-17" class="property nvt-sprite-1"
                points="981.1 270.8 813.8 141.7 858.2 84.1 1025.5 213.2 981.1 270.8" />
              <text class="cls-12" transform="translate(889.7 154) rotate(37.7)">
                <tspan x="0" y="0">NAVE 17A </tspan>
              </text>
              <text class="cls-10" transform="translate(884.2 163.5) rotate(37.7)">
                <tspan x="0" y="0">569.80m2</tspan>
              </text>
              <text class="cls-8" transform="translate(886.6 193.4) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(843.3 127.7) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
              <text class="cls-8" transform="translate(989.5 249.7) rotate(-52.3)">
                <tspan x="0" y="0">14.00</tspan>
              </text>
            </g>
            <g id="A-18" ng-class="nvtCalamanda.inmovablesClassList[35]"
              ng-click="nvtCalamanda.showPropertyData(71, '18A', nvtCalamanda.inmovables[35].idProperty)">
              <polyline id="AN-18" class="property nvt-sprite-2"
                points="858.2 84.1 920 4 1092 127 1025.5 213.2 858.2 84.1" />
              <text class="cls-10" transform="translate(936.6 93.6) rotate(37.7)">
                <tspan x="0" y="0">823.85m2</tspan>
              </text>
              <text />
              <text class="cls-8" transform="translate(931 135.8) rotate(37.7)">
                <tspan x="0" y="0">40.70</tspan>
              </text>
              <text class="cls-8" transform="translate(978.3 62.3) rotate(35.6)">
                <tspan x="0" y="0">40.72</tspan>
              </text>
              <text class="cls-8" transform="translate(896.4 58.9) rotate(-52.3)">
                <tspan x="0" y="0">19.50</tspan>
              </text>
              <text class="cls-8" transform="translate(1045 177.8) rotate(-52.3)">
                <tspan x="0" y="0">20.99</tspan>
              </text>
              <text class="cls-12" transform="translate(942.1 84.1) rotate(37.7)">
                <tspan x="0" y="0">NAVE 18A </tspan>
              </text>
            </g>
            <g id="LINEAS_DIVISORIAS_MODULO_A" data-name="LINEAS DIVISORIAS MODULO A">
              <line class="cls-11" x1="147.8" y1="1004.8" x2="315" y2="1133.9" />
              <line class="cls-11" x1="192.2" y1="947.2" x2="359.4" y2="1076.3" />
              <line class="cls-11" x1="236.6" y1="889.7" x2="403.8" y2="1018.8" />
              <line class="cls-11" x1="281" y1="832.2" x2="448.2" y2="961.2" />
              <line class="cls-11" x1="325.4" y1="774.6" x2="492.6" y2="903.7" />
              <line class="cls-11" x1="369.8" y1="717.1" x2="537" y2="846.2" />
              <line class="cls-11" x1="414.2" y1="659.5" x2="581.4" y2="788.6" />
              <line class="cls-11" x1="458.6" y1="602" x2="625.8" y2="731.1" />
              <line class="cls-11" x1="503" y1="544.5" x2="670.2" y2="673.5" />
              <line class="cls-11" x1="547.4" y1="486.9" x2="714.6" y2="616" />
              <line class="cls-11" x1="591.8" y1="429.4" x2="759" y2="558.5" />
              <line class="cls-11" x1="636.2" y1="371.8" x2="803.4" y2="500.9" />
              <line class="cls-11" x1="680.6" y1="314.3" x2="847.9" y2="443.4" />
              <line class="cls-11" x1="725" y1="256.8" x2="892.3" y2="385.8" />
              <line class="cls-11" x1="769.4" y1="199.2" x2="936.7" y2="328.3" />
              <line class="cls-11" x1="813.8" y1="141.7" x2="981.1" y2="270.8" />
              <line class="cls-11" x1="858.2" y1="84.1" x2="1025.5" y2="213.2" />
              <line class="cls-11" x1="102.8" y1="1062.2" x2="270.3" y2="1190.4" />
            </g>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row quote-header">
        <div class="col s12">
          <h2 class="pt-32 fs__26px">Locales Industriales</h2>
        </div>
      </div>
    </div>
    <div style="margin:0 16px">
      <svg id="CLUSTER_ETAPA_CONDO" data-name="CLUSTER / ETAPA / CONDO" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 865">
        <defs>
          <style>
            .cls-1,
            .cls-2,
            .cls-3,
            .cls-4 {
              fill-rule: evenodd;
            }

            .cls-1,
            .cls-2,
            .cls-3,
            .cls-4,
            .cls-5,
            .cls-6 {
              stroke-width: 0px;
            }

            .cls-1,
            .cls-5 {
              fill: #002856;
            }

            .cls-7 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-7,
            .cls-8,
            .cls-9,
            .cls-10,
            .cls-11,
            .cls-12,
            .cls-13,
            .cls-14,
            .cls-15,
            .cls-16,
            .cls-17,
            .cls-18,
            .cls-19,
            .cls-20,
            .cls-21,
            .cls-22,
            .cls-23,
            .cls-24,
            .cls-25 {
              fill: #fff;
            }

            .cls-7,
            .cls-8,
            .cls-9,
            .cls-10,
            .cls-11,
            .cls-12,
            .cls-13,
            .cls-14,
            .cls-15,
            .cls-16,
            .cls-17,
            .cls-18,
            .cls-19,
            .cls-20,
            .cls-21,
            .cls-24,
            .cls-25 {
              font-family: CenturyGothic, 'Century Gothic';
            }

            .cls-2 {
              opacity: .5;
            }

            .cls-2,
            .cls-26,
            .cls-4,
            .cls-27,
            .cls-28,
            .cls-29,
            .cls-30 {
              fill: #ffbf00;
            }

            .cls-8 {
              letter-spacing: 0em;
            }

            .cls-8,
            .cls-19 {
              font-size: 11.6px;
            }

            .cls-9 {
              font-size: 11.4px;
            }

            .cls-10 {
              font-size: 11.6px;
            }

            .cls-3 {
              fill: #0047ba;
            }

            .cls-31 {
              letter-spacing: 0em;
            }

            .cls-11 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-12 {
              letter-spacing: 0em;
            }

            .cls-12,
            .cls-15 {
              font-size: 11.4px;
            }

            .cls-13 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-26 {
              font-size: 13.6px;
            }

            .cls-26,
            .cls-27,
            .cls-32,
            .cls-28,
            .cls-22,
            .cls-23,
            .cls-29,
            .cls-30,
            .cls-33 {
              font-family: CenturyGothic-Bold, 'Century Gothic';
              font-weight: 700;
            }

            .cls-14 {
              letter-spacing: 0em;
            }

            .cls-14,
            .cls-17 {
              font-size: 11.4px;
            }

            .cls-34 {
              letter-spacing: 0em;
            }

            .cls-35 {
              letter-spacing: 0em;
            }

            .cls-15 {
              letter-spacing: 0em;
            }

            .cls-16 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-27 {
              font-size: 12.2px;
            }

            .cls-17 {
              letter-spacing: 0em;
            }

            .cls-18 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-32 {
              font-size: 13.9px;
            }

            .cls-32,
            .cls-33,
            .cls-6 {
              fill: #1c2044;
            }

            .cls-19 {
              letter-spacing: 0em;
            }

            .cls-28 {
              font-size: 9.8px;
            }
            
            .stc10 {
						fill: #002856;
					  }
            .cls-20 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-36 {
              fill: none;
              stroke: #fff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 1.2px;
            }

            .cls-21 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-22 {
              font-size: 34.2px;
            }

            .cls-23 {
              font-size: 32.9px;
            }

            .cls-29 {
              font-size: 13.3px;
            }

            .cls-24 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-30 {
              font-size: 12px;
            }

            .cls-25 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-33 {
              font-size: 14px;
            }

            .stc13 {
						fill: #FFFFFF;
					}

          .stc19 {
						font-family: 'CenturyGothic-Bold';
					}

          .stc38 {
						font-size: 36.0618px;
					}
          </style>
        </defs>
        <g id="BASE">
          <image width="1366" height="865"
            xlink:href="media/assets/img/navetec/app/calamanda/calamanda_locales_2.jpg" />
        </g>
        <g id="CLUSTER">
          <g id="LOCALES_COMERCIALES" data-name="LOCALES COMERCIALES">
            <g id="LINEAS_DIVISORIAS_LOCALES_COMERCIALES" data-name="LINEAS DIVISORIAS LOCALES COMERCIALES">
              <g>
                <text />
                <line class="cls-36" x1="166.4" y1="152.7" x2="165.8" y2="6.5" />
                <line class="cls-36" x1="86.8" y1="152.9" x2="86.2" y2="6.7" />
                <line class="cls-36" x1="246.3" y1="152.6" x2="245.8" y2="6.4" />
                <line class="cls-36" x1="326.3" y1="152.4" x2="325.7" y2="6.2" />
                <line class="cls-36" x1="406.5" y1="152.3" x2="405.9" y2="6.1" />
                <line class="cls-36" x1="487.7" y1="152.2" x2="487.1" y2="5.9" />
                <line class="cls-36" x1="873.9" y1="1.7" x2="874.2" y2="151.4" />
                <line class="cls-36" x1="953.9" y1="1.3" x2="954.2" y2="151.3" />
                <line class="cls-36" x1="1032.9" y1=".9" x2="1033.2" y2="151.2" />
                <line class="cls-36" x1="1112" y1=".5" x2="1112.2" y2="151" />
                <line class="cls-36" x1="1192" y1="0" x2="1192.2" y2="150.9" />
              </g>
              <g>
                <text />
                <line class="cls-36" x1="485.3" y1="630.1" x2="485.4" y2="481.4" />
                <line class="cls-36" x1="1188.7" y1="630.4" x2="1188.8" y2="477.1" />
                <line class="cls-36" x1="83" y1="481.2" x2="83.4" y2="629.9" />
                <line class="cls-36" x1="163.1" y1="481.3" x2="163.5" y2="629.9" />
                <line class="cls-36" x1="243" y1="481.3" x2="243.4" y2="630" />
                <line class="cls-36" x1="322.8" y1="481.3" x2="323.3" y2="630" />
                <line class="cls-36" x1="403.3" y1="481.4" x2="403.7" y2="630" />
                <line class="cls-36" x1="870.9" y1="478" x2="870.9" y2="630.3" />
                <line class="cls-36" x1="950.9" y1="477.8" x2="950.8" y2="630.3" />
                <line class="cls-36" x1="1029.9" y1="477.5" x2="1029.8" y2="630.3" />
                <line class="cls-36" x1="1108.8" y1="477.3" x2="1108.7" y2="630.4" />
              </g>
            </g>
            <g id="L-01" ng-class="nvtCalamanda.inmovablesClassList[36]"
              ng-click="nvtCalamanda.showPropertyData(71, '1', nvtCalamanda.inmovables[36].idProperty)">
              <polyline id="LC-01" class="property nvt-sprite-1" points="4.6 6.8 86.2 6.7 86.8 152.9 5.1 153 4.6 6.8" />
              <text class="cls-29" transform="translate(24 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(38.2 76.4) rotate(-.4)">
                <tspan x="0" y="0">01</tspan>
              </text>
              <text class="cls-15" transform="translate(33.2 20.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.20</tspan>
              </text>
              <text class="cls-25" transform="translate(16 103) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <g id="A-01">
                <text class="cls-9" transform="translate(22.6 101)">
                  <tspan class="cls-34" x="0" y="0">6</tspan>
                  <tspan x="6.3" y="0">8.84 m2</tspan>
                </text>
              </g>
              <text class="cls-12" transform="translate(32.5 145.8) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.19</tspan>
              </text>
            </g>
            <g id="L-02" ng-class="nvtCalamanda.inmovablesClassList[37]"
              ng-click="nvtCalamanda.showPropertyData(71, '2', nvtCalamanda.inmovables[37].idProperty)">
              <g id="L-02-2" data-name="L-02">
                <polyline id="LC-02" class="property nvt-sprite-2"
                  points="86.2 6.7 165.8 6.5 166.4 152.7 86.8 152.9 86.2 6.7" />
                <text class="cls-29" transform="translate(105.8 61.1) rotate(-.4)">
                  <tspan x="0" y="0">LOCAL</tspan>
                </text>
                <text class="cls-15" transform="translate(113.3 20.3) rotate(.3) skewX(.3)">
                  <tspan x="0" y="0">6.05</tspan>
                </text>
                <text class="cls-25" transform="translate(98.2 103.3) rotate(-90.1) skewX(-.3)">
                  <tspan x="0" y="0">11.10</tspan>
                </text>
                <text class="cls-15" transform="translate(112.6 145.8) rotate(.3) skewX(.3)">
                  <tspan x="0" y="0">6.08</tspan>
                </text>
                <text class="cls-9" transform="translate(105.1 101.3)">
                  <tspan class="cls-35" x="0" y="0">67.13 </tspan>
                  <tspan x="31.6" y="0">m2</tspan>
                </text>
              </g>
              <text class="cls-29" transform="translate(119.9 76.4) rotate(-.4)">
                <tspan x="0" y="0">02</tspan>
              </text>
            </g>
            <g id="L-03" ng-class="nvtCalamanda.inmovablesClassList[38]"
              ng-click="nvtCalamanda.showPropertyData(71, '3', nvtCalamanda.inmovables[38].idProperty)">
              <polyline class="property nvt-sprite-1" points="165.8 6.5 245.8 6.4 246.3 152.6 166.4 152.7 165.8 6.5" />
              <text class="cls-29" transform="translate(184.4 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(198.6 76.4) rotate(-.4)">
                <tspan x="0" y="0">03</tspan>
              </text>
              <text class="cls-12" transform="translate(195.1 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-25" transform="translate(176.7 103.7) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-12" transform="translate(194.4 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-9" transform="translate(183.6 101.3)">
                <tspan class="cls-34" x="0" y="0">67.40 </tspan>
                <tspan x="31.6" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-04" ng-class="nvtCalamanda.inmovablesClassList[39]"
              ng-click="nvtCalamanda.showPropertyData(71, '4', nvtCalamanda.inmovables[39].idProperty)">
              <polyline class="property nvt-sprite-2" points="245.8 6.4 325.7 6.2 326.3 152.5 246.3 152.6 245.8 6.4" />
              <text class="cls-29" transform="translate(260.1 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(274.3 76.4) rotate(-.4)">
                <tspan x="0" y="0">04</tspan>
              </text>
              <text class="cls-15" transform="translate(276.1 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-25" transform="translate(256.5 102.7) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-12" transform="translate(275.4 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-9" transform="translate(264.4 101.3)">
                <tspan class="cls-35" x="0" y="0">67.40</tspan>
                <tspan x="28.4" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-05" ng-class="nvtCalamanda.inmovablesClassList[40]"
              ng-click="nvtCalamanda.showPropertyData(71, '5', nvtCalamanda.inmovables[40].idProperty)">
              <polyline class="property nvt-sprite-1" points="325.7 6.2 405.9 6.1 406.5 152.3 326.3 152.5 325.7 6.2" />
              <text class="cls-12" transform="translate(354 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-25" transform="translate(336.7 98.8) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-29" transform="translate(344.8 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(358.9 76.4) rotate(-.4)">
                <tspan x="0" y="0">05</tspan>
              </text>
              <text class="cls-15" transform="translate(353.3 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-9" transform="translate(346.8 101)">
                <tspan x="0" y="0">67.62 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="363.2 111.6 370.1 118.6 363.2 125.5 363.2 111.6" />
                <polyline class="cls-4" points="363.2 111.6 363.2 125.5 356.2 118.6 363.2 111.6" />
              </g>
            </g>
            <g id="L-06" ng-class="nvtCalamanda.inmovablesClassList[41]"
              ng-click="nvtCalamanda.showPropertyData(71, '6', nvtCalamanda.inmovables[41].idProperty)">
              <polyline id="LC-06" class="property nvt-sprite-2"
                points="405.9 6.1 487.1 5.9 487.7 152.2 406.5 152.3 405.9 6.1" />
              <text class="cls-15" transform="translate(437.1 21.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.17</tspan>
              </text>
              <text class="cls-25" transform="translate(416.9 96.4) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-29" transform="translate(429.5 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(443.6 76.4) rotate(-.4)">
                <tspan x="0" y="0">06</tspan>
              </text>
              <text class="cls-15" transform="translate(436.4 146.8) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-9" transform="translate(426.9 101.3)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.50 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="449.3 111.6 456.2 118.6 449.3 125.5 449.3 111.6" />
                <polyline class="cls-4" points="449.3 111.6 449.3 125.5 442.4 118.6 449.3 111.6" />
              </g>
            </g>
            <g id="L-07" ng-class="nvtCalamanda.inmovablesClassList[42]"
              ng-click="nvtCalamanda.showPropertyData(71, '7', nvtCalamanda.inmovables[42].idProperty)">
              <polyline id="LC-07" class="property nvt-sprite-1"
                points="954.2 151.3 874.2 151.4 873.9 1.7 953.9 1.3 954.2 151.3" />
              <text class="cls-17" transform="translate(887.2 88.1) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-17" transform="translate(901.8 14.8) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-29" transform="translate(892.4 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(906.6 68.7) rotate(-.4)">
                <tspan x="0" y="0">07</tspan>
              </text>
              <text class="cls-17" transform="translate(899.8 141.2) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(892.6 95.4)">
                <tspan class="cls-34" x="0" y="0">69.16 </tspan>
                <tspan x="31.6" y="0">m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="911.8 105.6 918.7 112.5 911.8 119.5 911.8 105.6" />
                <polyline class="cls-4" points="911.8 105.6 911.8 119.5 904.9 112.5 911.8 105.6" />
              </g>
            </g>
            <g id="L-08" ng-class="nvtCalamanda.inmovablesClassList[43]"
              ng-click="nvtCalamanda.showPropertyData(71, '8', nvtCalamanda.inmovables[43].idProperty)">
              <polyline id="LC-08" class="property nvt-sprite-2"
                points="954.2 151.3 953.9 1.3 1032.9 .9 1033.2 151.2 954.2 151.3" />
              <g>
                <text class="cls-17" transform="translate(965.7 88.1) rotate(-90) skewX(-.3)">
                  <tspan x="0" y="0">11.37</tspan>
                </text>
                <text class="cls-17" transform="translate(983.7 14.9) rotate(0) skewX(.3)">
                  <tspan x="0" y="0">6.00</tspan>
                </text>
                <text class="cls-29" transform="translate(972.7 52.7) rotate(-.4)">
                  <tspan x="0" y="0">LOCAL</tspan>
                </text>
                <text class="cls-30" transform="translate(987.1 69) rotate(2.5) scale(1 1) skewX(5.8)">
                  <tspan x="0" y="0">08</tspan>
                </text>
                <text class="cls-17" transform="translate(981.7 141.3) rotate(0) skewX(.3)">
                  <tspan x="0" y="0">6.00</tspan>
                </text>
                <text class="cls-9" transform="translate(971.9 94.5)">
                  <tspan class="cls-35" x="0" y="0">6</tspan>
                  <tspan x="6.3" y="0">8.43 m2</tspan>
                </text>
                <g>
                  <polyline class="cls-2" points="993.4 105.6 1000.3 112.5 993.4 119.5 993.4 105.6" />
                  <polyline class="cls-4" points="993.4 105.6 993.4 119.5 986.4 112.5 993.4 105.6" />
                </g>
              </g>
            </g>
            <g id="L-09" ng-class="nvtCalamanda.inmovablesClassList[44]"
              ng-click="nvtCalamanda.showPropertyData(71, '9', nvtCalamanda.inmovables[44].idProperty)">
              <polyline id="LC-09" class="property nvt-sprite-1"
                points="1112.2 151 1033.2 151.2 1032.9 .9 1112 .5 1112.2 151" />
              <text class="cls-17" transform="translate(1043 85.6) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.39</tspan>
              </text>
              <text class="cls-14" transform="translate(1065.1 14.9) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-29" transform="translate(1050.3 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(1064.4 68.7) rotate(-.4)">
                <tspan x="0" y="0">09</tspan>
              </text>
              <text class="cls-17" transform="translate(1063 141.4) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(1048.1 95.4)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.55 m2</tspan>
              </text>
            </g>
            <g id="L-10" ng-class="nvtCalamanda.inmovablesClassList[45]"
              ng-click="nvtCalamanda.showPropertyData(71, '10', nvtCalamanda.inmovables[45].idProperty)">
              <polyline id="LC-10" class="property nvt-sprite-2"
                points="1112.2 151 1112 .5 1191 0 1191.3 150.9 1112.2 151" />
              <text class="cls-17" transform="translate(1123.2 85.5) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.41</tspan>
              </text>
              <text class="cls-17" transform="translate(1189.1 88.1) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.43</tspan>
              </text>
              <text class="cls-14" transform="translate(1147 15) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-29" transform="translate(1130.5 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(1144.6 68.7) rotate(-.4)">
                <tspan x="0" y="0">10</tspan>
              </text>
              <text class="cls-14" transform="translate(1144.9 141.5) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(1129.3 96.4)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.67 m2</tspan>
              </text>
            </g>
            <g id="L-11" ng-class="nvtCalamanda.inmovablesClassList[46]"
              ng-click="nvtCalamanda.showPropertyData(71, '11', nvtCalamanda.inmovables[46].idProperty)">
              <polyline id="LC-11" class="property nvt-sprite-1"
                points="2.1 481.2 83 481.2 83.4 629.9 2.4 629.9 2.1 481.2" />
              <text class="cls-20" transform="translate(26.1 498.3) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.14</tspan>
              </text>
              <text class="cls-7" transform="translate(12 569.2) rotate(-89.5) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(21.1 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(35.3 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11</tspan>
              </text>
              <text class="cls-10" transform="translate(19.7 572.2) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.28 m2</tspan>
              </text>
              <text class="cls-19" transform="translate(29.6 617.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.16</tspan>
              </text>
            </g>
            <g id="L-12" ng-class="nvtCalamanda.inmovablesClassList[47]"
              ng-click="nvtCalamanda.showPropertyData(71, '12', nvtCalamanda.inmovables[47].idProperty)">
              <polyline id="LC-12" class="property nvt-sprite-2"
                points="83 481.2 163.1 481.3 163.5 629.9 83.4 629.9 83 481.2" />
              <text class="cls-20" transform="translate(108.9 499.2) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-18" transform="translate(95.7 570.3) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(102.8 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(116.9 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">12</tspan>
              </text>
              <text class="cls-8" transform="translate(109.6 617.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-10" transform="translate(102.1 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.59 </tspan>
                <tspan x="32.1" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-13" ng-class="nvtCalamanda.inmovablesClassList[48]"
              ng-click="nvtCalamanda.showPropertyData(71, '13', nvtCalamanda.inmovables[48].idProperty)">
              <polyline id="LC-13" class="property nvt-sprite-1"
                points="163.1 481.3 243 481.3 243.4 630 163.5 629.9 163.1 481.3" />
              <text class="cls-20" transform="translate(191.2 500.1) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-18" transform="translate(174.2 572.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(181.4 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(195.5 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">13</tspan>
              </text>
              <text class="cls-19" transform="translate(191.4 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-10" transform="translate(180.6 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.42</tspan>
                <tspan x="28.9" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-14" ng-class="nvtCalamanda.inmovablesClassList[49]"
              ng-click="nvtCalamanda.showPropertyData(71, '14', nvtCalamanda.inmovables[49].idProperty)">
              <polyline id="LC-14" class="property nvt-sprite-2"
                points="243 481.3 322.8 481.3 323.3 630 243.4 630 243 481.3" />
              <text class="cls-20" transform="translate(273.5 500.9) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-18" transform="translate(253.9 572) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(257 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(271.2 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">14</tspan>
              </text>
              <text class="cls-8" transform="translate(272.3 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-10" transform="translate(261.3 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.40</tspan>
                <tspan x="28.9" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-15" ng-class="nvtCalamanda.inmovablesClassList[50]"
              ng-click="nvtCalamanda.showPropertyData(71, '15', nvtCalamanda.inmovables[50].idProperty)">
              <polyline id="LC-15" class="property nvt-sprite-1"
                points="322.8 481.3 403.3 481.4 403.7 630 323.3 630 322.8 481.3" />
              <text class="cls-20" transform="translate(356 501.8) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.11</tspan>
              </text>
              <text class="cls-18" transform="translate(334 574.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(341.6 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(355.7 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">15</tspan>
              </text>
              <text class="cls-19" transform="translate(350.1 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.11</tspan>
              </text>
              <text class="cls-10" transform="translate(343.7 572.2) scale(1 1)">
                <tspan x="0" y="0">67.84 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="365.2 588.2 372.1 595.2 365.2 602.3 365.2 588.2" />
                <polyline class="cls-4" points="365.2 588.2 365.2 602.3 358.2 595.2 365.2 588.2" />
              </g>
            </g>
            <g id="L-16" ng-class="nvtCalamanda.inmovablesClassList[51]"
              ng-click="nvtCalamanda.showPropertyData(71, '16', nvtCalamanda.inmovables[51].idProperty)">
              <polyline id="LC-16" class="property nvt-sprite-2"
                points="403.7 630 403.3 481.4 485.4 481.4 485.3 630.1 403.7 630" />
              <text class="cls-20" transform="translate(439.6 502.7) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.24</tspan>
              </text>
              <text class="cls-18" transform="translate(414.2 574.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(426.2 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(440.4 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">16</tspan>
              </text>
              <text class="cls-8" transform="translate(433.2 618.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.13</tspan>
              </text>
              <text class="cls-10" transform="translate(423.7 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">9.07m2</tspan>
              </text>
              <polyline class="cls-2" points="447.2 588.2 454.1 595.2 447.2 602.3 447.2 588.2" />
              <polyline class="cls-4" points="447.2 588.2 447.2 602.3 440.3 595.2 447.2 588.2" />
            </g>
            <g id="L-17" ng-class="nvtCalamanda.inmovablesClassList[52]"
              ng-click="nvtCalamanda.showPropertyData(71, '17', nvtCalamanda.inmovables[52].idProperty)">
              <polyline id="LC-17" class="property nvt-sprite-1"
                points="870.9 630.3 870.9 478 950.9 477.8 950.8 630.3 870.9 630.3" />
              <text class="cls-21" transform="translate(880.8 576.1) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-24" transform="translate(901.7 490.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-26" transform="translate(890.3 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(904.4 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">17</tspan>
              </text>
              <text class="cls-13" transform="translate(897.6 616.9) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(890.6 570.5) scale(1 1)">
                <tspan x="0" y="0">69.15 m2</tspan>
              </text>
              <polyline class="cls-2" points="911.6 587.9 918.5 595 911.6 602 911.6 587.9" />
              <polyline class="cls-4" points="911.6 587.9 911.6 602 904.7 595 911.6 587.9" />
            </g>
            <g id="L-18" ng-class="nvtCalamanda.inmovablesClassList[53]"
              ng-click="nvtCalamanda.showPropertyData(71, '18', nvtCalamanda.inmovables[53].idProperty)">
              <polyline id="LC-18" class="property nvt-sprite-2"
                points="950.9 477.8 1029.9 477.5 1029.8 630.3 950.8 630.3 950.9 477.8" />
              <text class="cls-24" transform="translate(979.1 491.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-16" transform="translate(962.6 572.8) rotate(-90) scale(1 1) skewX(-.3)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-26" transform="translate(970.5 527) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-27" transform="translate(984.9 543.6) rotate(2.6) scale(1 1) skewX(5.9)">
                <tspan x="0" y="0">18</tspan>
              </text>
              <text class="cls-13" transform="translate(979.5 617) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(969.7 569.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.42 m2</tspan>
              </text>
              <polyline class="cls-2" points="990.9 586.7 997.8 593.7 990.9 600.8 990.9 586.7" />
              <polyline class="cls-4" points="990.9 586.7 990.9 600.8 983.9 593.7 990.9 586.7" />
            </g>
            <g id="L-19" ng-class="nvtCalamanda.inmovablesClassList[54]"
              ng-click="nvtCalamanda.showPropertyData(71, '19', nvtCalamanda.inmovables[54].idProperty)">
              <polyline id="LC-19" class="property nvt-sprite-1"
                points="1029.9 477.5 1108.8 477.3 1108.7 630.4 1029.8 630.3 1029.9 477.5" />
              <text class="cls-21" transform="translate(1039.8 575.1) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.39</tspan>
              </text>
              <text class="cls-24" transform="translate(1057.6 490.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-26" transform="translate(1048 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(1062.2 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">19</tspan>
              </text>
              <text class="cls-13" transform="translate(1060.8 617.1) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(1045.9 570.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.53 m2</tspan>
              </text>
            </g>
            <g id="L-20" ng-class="nvtCalamanda.inmovablesClassList[55]"
              ng-click="nvtCalamanda.showPropertyData(71, '20', nvtCalamanda.inmovables[55].idProperty)">
              <polyline id="LC-20" class="property nvt-sprite-2"
                points="1108.8 477.3 1188.8 477.1 1188.7 630.4 1108.7 630.4 1108.8 477.3" />
              <text class="cls-21" transform="translate(1119.9 574) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.41</tspan>
              </text>
              <text class="cls-21" transform="translate(1185.8 574.4) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.43</tspan>
              </text>
              <text class="cls-24" transform="translate(1139.6 491.2) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-26" transform="translate(1128.2 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(1142.3 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">20</tspan>
              </text>
              <text class="cls-13" transform="translate(1142.6 617.2) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(1127.1 571.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">9.51m2</tspan>
              </text>
            </g>
          </g>
        </g>
        <g id="COMPLEMENTO">
          <rect class="cls-5" x="554" y="296.5" width="240.7" height="37" />
          <text class="cls-22" transform="translate(566.8 327.5)">
            <tspan x="0" y="0">PLANTA BAJA</tspan>
          </text>
          <rect class="cls-5" x="528.9" y="757.6" width="231.3" height="35.6" />
          <text class="cls-23" transform="translate(541.2 787.4)">
            <tspan x="0" y="0">PLANTA ALTA</tspan>
          </text>
          <g>
            <g>
              <text class="cls-33" transform="translate(572.3 121.3) rotate(-1.8) scale(1 1.1) skewX(1.2)">
                <tspan x="0" y="0">SALIDA</tspan>
              </text>
              <path class="cls-6"
                d="M598.7,140.5c-7.4.3-13.8-5.9-14.6-13.9l-19.6.7,17.6,15.5,17.6,15.5,15.8-16.7,15.8-16.7-19.6.7c0,8-5.6,14.6-13,14.9" />
            </g>
            <g>
              <text class="cls-32" transform="translate(735.6 159.6) rotate(-.4) scale(1 1.1) skewX(.3)">
                <tspan x="0" y="0">ACCESO</tspan>
              </text>
              <path class="cls-6"
                d="M765.5,130.6c-7.5.2-13.4,6.8-13.6,14.9l-19.8.4,16.5-16.7,16.5-16.7,17.3,16,17.3,16-19.8.4c-.6-8.1-6.9-14.5-14.3-14.3" />
            </g>
            <polyline class="cls-6" points="661.7 100.2 700.4 100.2 700.4 152.4 661.7 152.4" />
          </g>
          <text class="cls-29" transform="translate(1204.3 61.1) rotate(-.4)">
            <tspan x="0" y="0">CISTERNA</tspan>
          </text>
          <g>
            <text class="cls-29" transform="translate(1198.1 45.7) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
            <text class="cls-29" transform="translate(1209.5 116.9) rotate(-.4)">
              <tspan x="0" y="0">BAÑOS</tspan>
            </text>
            <text class="cls-28" transform="translate(1290.6 73.7) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
          </g>
          <text class="cls-28" transform="translate(1279.7 89.2) rotate(-.4)">
            <tspan x="0" y="0">CONTENEDORES</tspan>
          </text>
          <g>
            <text class="cls-28" transform="translate(1204.8 593.2) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
            <text class="cls-28" transform="translate(1205.3 608.6) rotate(-.4)">
              <tspan x="0" y="0">MÁQUINAS</tspan>
            </text>
          </g>
        </g>
        <g>
					<a href="#!/Navetec-Calamanda_ModuloA_Business_Park" class="pb__condo">
						<polyline class="stc10" points="-0.1,2.3 512.2,1.2 512.6,870.9 2.4,880.8 2.6,4.7 	" />
						<text transform="matrix(1 0 0 1 141.056 402.6244)" class="stc13 stc19 stc38">MODULO A</text>
					</a>
				</g>
				<g>
					<a href="#!/Navetec-Calamanda_ModuloB_Business_Park" class="pb__condo">
						<polygon class="stc10" points="852.8,1.2 1285.2,1.2 1285.6,827.1 852.8,856.6 	" />
						<text transform="matrix(1 0 0 1 970.6205 402.6244)" class="stc13 stc19 stc38">MODULO B</text>
					</a>
				</g>
      </svg>
    </div>



  </div>





</body>

</html>