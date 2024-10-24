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
  <title>Navete Business Park</title>
  <script type="text/javascript" src="media/assets/js/analytics.js"></script>
  <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/coutdown.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
  <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
</head>


<body ng-controller="nvtSurNuevoTresQuoteCtrl as nvtSurNuevoTres">

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
  <div class="modal-dialog" ng-class="nvtSurNuevoTres.dialogDisplay">
    <div class="backdrop-dialog" ng-click="nvtSurNuevoTres.closeDialog()"></div>
    <div class="container-dialog p-20">
      <div class="toolbar-dialog blue-txt">
        Cotización
        <span ng-click="nvtSurNuevoTres.closeDialog()">
          <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
        </span>
      </div>
      <div class="content-dialog">
        <div class="divider"></div>
        <div class="p-20 grey lighten-5">
          <div class="p-5">
            <h6 class="futura-med">Navetec Business Park SUR 57 Etapa 3</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">{{nvtSurNuevoTres.propertyData.propertyClass}}</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">{{nvtSurNuevoTres.propertyData.type}}</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">Número {{nvtSurNuevoTres.propertyData.number}}</h6>
          </div>

          <div class="p-5">
            <h6 class="futura-light">Área de {{nvtSurNuevoTres.propertyData.area}} M&sup2;</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light">Precio por M&sup2; de
              ${{nvtSurNuevoTres.property.sample.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }}
              MXN</h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light green-text">Precio de
              ${{nvtSurNuevoTres.property.sample.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }}
              MXN <span
                style="color: #857C82; font-size: 12px;">{{ (nvtSurNuevoTres.propertyData.propertyClass !== 'Lote industrial') ? '+ I.V.A.' : '' }}</span>
            </h6>
          </div>
          <div class="p-5">
            <h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
          </div>
        </div>
        <div class="divider"></div>
        <div class="py-20 ">
          <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
        </div>
        <div class="divider"></div>
        <div class="p-20">
          <!-- <h6 class="deep-purple-text futura-light">Compra en Octubre y paga la primera mensualidad hasta Noviembre 2023</h6>
					<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
					<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en Octubre 2023</p> -->
        </div>
        <div class="divider"></div>
        <div class="p-20">
          <p class="blue-text futura-book">¡Apártalo ahora!</p>
          <p class="green-text">Con tan solo $20,000</p>
          <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
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
          <h2 class="center-align futura-med">SUR 57 ETAPA 3 </h2>
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
      <svg id="N.B.P._SUR_57" data-name="N.B.P. SUR 57" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 984.5">
        <defs>
          <style>
            .cls-1 {
              fill: #002856;
            }

            .cls-1,
            .cls-2,
            .cls-3,
            .cls-4,
            .cls-5,
            .cls-6,
            .cls-7,
            .cls-8 {
              stroke-width: 0px;
            }

            .cls-1,
            .cls-2,
            .cls-3,
            .cls-5,
            .cls-6 {
              fill-rule: evenodd;
            }

            .cls-9 {
              letter-spacing: 0em;
            }

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
            .cls-23 {
              fill: #fff;
            }

            .cls-9,
            .cls-10,
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
            .cls-23 {
              font-family: CenturyGothic, 'Century Gothic';
            }

            .cls-9,
            .cls-15 {
              font-size: 7.6px;
            }

            .cls-2 {
              opacity: .5;
            }

            .cls-2,
            .cls-24,
            .cls-5,
            .cls-25,
            .cls-26 {
              fill: #ffbf00;
            }

            .cls-3 {
              fill: #0047ba;
            }

            .cls-24,
            .cls-11,
            .cls-27,
            .cls-25,
            .cls-26 {
              font-family: CenturyGothic-Bold, 'Century Gothic';
              font-weight: 700;
            }

            .cls-24,
            .cls-13 {
              font-size: 8.7px;
            }

            .cls-28,
            .cls-4,
            .cls-7,
            .cls-29,
            .cls-30,
            .cls-31 {
              fill: none;
            }

            .cls-28,
            .cls-4,
            .cls-29,
            .cls-32,
            .cls-30 {
              stroke-linecap: round;
              stroke-linejoin: round;
            }

            .cls-28,
            .cls-29 {
              stroke: #fff;
            }

            .cls-28,
            .cls-31 {
              stroke-width: 3.2px;
            }

            .cls-4 {
              stroke: #000;
            }

            .cls-33 {
              letter-spacing: 0em;
            }

            .cls-10 {
              font-size: 8.7px;
            }

            .cls-12 {
              letter-spacing: 0em;
            }

            .cls-12,
            .cls-14 {
              font-size: 7.5px;
            }

            .cls-13 {
              letter-spacing: 0em;
            }

            .cls-5 {
              opacity: .8;
            }

            .cls-6 {
              fill: #7f5b2b;
            }

            .cls-34 {
              font-size: 126.9px;
            }

            .cls-27 {
              font-size: 6.1px;
            }

            .cls-27,
            .cls-8 {
              fill: #1c2044;
            }

            .cls-25,
            .cls-22 {
              font-size: 8.6px;
            }

            .cls-35 {
              letter-spacing: 0em;
            }

            .cls-26 {
              font-size: 8.7px;
            }

            .cls-14 {
              letter-spacing: 0em;
            }

            .cls-15 {
              letter-spacing: 0em;
            }

            .cls-29 {
              stroke-width: 1.6px;
            }

            .cls-36 {
              letter-spacing: 0em;
            }

            .cls-16 {
              font-size: 7.6px;
              letter-spacing: 0em;
            }

            .cls-17 {
              font-size: 8.4px;
              letter-spacing: 0em;
            }

            .cls-18 {
              font-size: 7.6px;
              letter-spacing: 0em;
            }

            .cls-19 {
              font-size: 7.3px;
            }

            .cls-32 {
              fill: #4076ae;
            }

            .cls-32,
            .cls-30 {
              stroke-width: 4.8px;
            }

            .cls-32,
            .cls-30,
            .cls-31 {
              stroke: #002856;
            }

            .cls-20 {
              font-size: 7.1px;
            }

            .cls-37 {
              fill: #000;
              font-family: MyriadPro-Regular, 'Myriad Pro';
            }

            .cls-21 {
              font-size: 7.4px;
            }

            .cls-38 {
              letter-spacing: 0em;
            }

            .cls-31 {
              stroke-miterlimit: 10;
            }

            .cls-23 {
              font-size: 7.5px;
              letter-spacing: 0em;
            }
          </style>
          <clipPath id="clippath">
            <path class="cls-7"
              d="M88.2,777.6L1.7,2.7l635.3,40.2,255.6,56.1,388.1,172.1-70.2,351.3,154.5,108.2s-1.1-.6-53.8,253.4l-975.5-199.4-67.9-26.5-179.4,19.7" />
          </clipPath>
        </defs>
        <g id="BASE">
          <line class="cls-29" x1="739.4" y1="525.3" x2="769.4" y2="377.3" />
          <image width="1366" height="984" transform="translate(0 0)"
            xlink:href="media/assets/img/navetec/app/sur57/sur-57-etapa-3.jpg" />
        </g>
        <g id="MÓDULO_A" data-name="MÓDULO A">
          <g id="AC-01">
            <polyline id="ACN-01" class="cls-6" points="9.9 66.2 192.4 87.4 199 147.5 22.2 167.2 9.9 66.2" />
            <text class="cls-26" transform="translate(60.7 117.4) rotate(-1.2) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">ÁREA COMERCIAL</tspan>
            </text>
            <text class="cls-10" transform="translate(75.7 133.4) rotate(.8) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">716.88 m2</tspan>
            </text>
          </g>
          <g id="A-01" ng-class="nvtSurNuevoTres.inmovablesClassList[0]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '1A', nvtSurNuevoTres.inmovables[0].idProperty)">
            <polyline id="AN-01" class="property nvt-sprite-1"
              points="198.9 150.4 205.7 211.1 29.3 230.7 22.2 167.2 199 147.5" />
            <text class="cls-25" transform="translate(89.9 188.1) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 1A </tspan>
            </text>
            <text class="cls-22" transform="translate(91.1 196.6) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(28.8 188.1) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(190.5 170) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(100.3 170) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <g>
              <polyline class="cls-5" points="186.7 179.1 177.5 180.1 181.6 175 186.7 179.1" />
              <polyline class="cls-2" points="186.7 179.1 182.6 184.2 177.5 180.1 186.7 179.1" />
            </g>
          </g>
          <g id="A-02" ng-class="nvtSurNuevoTres.inmovablesClassList[1]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '2A', nvtSurNuevoTres.inmovables[1].idProperty)">
            <polyline id="AN-02" class="property nvt-sprite-2"
              points="204.9 209.6 211.7 270.3 35.3 289.9 28.5 229.3 204.9 209.6" />
            <text class="cls-25" transform="translate(100.1 253.5) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 2A </tspan>
            </text>
            <text class="cls-22" transform="translate(101.3 262) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(36.6 253.5) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(200.7 235.4) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(110.5 235.4) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-03" ng-class="nvtSurNuevoTres.inmovablesClassList[2]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '3A', nvtSurNuevoTres.inmovables[2].idProperty)">
            <polyline id="AN-03" class="property nvt-sprite-1"
              points="211.7 270.3 218.5 331 42.1 350.6 35.3 289.9 211.7 270.3" />
            <text class="cls-25" transform="translate(104 311.8) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 3A </tspan>
            </text>
            <text class="cls-22" transform="translate(105.2 320.3) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(42.6 311.8) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(204.7 293.7) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(114.4 293.7) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-04" ng-class="nvtSurNuevoTres.inmovablesClassList[3]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '4A', nvtSurNuevoTres.inmovables[3].idProperty)">
            <polyline id="AN-04" class="property nvt-sprite-2"
              points="218.7 331 225.4 391.6 49 411.3 42.3 350.6 218.7 331" />
            <text class="cls-25" transform="translate(112.4 370.1) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 4A </tspan>
            </text>
            <text class="cls-22" transform="translate(113.6 378.6) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(49.4 370.1) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(213 352) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(122.8 352) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-05" ng-class="nvtSurNuevoTres.inmovablesClassList[4]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '5A', nvtSurNuevoTres.inmovables[4].idProperty)">
            <polyline id="AN-05" class="property nvt-sprite-1"
              points="225.3 391.6 232 452.3 55.6 472 48.9 411.3 225.3 391.6" />
            <text class="cls-25" transform="translate(118.9 433.3) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 5A </tspan>
            </text>
            <text class="cls-22" transform="translate(120.1 441.8) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(55.4 433.3) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(219.5 415.2) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(129.3 415.2) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-06" ng-class="nvtSurNuevoTres.inmovablesClassList[5]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '6A', nvtSurNuevoTres.inmovables[5].idProperty)">
            <polyline id="AN-06" class="property nvt-sprite-2"
              points="232 452.2 238.8 512.9 62.4 532.6 55.6 471.9 232 452.2" />
            <text class="cls-25" transform="translate(127.6 495.3) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 6A </tspan>
            </text>
            <text class="cls-22" transform="translate(128.8 503.8) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(64.1 495.3) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(228.2 477.2) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(138 477.2) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-07" ng-class="nvtSurNuevoTres.inmovablesClassList[6]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '7A', nvtSurNuevoTres.inmovables[6].idProperty)">
            <polyline id="AN-07" class="property nvt-sprite-1"
              points="238.8 512.9 245.5 573.6 69.2 593.2 62.4 532.6 238.8 512.9" />
            <text class="cls-25" transform="translate(131.3 555.7) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 7A </tspan>
            </text>
            <text class="cls-22" transform="translate(132.5 564.3) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(70.2 555.7) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(231.9 537.7) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(141.7 537.7) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-08" ng-class="nvtSurNuevoTres.inmovablesClassList[7]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '8A', nvtSurNuevoTres.inmovables[7].idProperty)">
            <polyline id="AN-08" class="property nvt-sprite-2"
              points="245.2 572.7 251.9 633.4 75.6 653 68.8 592.3 245.2 572.7" />
            <text class="cls-25" transform="translate(138.9 612.8) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 8A </tspan>
            </text>
            <text class="cls-22" transform="translate(140.1 621.3) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(76.7 612.8) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(239.6 594.7) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(149.3 594.7) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-09" ng-class="nvtSurNuevoTres.inmovablesClassList[8]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '9A', nvtSurNuevoTres.inmovables[8].idProperty)">
            <polyline id="AN-09" class="property nvt-sprite-1"
              points="252.4 633.4 259.2 694 82.8 713.7 76 653 252.4 633.4" />
            <text class="cls-25" transform="translate(146.3 673.5) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 9A </tspan>
            </text>
            <text class="cls-22" transform="translate(147.5 682) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(82.8 673.5) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(246.9 655.4) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(156.7 655.4) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="A-10" ng-class="nvtSurNuevoTres.inmovablesClassList[9]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '10A', nvtSurNuevoTres.inmovables[9].idProperty)">
            <polyline id="AN-10" class="property nvt-sprite-2"
              points="259.4 694.5 266.1 755.2 89.7 774.8 83 714.2 259.4 694.5" />
            <text class="cls-25" transform="translate(152.2 734.6) rotate(-6.3) skewX(0)">
              <tspan x="0" y="0">NAVE 10A </tspan>
            </text>
            <text class="cls-22" transform="translate(153.4 743.1) rotate(-6.3) skewX(0)">
              <tspan class="cls-33" x="0" y="0">56</tspan>
              <tspan x="9.5" y="0">9.80 m2</tspan>
            </text>
            <text class="cls-20" transform="translate(90 733.6) rotate(83.7) skewX(0)">
              <tspan class="cls-36" x="0" y="0">14.0</tspan>
              <tspan x="13.7" y="0">0</tspan>
            </text>
            <text class="cls-19" transform="translate(252.9 716.5) rotate(83.7) skewX(0)">
              <tspan class="cls-38" x="0" y="0">14.0</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
            <text class="cls-21" transform="translate(162.7 716.5) rotate(-6.3) skewX(0)">
              <tspan class="cls-35" x="0" y="0">40.7</tspan>
              <tspan x="14.2" y="0">0</tspan>
            </text>
          </g>
          <g id="LINEAS_DIVISORIAS" data-name="LINEAS DIVISORIAS">
            <path class="cls-28" d="M362.9,819.1" />
            <path class="cls-28" d="M367,820" />
            <line class="cls-28" x1="204.5" y1="211" x2="28.1" y2="230.7" />
            <path class="cls-28" d="M21.4,167.9" />
            <path class="cls-28" d="M21.4,167.9" />
            <path class="cls-28" d="M301.8,767.5" />
            <path class="cls-28" d="M366.3,788.8" />
            <line class="cls-28" x1="210.4" y1="268.9" x2="34.1" y2="288.5" />
            <line class="cls-28" x1="218.7" y1="330.9" x2="42.3" y2="350.6" />
            <line class="cls-28" x1="224.5" y1="389.5" x2="48.1" y2="409.1" />
            <line class="cls-28" x1="230.7" y1="450.2" x2="54.3" y2="469.9" />
            <line class="cls-28" x1="237.2" y1="513.1" x2="60.8" y2="532.7" />
            <line class="cls-28" x1="245" y1="572.7" x2="68.6" y2="592.4" />
            <line class="cls-28" x1="251" y1="633.5" x2="74.6" y2="653.1" />
            <line class="cls-28" x1="259" y1="694.1" x2="82.6" y2="713.7" />
            <line class="cls-28" x1="264.5" y1="755.4" x2="88.1" y2="775" />
            <line class="cls-4" x1="9.9" y1="66.2" x2="191.8" y2="87.6" />
            <line class="cls-28" x1="198" y1="147.8" x2="21.6" y2="167.4" />
            <line class="cls-4" x1="192.4" y1="87.4" x2="199.1" y2="147.1" />
          </g>
        </g>
        <g id="MÓDULO_D" data-name="MÓDULO D">
          <g id="D-01" ng-class="nvtSurNuevoTres.inmovablesClassList[10]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '1D', nvtSurNuevoTres.inmovables[10].idProperty)">
            <polyline id="DN-01" class="property nvt-sprite-1"
              points="317.5 438 427.9 460.9 396.4 613 335.5 600.4 317.5 438" />
            <text class="cls-24" transform="translate(363.6 540.9) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 1D</tspan>
            </text>
            <text class="cls-13" transform="translate(372.6 545.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">707.18 m2</tspan>
            </text>
            <text class="cls-18" transform="translate(326.9 503.2) rotate(83.7) scale(1 1)">
              <tspan x="0" y="0">37.28</tspan>
            </text>
            <text class="cls-16" transform="translate(354.3 599.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.18</tspan>
            </text>
            <text class="cls-12" transform="translate(355.4 455.5) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">25.73</tspan>
            </text>
            <g>
              <polyline class="cls-5" points="375.3 479.5 377.4 467.2 382.7 474.3 375.3 479.5" />
              <polyline class="cls-2" points="370 472.3 377.4 467.1 377.4 467.2 375.3 479.5" />
            </g>
          </g>
          <g id="D-02" ng-class="nvtSurNuevoTres.inmovablesClassList[11]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '2D', nvtSurNuevoTres.inmovables[11].idProperty)">
            <polyline id="DN-02" class="property nvt-sprite-2"
              points="396.4 613 427.9 460.9 488 473.3 456.5 625.4 396.4 613" />
            <text class="cls-24" transform="translate(434.8 560.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 2D</tspan>
            </text>
            <text class="cls-13" transform="translate(442.1 568.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(416.5 612) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-12" transform="translate(442.1 473.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(418 548) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-03" ng-class="nvtSurNuevoTres.inmovablesClassList[12]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '3D', nvtSurNuevoTres.inmovables[12].idProperty)">
            <polyline id="DN-03" class="property nvt-sprite-1"
              points="488 473.3 548.1 485.7 516.6 637.9 456.5 625.4 488 473.3" />
            <text class="cls-24" transform="translate(497.5 569) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 3D</tspan>
            </text>
            <text class="cls-13" transform="translate(504.8 576.7) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(478.3 624.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-12" transform="translate(503.2 486.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(478.3 556.3) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-04" ng-class="nvtSurNuevoTres.inmovablesClassList[13]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '4D', nvtSurNuevoTres.inmovables[13].idProperty)">
            <polyline id="DN-04" class="property nvt-sprite-2"
              points="516.6 637.9 548.1 485.7 608.1 498.2 576.7 650.3 516.6 637.9" />
            <text class="cls-24" transform="translate(557.6 585.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 4D</tspan>
            </text>
            <text class="cls-13" transform="translate(564.9 592.9) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(539.8 637.3) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-12" transform="translate(564.4 498.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(539.7 569) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-05" ng-class="nvtSurNuevoTres.inmovablesClassList[14]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '5D', nvtSurNuevoTres.inmovables[14].idProperty)">
            <polyline id="DN-05" class="property nvt-sprite-1"
              points="608.1 498.2 668.2 510.6 636.7 662.7 576.7 650.3 608.1 498.2" />
            <text class="cls-24" transform="translate(617.7 596.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 5D</tspan>
            </text>
            <text class="cls-13" transform="translate(625 604.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(597 650.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(625.5 511.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(599.6 583.4) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-06" ng-class="nvtSurNuevoTres.inmovablesClassList[15]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '6D', nvtSurNuevoTres.inmovables[15].idProperty)">
            <polyline id="DN-06" class="property nvt-sprite-2"
              points="636.7 662.7 668.2 510.6 728.3 523.1 696.8 675.2 636.7 662.7" />
            <text class="cls-24" transform="translate(677.8 606.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 6D</tspan>
            </text>
            <text class="cls-13" transform="translate(685.1 614) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(659.3 662.9) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(686.7 524.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(659.3 594.8) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-07" ng-class="nvtSurNuevoTres.inmovablesClassList[16]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '7D', nvtSurNuevoTres.inmovables[16].idProperty)">
            <polyline id="DN-07" class="property nvt-sprite-1"
              points="727.4 523.1 787.5 535.5 756 687.6 695.9 675.2 727.4 523.1" />
            <text class="cls-24" transform="translate(739.5 621.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 7D</tspan>
            </text>
            <text class="cls-13" transform="translate(746.8 629.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(717.9 673.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(747.8 536.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(719 609.1) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-08" ng-class="nvtSurNuevoTres.inmovablesClassList[17]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '8D', nvtSurNuevoTres.inmovables[17].idProperty)">
            <polyline id="DN-08" class="property nvt-sprite-2"
              points="758 687.6 789.5 535.5 849.6 547.9 818.1 700.1 758 687.6" />
            <text class="cls-24" transform="translate(798.6 632.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 8D</tspan>
            </text>
            <text class="cls-13" transform="translate(805.9 640.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(779.4 686.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(808.9 549.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(780.6 618.8) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-09" ng-class="nvtSurNuevoTres.inmovablesClassList[18]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '9D', nvtSurNuevoTres.inmovables[18].idProperty)">
            <polyline id="DN-09" class="property nvt-sprite-1"
              points="848.6 547.3 908.7 559.8 877.2 711.9 817.1 699.4 848.6 547.3" />
            <text class="cls-24" transform="translate(858.1 646.5) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 9D</tspan>
            </text>
            <text class="cls-13" transform="translate(865.4 654.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(836.3 699) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(870.1 562) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(840.1 631.6) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-10" ng-class="nvtSurNuevoTres.inmovablesClassList[19]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '10D', nvtSurNuevoTres.inmovables[19].idProperty)">
            <polyline id="DN-10" class="property nvt-sprite-2"
              points="877.3 711.5 909.5 559.2 969.6 571.7 938 724.4 878.1 712" />
            <text class="cls-24" transform="translate(918.3 660.5) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 10D</tspan>
            </text>
            <text class="cls-13" transform="translate(925.6 665.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(897.4 711) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(931.2 574.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(900 642.7) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-11" ng-class="nvtSurNuevoTres.inmovablesClassList[20]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '11D', nvtSurNuevoTres.inmovables[20].idProperty)">
            <polyline id="DN-11" class="property nvt-sprite-1"
              points="968.7 571.8 1028.8 584.3 997.3 736.4 937.2 724 968.7 571.8" />
            <text class="cls-24" transform="translate(977.7 671.9) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 11D</tspan>
            </text>
            <text class="cls-13" transform="translate(986.6 677.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(959.2 723.8) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(992.4 587.3) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(961.8 654.1) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-12" ng-class="nvtSurNuevoTres.inmovablesClassList[21]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '12D', nvtSurNuevoTres.inmovables[21].idProperty)">
            <polyline id="DN-12" class="property nvt-sprite-2"
              points="997.4 736.3 1028.9 584.2 1089 596.6 1057.5 748.7 997.4 736.3" />
            <text class="cls-24" transform="translate(1036.4 683.8) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 12D</tspan>
            </text>
            <text class="cls-13" transform="translate(1045.6 689.5) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(1019.5 735.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(1053.5 600) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(1020.3 666.4) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-13" ng-class="nvtSurNuevoTres.inmovablesClassList[22]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '13D', nvtSurNuevoTres.inmovables[22].idProperty)">
            <polyline id="DN-13" class="property nvt-sprite-1"
              points="1089.4 596.7 1149.5 609.2 1118 761.3 1057.9 748.8 1089.4 596.7" />
            <text class="cls-24" transform="translate(1099.5 694.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 13D</tspan>
            </text>
            <text class="cls-13" transform="translate(1106.8 698.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(1080.1 748.3) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-14" transform="translate(1114.7 612.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(1081.6 677.1) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
          </g>
          <g id="D-14" ng-class="nvtSurNuevoTres.inmovablesClassList[23]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '14D', nvtSurNuevoTres.inmovables[23].idProperty)">
            <polyline id="DN-14" class="property nvt-sprite-2"
              points="1117.8 761.6 1149.3 609.5 1209.4 622 1177.9 774.1 1117.8 761.6" />
            <text class="cls-24" transform="translate(1158.7 704.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 14D</tspan>
            </text>
            <text class="cls-13" transform="translate(1166.9 709.7) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">496.21 m2</tspan>
            </text>
            <text class="cls-17" transform="translate(1137.2 760.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(1142.6 685.7) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
            <text class="cls-14" transform="translate(1172.8 624) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
          </g>
          <g id="D-15" ng-class="nvtSurNuevoTres.inmovablesClassList[24]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '15D', nvtSurNuevoTres.inmovables[24].idProperty)">
            <polyline id="DN-15" class="property nvt-sprite-1"
              points="1209 622.6 1330.1 708.9 1310.8 802.2 1177.5 774.7 1209 622.6" />
            <text class="cls-24" transform="translate(1245.6 743.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 15D</tspan>
            </text>
            <text class="cls-13" transform="translate(1257.5 746.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">881.68 m2</tspan>
            </text>
            <text class="cls-23" transform="translate(1262.1 668.9) rotate(37.8) scale(1 1)">
              <tspan x="0" y="0">33.63</tspan>
            </text>
            <text class="cls-15" transform="translate(1200 706.9) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">35.44</tspan>
            </text>
            <text class="cls-15" transform="translate(1314.8 764.3) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">21.87</tspan>
            </text>
            <text class="cls-17" transform="translate(1226.3 780.2) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">30.77</tspan>
            </text>
            <g>
              <polyline class="cls-5" points="1264.4 692.6 1266.4 680.3 1271.7 687.4 1264.4 692.6" />
              <polyline class="cls-2" points="1259.1 685.5 1266.4 680.3 1266.4 680.3 1264.4 692.6" />
            </g>
          </g>
        </g>
        <g id="MÓDULO_E" data-name="MÓDULO E">
          <g id="E-01" ng-class="nvtSurNuevoTres.inmovablesClassList[25]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '1E', nvtSurNuevoTres.inmovables[25].idProperty)">
            <polyline id="EN-01" class="property nvt-sprite-2"
              points="335.5 600.4 456.5 625.4 426.4 772.5 353 757.4 335.5 600.4" />
            <text class="cls-24" transform="translate(392.7 694.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 1E</tspan>
            </text>
            <text class="cls-13" transform="translate(400.7 699.8) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">779.42 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(382.7 619.6) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">28.18</tspan>
            </text>
            <text class="cls-9" transform="translate(376.3 757.9) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">16.90</tspan>
            </text>
            <text class="cls-18" transform="translate(346.5 682.1) rotate(83.7) scale(1 1)">
              <tspan x="0" y="0">36.37</tspan>
            </text>
            <g>
              <polyline class="cls-5" points="390.7 746.9 392.7 734.6 398 741.7 390.7 746.9" />
              <polyline class="cls-2" points="385.4 739.7 392.7 734.6 392.7 734.6 390.7 746.9" />
            </g>
          </g>
          <g id="E-02" ng-class="nvtSurNuevoTres.inmovablesClassList[26]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '2E', nvtSurNuevoTres.inmovables[26].idProperty)">
            <polyline id="EN-02" class="property nvt-sprite-2"
              points="457.2 624.1 517.2 636.5 486.5 785 426.4 772.5 457.2 624.1" />
            <text class="cls-24" transform="translate(467.5 714.5) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 2E</tspan>
            </text>
            <text class="cls-13" transform="translate(474.8 722.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(475.8 638.8) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(444.2 772) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(448.8 704.3) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-03" ng-class="nvtSurNuevoTres.inmovablesClassList[27]"
            ngclick="nvtSurNuevoTres.showPropertyData(72, '3E', nvtSurNuevoTres.inmovables[27].idProperty)">
            <polyline id="EN-03" class="property nvt-sprite-1"
              points="517.6 636.7 577.7 649.1 547 797.5 486.9 785.1 517.6 636.7" />
            <text class="cls-24" transform="translate(529.2 726.9) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 3E</tspan>
            </text>
            <text class="cls-13" transform="translate(536.5 734.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(537.6 651.6) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(505.6 784.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(510.3 717) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-04" ng-class="nvtSurNuevoTres.inmovablesClassList[28]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '4E', nvtSurNuevoTres.inmovables[28].idProperty)">
            <polyline id="EN-04" class="property nvt-sprite-2"
              points="577.3 649 637.4 661.4 606.7 809.8 546.6 797.4 577.3 649" />
            <text class="cls-24" transform="translate(585.8 739.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 4E</tspan>
            </text>
            <text class="cls-13" transform="translate(593.1 747) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(595 666.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(567.1 797.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(570.7 730.6) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-05"  ng-class="nvtSurNuevoTres.inmovablesClassList[29]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '5E', nvtSurNuevoTres.inmovables[29].idProperty)">
            <polyline id="EN-05" class="property nvt-sprite-1"
              points="636.9 661.5 697 674 666.3 822.4 606.2 809.9 636.9 661.5" />
            <text class="cls-24" transform="translate(649.3 755.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 5E</tspan>
            </text>
            <text class="cls-13" transform="translate(656.6 763.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(655.9 675.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(628.6 810.2) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(632.2 743.3) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-06" ng-class="nvtSurNuevoTres.inmovablesClassList[30]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '6E', nvtSurNuevoTres.inmovables[30].idProperty)">
            <polyline id="EN-06" class="property nvt-sprite-2"
              points="696.8 673.8 756.9 686.2 726.2 834.6 666.1 822.2 696.8 673.8" />
            <text class="cls-24" transform="translate(707.8 769) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 6E</tspan>
            </text>
            <text class="cls-13" transform="translate(715.1 776.7) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(717.3 689.5) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(690.1 822.9) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(689 754.9) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-07" ng-class="nvtSurNuevoTres.inmovablesClassList[31]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '7E', nvtSurNuevoTres.inmovables[31].idProperty)">
            <polyline id="EN-07" class="property nvt-sprite-1"
              points="756.9 686.4 817 698.8 786.3 847.3 726.2 834.8 756.9 686.4" />
            <text class="cls-24" transform="translate(770.8 782.5) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 7E</tspan>
            </text>
            <text class="cls-13" transform="translate(778.1 790.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(775.3 702.6) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(745 834.5) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(750.5 767.7) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-08" ng-class="nvtSurNuevoTres.inmovablesClassList[32]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '8E', nvtSurNuevoTres.inmovables[32].idProperty)">
            <polyline id="EN-08" class="property nvt-sprite-2"
              points="817.7 699.1 877.8 711.6 847.6 859.2 787 847.5 817.7 699.1" />
            <text class="cls-24" transform="translate(824 789.1) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 8E</tspan>
            </text>
            <text class="cls-13" transform="translate(831.3 796.8) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(836.3 714.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(813 848.3) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(812 780.4) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-09" ng-class="nvtSurNuevoTres.inmovablesClassList[33]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '9E', nvtSurNuevoTres.inmovables[33].idProperty)">
            <polyline id="EN-09" class="property nvt-sprite-1"
              points="877.5 711.9 937.2 724.8 907.1 871.5 847 859.1 877.8 710.7" />
            <text class="cls-24" transform="translate(888.1 805.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 9E</tspan>
            </text>
            <text class="cls-13" transform="translate(895.5 810.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(894.4 727) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(866 858.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(871.1 793.1) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-10" ng-class="nvtSurNuevoTres.inmovablesClassList[34]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '10E', nvtSurNuevoTres.inmovables[34].idProperty)">
            <polyline id="EN-10" class="property nvt-sprite-2"
              points="937.2 723.2 997.1 735.7 966.5 883.4 906.5 870.9 937.2 722.5" />
            <text class="cls-24" transform="translate(944.4 816.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 10E</tspan>
            </text>
            <text class="cls-13" transform="translate(953.3 820.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(956.2 739.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(927.8 871) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(932.6 805.8) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-11" ng-class="nvtSurNuevoTres.inmovablesClassList[35]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '11E', nvtSurNuevoTres.inmovables[35].idProperty)">
            <polyline id="EN-11" class="property nvt-sprite-1"
              points="998 735.7 1058.1 748.2 1027.4 896.6 967.3 884.2 998 735.7" />
            <text class="cls-24" transform="translate(1008.3 830.3) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 11E</tspan>
            </text>
            <text class="cls-13" transform="translate(1015.6 835.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-16" transform="translate(1016.1 752.1) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(987.7 884.2) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(991.6 818.6) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-12" ng-class="nvtSurNuevoTres.inmovablesClassList[36]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '12E', nvtSurNuevoTres.inmovables[36].idProperty)">
            <polyline id="EN-12" class="property nvt-sprite-2"
              points="1058.9 746.6 1119.3 759.1 1088.4 908.3 1028 895.8 1058.9 746.6" />
            <text class="cls-24" transform="translate(1069.2 843.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 12E</tspan>
            </text>
            <text class="cls-13" transform="translate(1078.2 846.8) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-15" transform="translate(1074.7 763.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(1050.4 897) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(1052.3 829.5) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-13" ng-class="nvtSurNuevoTres.inmovablesClassList[37]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '13E', nvtSurNuevoTres.inmovables[37].idProperty)">
            <polyline id="EN-13" class="property nvt-sprite-1"
              points="1119.5 759.8 1179.6 772.2 1148.8 920.6 1088.8 908.2 1119.5 759.8" />
            <text class="cls-24" transform="translate(1126.8 855.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 13E</tspan>
            </text>
            <text class="cls-13" transform="translate(1134.1 860) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">484.12 m2</tspan>
            </text>
            <text class="cls-17" transform="translate(1133.6 775.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-15" transform="translate(1109.1 908.2) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">14.00</tspan>
            </text>
            <text class="cls-9" transform="translate(1113.2 843) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
          </g>
          <g id="E-14" ng-class="nvtSurNuevoTres.inmovablesClassList[38]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '14E', nvtSurNuevoTres.inmovables[38].idProperty)">
            <polyline id="EN-14" class="property nvt-sprite-2"
              points="1179.3 772.2 1245.3 785.9 1214.6 934.3 1148.6 920.7 1179.3 772.2" />
            <text class="cls-24" transform="translate(1189.6 869.6) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 14E</tspan>
            </text>
            <text class="cls-13" transform="translate(1198.4 875.2) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">531.96 m2</tspan>
            </text>
            <text class="cls-15" transform="translate(1169.7 921.7) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">15.38</tspan>
            </text>
            <text class="cls-9" transform="translate(1171.9 855.5) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
            <text class="cls-17" transform="translate(1198.4 788.4) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">15.38</tspan>
            </text>
          </g>
          <g id="E-15" ng-class="nvtSurNuevoTres.inmovablesClassList[39]"
            ng-click="nvtSurNuevoTres.showPropertyData(72, '15E', nvtSurNuevoTres.inmovables[39].idProperty)">
            <polyline id="EN-15" class="property nvt-sprite-1"
              points="1213.5 933.5 1243.8 787.1 1311.1 802.1 1280.9 947.5 1213.3 934.4" />
            <text class="cls-24" transform="translate(1257.5 882) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">NAVE 15E</tspan>
            </text>
            <text class="cls-13" transform="translate(1265.4 886.4) rotate(-78) scale(1 1) skewX(.6)">
              <tspan x="0" y="0">531.96 m2</tspan>
            </text>
            <text class="cls-15" transform="translate(1238.3 936) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">15.38</tspan>
            </text>
            <text class="cls-9" transform="translate(1236.4 868.1) rotate(-78.3) scale(1 1)">
              <tspan x="0" y="0">34.58</tspan>
            </text>
            <text class="cls-17" transform="translate(1262 802) rotate(11.7) scale(1 1)">
              <tspan x="0" y="0">15.38</tspan>
            </text>
            <g>
              <polyline class="cls-5" points="1252.4 922.1 1254.4 909.8 1259.7 917 1252.4 922.1" />
              <polyline class="cls-2" points="1247.1 915 1254.4 909.8 1254.4 909.8 1252.4 922.1" />
            </g>
          </g>
          <g id="LINEAS_DIVISORIAS-2" data-name="LINEAS DIVISORIAS">
            <line class="cls-29" x1="396.2" y1="611.9" x2="427.9" y2="460.9" />
            <line class="cls-29" x1="455.6" y1="625.8" x2="488.2" y2="473.7" />
            <line class="cls-29" x1="426.5" y1="772.2" x2="455.6" y2="625.8" />
            <line class="cls-29" x1="516.6" y1="637.9" x2="549.1" y2="485.7" />
            <line class="cls-29" x1="576.7" y1="650.3" x2="609.2" y2="498.2" />
            <line class="cls-29" x1="636.7" y1="662.7" x2="669.3" y2="510.6" />
            <line class="cls-29" x1="696.8" y1="675.2" x2="729.4" y2="523.1" />
            <line class="cls-29" x1="756.9" y1="686.2" x2="788.4" y2="534.1" />
            <line class="cls-29" x1="817" y1="700.1" x2="848.5" y2="547.9" />
            <line class="cls-29" x1="876" y1="712.5" x2="908.6" y2="560.4" />
            <line class="cls-29" x1="937.9" y1="724.9" x2="970.4" y2="572.8" />
            <line class="cls-29" x1="996.2" y1="737.4" x2="1028.8" y2="585.2" />
            <line class="cls-29" x1="1057.4" y1="748.8" x2="1088.8" y2="597.7" />
            <line class="cls-29" x1="1117.4" y1="761.2" x2="1148.9" y2="610.1" />
            <line class="cls-29" x1="1177.5" y1="773.7" x2="1209" y2="622.6" />
            <line class="cls-29" x1="486.6" y1="784.5" x2="516.6" y2="637.9" />
            <line class="cls-29" x1="546.6" y1="796.8" x2="576.7" y2="650.3" />
            <line class="cls-29" x1="606.4" y1="809.4" x2="636.7" y2="662.7" />
            <line class="cls-29" x1="666.5" y1="822" x2="696.8" y2="675.2" />
            <line class="cls-29" x1="726.5" y1="834.5" x2="756.9" y2="687.6" />
            <line class="cls-29" x1="786.6" y1="846.7" x2="817" y2="700.1" />
            <line class="cls-29" x1="846.9" y1="858.1" x2="877.1" y2="712.5" />
            <line class="cls-29" x1="907.2" y1="871" x2="937.2" y2="726.2" />
            <line class="cls-29" x1="967" y1="883.4" x2="997.3" y2="737.4" />
            <line class="cls-29" x1="1027.1" y1="895.9" x2="1057.4" y2="749.8" />
            <line class="cls-29" x1="1088.8" y1="908.2" x2="1117.4" y2="762.2" />
            <line class="cls-29" x1="1148.8" y1="920.6" x2="1177.5" y2="774.7" />
            <line class="cls-29" x1="1213.4" y1="933.8" x2="1243.6" y2="788.4" />
            <line class="cls-29" x1="335.5" y1="600.4" x2="1310.8" y2="802.2" />
          </g>
        </g>
        <g id="COMPLEMENTO">
          <path class="cls-30" d="M363.9,790.1" />
          <line class="cls-30" x1="638.5" y1="46.8" x2="777.9" y2="73.3" />
          <line class="cls-30" x1="778.9" y1="73.9" x2="891.1" y2="102.3" />
          <g>
            <text class="cls-27" transform="translate(1220.7 280.4) rotate(20.5) scale(.9 1.1) skewX(.6)">
              <tspan x="0" y="0">SALIDA</tspan>
            </text>
            <path class="cls-8"
              d="M1233.3,271.7c2.7,1,3.9,4.5,2.8,7.8l7.1,2.8-3.6-9-3.6-9-8.6,4.2-8.6,4.2,7.1,2.8c1.4-3.2,4.6-5,7.2-3.9" />
          </g>
          <path class="cls-30" d="M983.8-14.5" />
          <path class="cls-30" d="M-1551.1,272.2" />
          <path class="cls-32"
            d="M228.2,144.8l28.8,250.8,958.1,194.2,65.6-318.8-388.1-172.1-255.6-56.1-127.4-10.1L70.2,5,3.1,2.4s16.4,165.4,17,165.5l208-23.1Z" />
          <text class="cls-34" transform="translate(469.2 329.4)">
            <tspan class="cls-11" x="0" y="0">ETAPA 3 </tspan>
            <tspan class="cls-37" x="520" y="0"> </tspan>
          </text>
          <path class="cls-31"
            d="M20.2,167.9c.3,2.7,70.9,609.4,70.9,609.4l176.6-19.4,67.9,26.5,975.5,199.4,53.8-253.4-154.5-108.2,4.7-32.5" />
        </g>
      </svg>
    </div>
  </div>
  <script src="media/assets/js/simplyCountdown.min.js"></script>
  <script src="media/assets/js/countdown.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>

</html>