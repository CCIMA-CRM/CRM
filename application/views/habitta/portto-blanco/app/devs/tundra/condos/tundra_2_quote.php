<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBtundraDosQuoteCtrl as tundraDos">

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/portto_blanco" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-ubicacion" ng-click="close()">
			<div class="link-sidenav">
				<span>Ubicación</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-sidenav">
				<span>Habitta</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/" ng-click="close()">
			<div class="link-sidenav">
				<span>Grupo CCIMA</span>
			</div>
		</a>
		<md-divider></md-divider>

	</md-sidenav>

	<div class="navbar-fixed" ng-controller="sideNavCtrl">
		<nav class="white no-shadows" role="navigation" ng-controller="ContactMenuCtrl as contactCtrl">

			<div class="nav-wrapper">

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
							<md-menu-content width="4">
								<md-menu-item>
									<md-button disabled="disabled">
										+52 1 442 291 2223
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
					</li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
						<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
					</md-button></li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
						<md-menu-content width="4">
							<md-menu-item>
								<md-button disabled="disabled">
									+52 1 442 291 2223
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

		</nav>
	</div>


	<div class="modal-dialog" ng-class="tundraDos.dialogDisplay">
		<div class="backdrop-dialog" ng-click="tundraDos.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="tundraDos.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{tundraDos.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{tundraDos.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{tundraDos.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{tundraDos.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{tundraDos.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{tundraDos.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{tundraDos.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{tundraDos.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{tundraDos.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{tundraDos.month}} y paga la primera mensualidad hasta {{tundraDos.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{tundraDos.month + ' ' + manglar.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 291 2223
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
					<h1 class="center-align">tundra 2</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block pb-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block pb__apart__bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>
        <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 704.6">
     <defs>
    <style>
      .cls-1 {
        opacity: .8;
      }

      .cls-1, .cls-2, .cls-3, .cls-4, .cls-5 {
        fill-rule: evenodd;
      }

      .cls-1, .cls-6, .cls-7, .cls-8, .cls-4, .cls-9 {
        fill: #ffbf00;
      }

      .cls-10 {
        letter-spacing: 0em;
      }

      .cls-11 {
        letter-spacing: 0em;
      }

      .cls-12 {
        font-size: 6.3px;
      }

      .cls-12, .cls-13, .cls-14 {
        fill: #fff;
        font-family: CenturyGothic, 'Century Gothic';
      }

      .cls-15 {
        letter-spacing: 0em;
      }

      .cls-16 {
        font-size: 7.5px;
      }

      .cls-16, .cls-17 {
        fill: #20264c;
        font-family: CenturyGothic-Bold, 'Century Gothic';
      }

      .cls-16, .cls-17, .cls-6, .cls-7, .cls-8, .cls-9 {
        font-weight: 700;
      }

      .cls-18, .cls-7 {
        letter-spacing: 0em;
      }

      .cls-19 {
        letter-spacing: 0em;
      }

      .cls-17 {
        font-size: 7.5px;
      }

      .cls-2 {
        fill: #4076ae;
      }

      .cls-6, .cls-7, .cls-8, .cls-9 {
        font-family: Arial-BoldMT, Arial;
      }

      .cls-6, .cls-7, .cls-9 {
        font-size: 9.3px;
      }

      .cls-6, .cls-20 {
        letter-spacing: 0em;
      }

      .cls-21 {
        letter-spacing: 0em;
      }

      .cls-13 {
        font-size: 9.5px;
      }

      .cls-22 {
        letter-spacing: 0em;
      }

      .cls-14 {
        font-size: 9.5px;
      }

      .cls-23 {
        stroke-width: 1.5px;
      }

      .cls-23, .cls-24 {
        stroke: #fff;
      }

      .cls-23, .cls-24, .cls-25 {
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
      }

      .cls-24 {
        stroke-width: .2px;
      }

      .cls-3 {
        fill: #64768c;
      }

      .cls-8 {
        font-size: 9.3px;
      }

      .cls-4 {
        opacity: .5;
      }

      .cls-26 {
        letter-spacing: 0em;
      }

      .cls-5 {
        fill: #1d2d50;
      }

      .cls-25 {
        stroke: #002856;
        stroke-width: 3px;
      }

      .cls-27 {
        letter-spacing: 0em;
      }
    </style>
  </defs>
  <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
  <g>
    <g id="TUNDRA_II">
      <g id="Capa_1">
        <image width="1366" height="704" transform="translate(.1 .4)" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/tundra/condos/tundra_2.jpg"/>
      </g>
      <g id="CLUSTER">
        <g id="ISLA_A">
          <g id="A-01" class="property__active" ng-class="tundraDos.inmovablesClassList[0]" ng-click="tundraDos.showPropertyData(73, '1')">
            <polyline id="AL-01" class="property pb-sprite-1" points="1173.5 425.1 1342.3 433.9 1338.8 501.4 1170 492.6 1173.5 425.1"/>
            <text class="cls-13" transform="translate(1336.5 479.3) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1181.2 471.2) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1245.5 439) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1234.1 466.6)"><tspan class="cls-26" x="0" y="0">25</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1265.7 466.6)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1274.7 463.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
            <text class="cls-9" transform="translate(1248.3 455.7)"><tspan x="0" y="0">01</tspan></text>
          </g>
          <g id="A-02" class="property__active" ng-class="tundraDos.inmovablesClassList[1]" ng-click="tundraDos.showPropertyData(73, '2')">
            <polyline id="AL-02" class="property pb-sprite-2" points="1170 492.6 1338.8 501.4 1335.3 568.9 1166.5 560.1 1170 492.6"/>
            <text class="cls-9" transform="translate(1245.5 521.5)"><tspan x="0" y="0">02</tspan></text>
            <text class="cls-13" transform="translate(1333 546.8) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1177.7 538.7) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1242 506.5) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1230.6 534.1)"><tspan class="cls-26" x="0" y="0">25</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1262.2 534.1)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1271.2 530.9)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="A-03" class="property__active" ng-class="tundraDos.inmovablesClassList[2]" ng-click="tundraDos.showPropertyData(73, '3')">
            <polyline id="AL-03" class="property pb-sprite-1" points="1166.5 560.1 1335.3 568.9 1331.8 636.4 1163 627.6 1166.5 560.1"/>
            <text class="cls-9" transform="translate(1242.7 590)"><tspan x="0" y="0">03</tspan></text>
            <text class="cls-13" transform="translate(1329.5 614.3) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1174.2 606.3) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1238.5 574.1) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1227.1 601.6)"><tspan class="cls-26" x="0" y="0">25</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1258.7 601.6)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1267.7 598.4)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="A-04" class="property__active" ng-class="tundraDos.inmovablesClassList[3]" ng-click="tundraDos.showPropertyData(73, '4')">
            <polyline id="AL-04" class="property pb-sprite-2" points="1163 627.6 1331.8 636.4 1328.2 703.9 1159 703.9 1163 627.6"/>
            <g>
              <polyline class="cls-4" points="1177.9 666.6 1192.2 667.4 1184.7 674.2 1177.9 666.6"/>
              <polyline class="cls-1" points="1177.9 666.6 1185.4 659.9 1192.2 667.4 1177.9 666.6"/>
            </g>
            <text class="cls-9" transform="translate(1239.9 657.7)"><tspan x="0" y="0">04</tspan></text>
            <text class="cls-13" transform="translate(1326 681.9) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1170.5 678.2) rotate(-87)"><tspan class="cls-19" x="0" y="0">11.3</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1235 641.6) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1231.8 700.5)"><tspan class="cls-10" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">3</tspan></text>
            <text class="cls-14" transform="translate(1223.3 669.1)"><tspan class="cls-26" x="0" y="0">26</tspan><tspan x="10.6" y="0">6.28</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1255 669.1)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1263.9 665.9)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES">
            <line class="cls-23" x1="1170" y1="492.6" x2="1338.8" y2="501.4"/>
            <line class="cls-23" x1="1173" y1="425.3" x2="1341.8" y2="434.1"/>
            <line class="cls-23" x1="1166.5" y1="560.1" x2="1335.3" y2="568.9"/>
            <line class="cls-23" x1="1163" y1="627.6" x2="1331.8" y2="636.4"/>
          </g>
        </g>
        <g id="ISLA_B">
          <g id="B-05" class="property__active" ng-class="tundraDos.inmovablesClassList[4]" ng-click="tundraDos.showPropertyData(73, '5')">
            <polyline id="BL-05" class="property pb-sprite-1" points="1089.3 534.9 1080.5 703.9 1025.6 703.9 1025.6 534.9 1089.3 534.9"/>
            <g>
              <polyline class="cls-4" points="1057.4 566.1 1050.3 559 1057.4 551.8 1057.4 566.1"/>
              <polyline class="cls-1" points="1057.4 566.1 1057.4 551.8 1064.6 559 1057.4 566.1"/>
            </g>
            <text class="cls-8" transform="translate(1050.5 624.5) rotate(-89.9)"><tspan x="0" y="0">05</tspan></text>
            <text class="cls-14" transform="translate(1048.2 545)"><tspan class="cls-15" x="0" y="0">9.4</tspan><tspan x="13.1" y="0">2</tspan></text>
            <text class="cls-14" transform="translate(1043.8 700.5)"><tspan class="cls-15" x="0" y="0">8.1</tspan><tspan x="13.1" y="0">2</tspan></text>
            <text class="cls-14" transform="translate(1035.7 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1080.8 631.1) rotate(-87)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">3</tspan></text>
            <text class="cls-14" transform="translate(1064.5 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">21</tspan><tspan class="cls-21" x="10.6" y="0">9.28</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1064.5 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1061.3 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-06" class="property__active" ng-class="tundraDos.inmovablesClassList[5]" ng-click="tundraDos.showPropertyData(73, '6')">
            <polyline id="BL-06" class="property pb-sprite-2" points="1025.6 534.9 1025.6 703.9 971.5 703.9 971.5 534.9 1025.6 534.9"/>
            <g>
              <polyline class="cls-4" points="998.5 566.1 991.4 559 998.5 551.8 998.5 566.1"/>
              <polyline class="cls-1" points="998.5 566.1 998.5 551.8 1005.7 559 998.5 566.1"/>
            </g>
            <text class="cls-8" transform="translate(996 624.5) rotate(-89.9)"><tspan x="0" y="0">06</tspan></text>
            <text class="cls-14" transform="translate(989.3 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(989.3 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(981.6 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1005.6 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1005.6 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1002.4 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-07" class="property__active" ng-class="tundraDos.inmovablesClassList[6]" ng-click="tundraDos.showPropertyData(73, '7')">
            <polyline id="BL-07" class="property pb-sprite-1" points="971.5 534.9 971.5 703.9 917.4 703.9 917.4 534.9 971.5 534.9"/>
            <g>
              <polyline class="cls-4" points="944.4 566.1 937.3 559 944.4 551.8 944.4 566.1"/>
              <polyline class="cls-1" points="944.4 566.1 944.4 551.8 951.6 559 944.4 566.1"/>
            </g>
            <text class="cls-8" transform="translate(940.3 624.5) rotate(-89.9)"><tspan x="0" y="0">07</tspan></text>
            <text class="cls-14" transform="translate(935.2 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(935.2 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(927.5 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(951.5 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(951.5 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(948.3 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-08" class="property__active" ng-class="tundraDos.inmovablesClassList[7]" ng-click="tundraDos.showPropertyData(73, '8')">
            <polyline id="BL-08" class="property pb-sprite-2" points="917.4 534.9 917.4 703.9 863.3 703.9 863.3 534.9 917.4 534.9"/>
            <g>
              <polyline class="cls-4" points="890.4 566.1 883.2 559 890.4 551.8 890.4 566.1"/>
              <polyline class="cls-1" points="890.4 566.1 890.4 551.8 897.5 559 890.4 566.1"/>
            </g>
            <text class="cls-8" transform="translate(884.5 624.5) rotate(-89.9)"><tspan x="0" y="0">08</tspan></text>
            <text class="cls-14" transform="translate(881.2 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(881.2 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(873.5 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(897.5 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(897.5 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(894.2 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-09" class="property__active" ng-class="tundraDos.inmovablesClassList[8]" ng-click="tundraDos.showPropertyData(73, '9')">
            <polyline id="BL-09" class="property pb-sprite-1" points="863.3 534.9 863.3 703.9 809.2 703.9 809.2 534.9 863.3 534.9"/>
            <g>
              <polyline class="cls-4" points="836.3 566.1 829.1 559 836.3 551.8 836.3 566.1"/>
              <polyline class="cls-1" points="836.3 566.1 836.3 551.8 843.4 559 836.3 566.1"/>
            </g>
            <text class="cls-8" transform="translate(828.7 624.5) rotate(-89.9)"><tspan x="0" y="0">09</tspan></text>
            <text class="cls-14" transform="translate(827.1 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(827.1 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(819.4 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(843.4 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(843.4 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(840.1 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-10" class="property__active" ng-class="tundraDos.inmovablesClassList[9]" ng-click="tundraDos.showPropertyData(73, '10')">
            <polyline id="BL-10" class="property pb-sprite-2" points="809.2 534.9 809.2 703.9 755.1 703.9 755.1 534.9 809.2 534.9"/>
            <text class="cls-8" transform="translate(777 624.5) rotate(-89.9)"><tspan x="0" y="0">10</tspan></text>
            <text class="cls-14" transform="translate(773 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(773 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(765.3 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(789.3 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(789.3 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(786 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-11" class="property__active" ng-class="tundraDos.inmovablesClassList[10]" ng-click="tundraDos.showPropertyData(73, '11')">
            <polyline id="BL-11" class="property pb-sprite-1" points="755.1 534.9 755.1 703.9 701.1 703.9 701.1 534.9 755.1 534.9"/>
            <text class="cls-8" transform="translate(721.2 624.2) rotate(-89.9)"><tspan x="0" y="0">11</tspan></text>
            <text class="cls-14" transform="translate(718.9 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(718.9 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(711.2 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(735.2 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(735.2 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(732 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-12" class="property__active" ng-class="tundraDos.inmovablesClassList[11]" ng-click="tundraDos.showPropertyData(73, '12')">
            <polyline id="BL-12" class="property pb-sprite-2" points="701.1 534.9 701.1 703.9 647 703.9 647 534.9 701.1 534.9"/>
            <text class="cls-8" transform="translate(668.5 624.5) rotate(-89.9)"><tspan x="0" y="0">12</tspan></text>
            <text class="cls-14" transform="translate(664.8 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(664.8 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(657.1 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(681.1 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(681.1 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(677.9 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-13" class="property__active" ng-class="tundraDos.inmovablesClassList[12]" ng-click="tundraDos.showPropertyData(73, '13')">
            <polyline id="BL-13" class="property pb-sprite-1" points="647 534.9 647 703.9 592.9 703.9 592.9 534.9 647 534.9"/>
            <text class="cls-8" transform="translate(613.6 624.5) rotate(-89.9)"><tspan x="0" y="0">13</tspan></text>
            <text class="cls-14" transform="translate(610.7 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(610.7 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(603 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(627 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(627 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(623.8 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-14" class="property__active" ng-class="tundraDos.inmovablesClassList[13]" ng-click="tundraDos.showPropertyData(73, '14')">
            <polyline id="BL-14" class="property pb-sprite-2" points="592.9 534.9 592.9 703.9 538.8 703.9 538.8 534.9 592.9 534.9"/>
            <text class="cls-8" transform="translate(559.2 624.5) rotate(-89.9)"><tspan x="0" y="0">14</tspan></text>
            <text class="cls-14" transform="translate(556.7 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(556.7 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(549 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(572.9 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(572.9 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(569.7 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-15" class="property__active" ng-class="tundraDos.inmovablesClassList[14]" ng-click="tundraDos.showPropertyData(73, '15')">
            <polyline id="BL-15" class="property pb-sprite-1" points="538.8 534.9 538.8 703.9 484.7 703.9 484.7 534.9 538.8 534.9"/>
            <text class="cls-8" transform="translate(504.2 624.5) rotate(-89.9)"><tspan x="0" y="0">15</tspan></text>
            <text class="cls-14" transform="translate(502.6 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(502.6 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(494.9 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(518.9 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(518.9 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(515.6 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-16" class="property__active" ng-class="tundraDos.inmovablesClassList[15]" ng-click="tundraDos.showPropertyData(73, '16')">
            <polyline id="BL-16" class="property pb-sprite-2" points="484.7 534.9 484.7 703.9 430.6 703.9 430.6 534.9 484.7 534.9"/>
            <text class="cls-8" transform="translate(452.1 624.5) rotate(-89.9)"><tspan x="0" y="0">16</tspan></text>
            <text class="cls-14" transform="translate(448.5 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(448.5 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(440.8 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(464.8 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(464.8 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(461.5 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-17" class="property__active" ng-class="tundraDos.inmovablesClassList[16]" ng-click="tundraDos.showPropertyData(73, '17')">
            <polyline id="BL-17" class="property pb-sprite-1" points="376.6 534.9 430.6 534.9 430.6 703.9 376.6 703.9 376.6 534.9"/>
            <text class="cls-8" transform="translate(396.3 624.5) rotate(-89.9)"><tspan x="0" y="0">17</tspan></text>
            <text class="cls-14" transform="translate(394.4 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(394.4 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(386.7 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(410.7 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(410.7 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(407.4 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-18" class="property__active" ng-class="tundraDos.inmovablesClassList[17]" ng-click="tundraDos.showPropertyData(73, '18')">
            <polyline id="BL-18" class="property pb-sprite-2" points="322.5 534.9 376.6 534.9 376.6 703.9 322.5 703.9 322.5 534.9"/>
            <text class="cls-8" transform="translate(346.6 624.5) rotate(-89.9)"><tspan x="0" y="0">18</tspan></text>
            <text class="cls-14" transform="translate(340.3 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(340.3 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(332.6 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(356.6 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(356.6 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(353.4 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-19" class="property__active" ng-class="tundraDos.inmovablesClassList[18]" ng-click="tundraDos.showPropertyData(73, '19')">
            <polyline id="BL-19" class="property pb-sprite-1" points="268.4 534.9 322.5 534.9 322.5 703.9 268.4 703.9 268.4 534.9"/>
            <text class="cls-8" transform="translate(290.8 624.5) rotate(-89.9)"><tspan x="0" y="0">19</tspan></text>
            <text class="cls-14" transform="translate(286.2 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(286.2 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(278.5 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(302.5 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(302.5 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(299.3 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="B-20" class="property__active" ng-class="tundraDos.inmovablesClassList[19]" ng-click="tundraDos.showPropertyData(73, '20')">
            <polyline id="BL-20" class="property pb-sprite-2" points="214.3 534.9 268.4 534.9 268.4 703.9 214.3 703.9 214.3 534.9"/>
            <g>
              <polyline class="cls-4" points="241.3 566.1 234.2 559 241.3 551.8 241.3 566.1"/>
              <polyline class="cls-1" points="241.3 566.1 241.3 551.8 248.5 559 241.3 566.1"/>
            </g>
            <text class="cls-8" transform="translate(237.3 624.5) rotate(-89.9)"><tspan x="0" y="0">20</tspan></text>
            <text class="cls-14" transform="translate(232.1 545)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(232.1 700.5)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(224.4 631.2) rotate(-90)"><tspan class="cls-22" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(248.4 644) rotate(-90)"><tspan class="cls-27" x="0" y="0">20</tspan><tspan class="cls-21" x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(248.4 612.4) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(245.2 603.4) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-2" data-name="DIVISIONES">
            <line class="cls-23" x1="268.4" y1="534.9" x2="268.4" y2="703.9"/>
            <line class="cls-23" x1="322.5" y1="534.9" x2="322.5" y2="703.9"/>
            <line class="cls-23" x1="376.6" y1="534.9" x2="376.6" y2="703.9"/>
            <line class="cls-23" x1="430.6" y1="534.9" x2="430.6" y2="703.9"/>
            <line class="cls-23" x1="484.7" y1="534.9" x2="484.7" y2="703.9"/>
            <line class="cls-23" x1="538.8" y1="534.9" x2="538.8" y2="703.9"/>
            <line class="cls-23" x1="592.9" y1="534.9" x2="592.9" y2="703.9"/>
            <line class="cls-23" x1="647" y1="534.9" x2="647" y2="703.9"/>
            <line class="cls-23" x1="701.1" y1="534.9" x2="701.1" y2="703.9"/>
            <line class="cls-23" x1="755.1" y1="534.9" x2="755.1" y2="703.9"/>
            <line class="cls-23" x1="809.2" y1="534.9" x2="809.2" y2="703.9"/>
            <line class="cls-23" x1="863.3" y1="534.9" x2="863.3" y2="703.9"/>
            <line class="cls-23" x1="917.4" y1="534.9" x2="917.4" y2="703.9"/>
            <line class="cls-23" x1="971.5" y1="534.9" x2="971.5" y2="703.9"/>
            <line class="cls-23" x1="1025.6" y1="534.9" x2="1025.6" y2="703.9"/>
          </g>
        </g>
        <g id="ISLA_C">
          <g id="C-21" class="property__active" ng-class="tundraDos.inmovablesClassList[20]" ng-click="tundraDos.showPropertyData(73, '21')">
            <polyline id="CL-21" class="property pb-sprite-1" points=".7 649.5 135.9 649.5 135.9 703.9 .7 703.9 .7 649.5"/>
            <g>
              <polyline class="cls-4" points="119 676.7 104.6 676.7 111.8 669.5 119 676.7"/>
              <polyline class="cls-1" points="119 676.7 111.8 683.9 104.6 676.7 119 676.7"/>
            </g>
            <text class="cls-9" transform="translate(63.1 674.4)"><tspan class="cls-18" x="0" y="0">2</tspan><tspan x="5.1" y="0">1</tspan></text>
            <text class="cls-14" transform="translate(132.5 685.9) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">5</tspan></text>
            <text class="cls-14" transform="translate(10.8 685.9) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">5</tspan></text>
            <text class="cls-14" transform="translate(56.4 659.6)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 700.5)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 683.8)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">1.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 683.8)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 680.6)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-22" class="property__active" ng-class="tundraDos.inmovablesClassList[21]" ng-click="tundraDos.showPropertyData(73, '22')">
            <polyline id="CL-22" class="property pb-sprite-2" points=".7 595.4 135.9 595.4 135.9 649.5 .7 649.5 .7 595.4"/>
            <text class="cls-9" transform="translate(63.1 620.1)"><tspan class="cls-18" x="0" y="0">2</tspan><tspan x="5.1" y="0">2</tspan></text>
            <text class="cls-14" transform="translate(132.5 631.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 631.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 605.5)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 629.5)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 629.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 626.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-23" class="property__active" ng-class="tundraDos.inmovablesClassList[22]" ng-click="tundraDos.showPropertyData(73, '23')">
            <polyline id="CL-23" class="property pb-sprite-1" points=".7 541.3 135.9 541.3 135.9 595.4 .7 595.4 .7 541.3"/>
            <text class="cls-9" transform="translate(63.1 566)"><tspan x="0" y="0">23</tspan></text>
            <text class="cls-14" transform="translate(132.5 577.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 577.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 551.5)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 575.5)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 575.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 572.2)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-24" class="property__active" ng-class="tundraDos.inmovablesClassList[23]" ng-click="tundraDos.showPropertyData(73, '24')">
            <polyline id="CL-24" class="property pb-sprite-2" points=".7 487.2 135.9 487.2 135.9 541.3 .7 541.3 .7 487.2"/>
            <text class="cls-9" transform="translate(63.1 512)"><tspan x="0" y="0">24</tspan></text>
            <text class="cls-14" transform="translate(132.5 523.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 523.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 497.4)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 521.4)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 521.4)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 518.1)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-25" class="property__active" ng-class="tundraDos.inmovablesClassList[24]" ng-click="tundraDos.showPropertyData(73, '25')">
            <polyline id="CL-25" class="property pb-sprite-1" points=".7 433.1 135.9 433.1 135.9 487.2 .7 487.2 .7 433.1"/>
            <text class="cls-9" transform="translate(63.1 457.9)"><tspan class="cls-18" x="0" y="0">2</tspan><tspan x="5.1" y="0">5</tspan></text>
            <text class="cls-14" transform="translate(132.5 469.4) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 469.4) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 443.3)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 467.3)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 467.3)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 464)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-26" class="property__active" ng-class="tundraDos.inmovablesClassList[25]" ng-click="tundraDos.showPropertyData(73, '26')">
            <polyline id="CL-26" class="property pb-sprite-2" points=".7 379.1 135.9 379.1 135.9 433.1 .7 433.1 .7 379.1"/>
            <text class="cls-9" transform="translate(63.1 403.8)"><tspan x="0" y="0">26</tspan></text>
            <text class="cls-14" transform="translate(132.5 415.3) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 415.3) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 389.2)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 413.2)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 413.2)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 410)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-27" class="property__active" ng-class="tundraDos.inmovablesClassList[26]" ng-click="tundraDos.showPropertyData(73, '27')">
            <polyline id="CL-27" class="property pb-sprite-1" points=".7 325 135.9 325 135.9 379.1 .7 379.1 .7 325"/>
            <text class="cls-9" transform="translate(63.1 349.7)"><tspan x="0" y="0">27</tspan></text>
            <text class="cls-14" transform="translate(132.5 361.2) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 361.2) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 335.1)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 359.1)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 359.1)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 355.9)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-28" class="property__active" ng-class="tundraDos.inmovablesClassList[27]" ng-click="tundraDos.showPropertyData(73, '28')">
            <polyline id="CL-28" class="property pb-sprite-2" points=".7 270.9 135.9 270.9 135.9 325 .7 325 .7 270.9"/>
            <text class="cls-9" transform="translate(63.1 295.6)"><tspan x="0" y="0">28</tspan></text>
            <text class="cls-14" transform="translate(132.5 307.1) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 307.1) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 281)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 305)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 305)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 301.8)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-29" class="property__active" ng-class="tundraDos.inmovablesClassList[28]" ng-click="tundraDos.showPropertyData(73, '29')">
            <polyline id="CL-29" class="property pb-sprite-1" points=".7 216.8 135.9 216.8 135.9 270.9 .7 270.9 .7 216.8"/>
            <text class="cls-9" transform="translate(63.1 241.5)"><tspan x="0" y="0">29</tspan></text>
            <text class="cls-14" transform="translate(132.5 253) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 253) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 227)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 251)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 251)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 247.7)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-30" class="property__active" ng-class="tundraDos.inmovablesClassList[29]" ng-click="tundraDos.showPropertyData(73, '30')">
            <polyline id="CL-30" class="property pb-sprite-2" points=".7 162.7 135.9 162.7 135.9 216.8 .7 216.8 .7 162.7"/>
            <text class="cls-9" transform="translate(63.1 187.4)"><tspan x="0" y="0">30</tspan></text>
            <text class="cls-14" transform="translate(132.5 199) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 199) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 172.9)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 196.9)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 196.9)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 193.6)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-31" class="property__active" ng-class="tundraDos.inmovablesClassList[30]" ng-click="tundraDos.showPropertyData(73, '31')">
            <polyline id="CL-31" class="property pb-sprite-1" points=".7 108.6 135.9 108.6 135.9 162.7 .7 162.7 .7 108.6"/>
            <text class="cls-9" transform="translate(63.1 133.4)"><tspan class="cls-18" x="0" y="0">3</tspan><tspan x="5.1" y="0">1</tspan></text>
            <text class="cls-14" transform="translate(132.5 144.9) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 144.9) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 118.8)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 142.8)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 142.8)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 139.5)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-32" class="property__active" ng-class="tundraDos.inmovablesClassList[31]" ng-click="tundraDos.showPropertyData(73, '32')">
            <polyline id="CL-32" class="property pb-sprite-2" points=".7 54.6 135.9 54.6 135.9 108.6 .7 108.6 .7 54.6"/>
            <text class="cls-9" transform="translate(63.1 79.3)"><tspan class="cls-18" x="0" y="0">3</tspan><tspan x="5.1" y="0">2</tspan></text>
            <text class="cls-14" transform="translate(132.5 90.8) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 90.8) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 64.7)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 88.7)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 88.7)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 85.5)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="C-33" class="property__active" ng-class="tundraDos.inmovablesClassList[32]" ng-click="tundraDos.showPropertyData(73, '33')">
            <polyline id="CL-33" class="property pb-sprite-1" points=".7 .5 135.9 .5 135.9 54.6 .7 54.6 .7 .5"/>
            <g>
              <polyline class="cls-4" points="119 27.5 104.6 27.5 111.8 20.3 119 27.5"/>
              <polyline class="cls-1" points="119 27.5 111.8 34.7 104.6 27.5 119 27.5"/>
            </g>
            <text class="cls-9" transform="translate(63.1 25.2)"><tspan x="0" y="0">33</tspan></text>
            <text class="cls-14" transform="translate(132.5 36.7) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(10.8 36.7) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(56.4 10.6)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(46.2 34.6)"><tspan class="cls-26" x="0" y="0">16</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(77.9 34.6)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(86.8 31.4)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-3" data-name="DIVISIONES">
            <line class="cls-23" x1="135.9" y1="54.6" x2=".7" y2="54.6"/>
            <line class="cls-23" x1="135.9" y1="108.6" x2=".7" y2="108.6"/>
            <line class="cls-23" x1="135.9" y1="162.7" x2=".7" y2="162.7"/>
            <line class="cls-23" x1="135.9" y1="216.8" x2=".7" y2="216.8"/>
            <line class="cls-23" x1="135.9" y1="270.9" x2=".7" y2="270.9"/>
            <line class="cls-23" x1="135.9" y1="325" x2=".7" y2="325"/>
            <line class="cls-23" x1="135.9" y1="379.1" x2=".7" y2="379.1"/>
            <line class="cls-23" x1="135.9" y1="433.1" x2=".7" y2="433.1"/>
            <line class="cls-23" x1="135.9" y1="487.2" x2=".7" y2="487.2"/>
            <line class="cls-23" x1="135.9" y1="541.3" x2=".7" y2="541.3"/>
            <line class="cls-23" x1="135.9" y1="595.4" x2=".7" y2="595.4"/>
            <line class="cls-23" x1="135.9" y1="649.5" x2=".7" y2="649.5"/>
          </g>
        </g>
        <g id="ISLA_D">
          <g id="D-34" class="property__active" ng-class="tundraDos.inmovablesClassList[33]" ng-click="tundraDos.showPropertyData(73, '34')">
            <polyline id="DL-34" class="property pb-sprite-2" points="275.1 .5 275.1 135.7 214.3 135.7 214.3 .5 275.1 .5"/>
            <g>
              <polyline class="cls-4" points="244.7 118.8 244.7 104.4 251.9 111.6 244.7 118.8"/>
              <polyline class="cls-1" points="244.7 118.8 237.5 111.6 244.7 104.4 244.7 118.8"/>
            </g>
            <text class="cls-8" transform="translate(242.2 74.6) rotate(-89.9)"><tspan x="0" y="0">34</tspan></text>
            <text class="cls-14" transform="translate(235.5 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(235.5 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(224.4 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(251.8 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(251.8 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(248.6 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-35" class="property__active" ng-class="tundraDos.inmovablesClassList[34]" ng-click="tundraDos.showPropertyData(73, '35')">
            <polyline id="DL-35" class="property pb-sprite-1" points="336 .5 336 135.7 275.1 135.7 275.1 .5 336 .5"/>
            <text class="cls-8" transform="translate(303.1 74.6) rotate(-89.9)"><tspan x="0" y="0">35</tspan></text>
            <text class="cls-14" transform="translate(296.4 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(296.4 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(285.3 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(312.7 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(312.7 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(309.4 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-36" class="property__active" ng-class="tundraDos.inmovablesClassList[35]" ng-click="tundraDos.showPropertyData(73, '36')">
            <polyline id="DL-36" class="property pb-sprite-2" points="396.8 .5 396.8 135.7 336 135.7 336 .5 396.8 .5"/>
            <text class="cls-8" transform="translate(363.9 74.6) rotate(-89.9)"><tspan x="0" y="0">36</tspan></text>
            <text class="cls-14" transform="translate(357.2 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(357.2 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(346.1 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(373.5 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(373.5 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(370.3 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-37" class="property__active" ng-class="tundraDos.inmovablesClassList[36]" ng-click="tundraDos.showPropertyData(73, '37')">
            <polyline id="DL-37" class="property pb-sprite-1" points="457.7 .5 457.7 135.7 396.8 135.7 396.8 .5 457.7 .5"/>
            <text class="cls-8" transform="translate(424.8 73.2) rotate(-89.9)"><tspan x="0" y="0">37</tspan></text>
            <text class="cls-14" transform="translate(418.1 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(418.1 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(407 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(434.4 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(434.4 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(431.1 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-38" class="property__active" ng-class="tundraDos.inmovablesClassList[37]" ng-click="tundraDos.showPropertyData(73, '38')">
            <polyline id="DL-38" class="property pb-sprite-2" points="518.5 .5 518.5 135.7 457.7 135.7 457.7 .5 518.5 .5"/>
            <text class="cls-8" transform="translate(485.6 73.2) rotate(-89.9)"><tspan x="0" y="0">38</tspan></text>
            <text class="cls-14" transform="translate(478.9 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(478.9 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(467.8 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(495.2 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(495.2 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(492 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-39" class="property__active" ng-class="tundraDos.inmovablesClassList[38]" ng-click="tundraDos.showPropertyData(73, '39')">
            <polyline id="DL-39" class="property pb-sprite-1" points="579.4 .5 579.4 135.7 518.5 135.7 518.5 .5 579.4 .5"/>
            <text class="cls-8" transform="translate(546.5 73.2) rotate(-89.9)"><tspan x="0" y="0">39</tspan></text>
            <text class="cls-14" transform="translate(539.8 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(539.8 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(528.7 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(556 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(556 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(552.8 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-40" class="property__active" ng-class="tundraDos.inmovablesClassList[39]" ng-click="tundraDos.showPropertyData(73, '40')">
            <polyline id="DL-40" class="property pb-sprite-2" points="640.2 .5 640.2 135.7 579.4 135.7 579.4 .5 640.2 .5"/>
            <text class="cls-8" transform="translate(607.3 73.2) rotate(-89.9)"><tspan x="0" y="0">40</tspan></text>
            <text class="cls-14" transform="translate(600.6 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(600.6 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(589.5 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(616.9 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(616.9 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(613.6 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-41" class="property__active" ng-class="tundraDos.inmovablesClassList[40]" ng-click="tundraDos.showPropertyData(73, '41')">
            <polyline id="DL-41" class="property pb-sprite-1" points="701.1 .5 701.1 135.7 640.2 135.7 640.2 .5 701.1 .5"/>
            <text class="cls-8" transform="translate(668.2 73.2) rotate(-89.9)"><tspan x="0" y="0">41</tspan></text>
            <text class="cls-14" transform="translate(661.4 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(661.4 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(650.4 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(677.7 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(677.7 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(674.5 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-42" class="property__active" ng-class="tundraDos.inmovablesClassList[41]" ng-click="tundraDos.showPropertyData(73, '42')">
            <polyline id="DL-42" class="property pb-sprite-2" points="761.9 .5 761.9 135.7 701.1 135.7 701.1 .5 761.9 .5"/>
            <text class="cls-8" transform="translate(729 73.2) rotate(-89.9)"><tspan x="0" y="0">42</tspan></text>
            <text class="cls-14" transform="translate(722.3 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(722.3 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(711.2 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(738.6 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(738.6 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(735.3 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-43" class="property__active" ng-class="tundraDos.inmovablesClassList[42]" ng-click="tundraDos.showPropertyData(73, '43')">
            <polyline id="DL-43" class="property pb-sprite-1" points="822.8 .5 822.8 135.7 761.9 135.7 761.9 .5 822.8 .5"/>
            <text class="cls-8" transform="translate(789.9 73.2) rotate(-89.9)"><tspan x="0" y="0">43</tspan></text>
            <text class="cls-14" transform="translate(783.1 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(783.1 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(772 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(799.4 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(799.4 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(796.2 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-44" class="property__active" ng-class="tundraDos.inmovablesClassList[43]" ng-click="tundraDos.showPropertyData(73, '44')">
            <polyline id="DL-44" class="property pb-sprite-2" points="883.6 .5 883.6 135.7 822.8 135.7 822.8 .5 883.6 .5"/>
            <text class="cls-8" transform="translate(850.7 73.2) rotate(-89.9)"><tspan x="0" y="0">44</tspan></text>
            <text class="cls-14" transform="translate(844 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(844 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(832.9 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(860.3 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(860.3 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(857 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
            <g>
              <polyline class="cls-4" points="852.4 118.8 852.4 104.4 859.6 111.6 852.4 118.8"/>
              <polyline class="cls-1" points="852.4 118.8 845.2 111.6 852.4 104.4 852.4 118.8"/>
            </g>
          </g>
          <g id="D-45" class="property__active" ng-class="tundraDos.inmovablesClassList[44]" ng-click="tundraDos.showPropertyData(73, '45')">
            <polyline id="DL-45" class="property pb-sprite-1" points="944.4 .5 944.4 135.7 883.6 135.7 883.6 .5 944.4 .5"/>
            <g>
              <polyline class="cls-4" points="914 118.8 914 104.4 921.2 111.6 914 118.8"/>
              <polyline class="cls-1" points="914 118.8 906.9 111.6 914 104.4 914 118.8"/>
            </g>
            <text class="cls-8" transform="translate(911.5 73.2) rotate(-89.9)"><tspan x="0" y="0">45</tspan></text>
            <text class="cls-14" transform="translate(904.8 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(904.8 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(893.7 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(921.1 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(921.1 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(917.9 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-46" class="property__active" ng-class="tundraDos.inmovablesClassList[45]" ng-click="tundraDos.showPropertyData(73, '46')">
            <polyline id="DL-46" class="property pb-sprite-2" points="1005.3 .5 1005.3 135.7 944.4 135.7 944.4 .5 1005.3 .5"/>
            <g>
              <polyline class="cls-4" points="974.9 118.8 974.9 104.4 982 111.6 974.9 118.8"/>
              <polyline class="cls-1" points="974.9 118.8 967.7 111.6 974.9 104.4 974.9 118.8"/>
            </g>
            <text class="cls-8" transform="translate(972.4 73.2) rotate(-89.9)"><tspan x="0" y="0">46</tspan></text>
            <text class="cls-14" transform="translate(965.7 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(965.7 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(954.6 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(982 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(982 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(978.7 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="D-47" class="property__active" ng-class="tundraDos.inmovablesClassList[46]" ng-click="tundraDos.showPropertyData(73, '47')">
            <polyline id="DL-47" class="property pb-sprite-1" points="1066.1 .5 1066.1 135.7 1005.3 135.7 1005.3 .5 1066.1 .5"/>
            <g>
              <polyline class="cls-4" points="1035.7 118.8 1035.7 104.4 1042.9 111.6 1035.7 118.8"/>
              <polyline class="cls-1" points="1035.7 118.8 1028.5 111.6 1035.7 104.4 1035.7 118.8"/>
            </g>
            <text class="cls-8" transform="translate(1033.2 73.2) rotate(-89.9)"><tspan x="0" y="0">47</tspan></text>
            <text class="cls-14" transform="translate(1026.5 132.3)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1026.5 10.6)"><tspan class="cls-15" x="0" y="0">9.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1015.4 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1062.8 79.9) rotate(-90)"><tspan class="cls-10" x="0" y="0">20.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1042.8 86.9) rotate(-90)"><tspan class="cls-26" x="0" y="0">18</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1042.8 55.3) rotate(-90)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1039.6 46.3) rotate(-90)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-4" data-name="DIVISIONES">
            <line class="cls-23" x1="275.1" y1="135.7" x2="275.1" y2=".5"/>
            <line class="cls-23" x1="336" y1="135.7" x2="336" y2=".5"/>
            <line class="cls-23" x1="396.8" y1="135.7" x2="396.8" y2=".5"/>
            <line class="cls-23" x1="457.7" y1="135.7" x2="457.7" y2=".5"/>
            <line class="cls-23" x1="518.5" y1="135.7" x2="518.5" y2=".5"/>
            <line class="cls-23" x1="579.4" y1="135.7" x2="579.4" y2=".5"/>
            <line class="cls-23" x1="640.2" y1="135.7" x2="640.2" y2=".5"/>
            <line class="cls-23" x1="701.1" y1="135.7" x2="701.1" y2=".5"/>
            <line class="cls-23" x1="761.9" y1="135.7" x2="761.9" y2=".5"/>
            <line class="cls-23" x1="822.8" y1="135.7" x2="822.8" y2=".5"/>
            <line class="cls-23" x1="883.6" y1="135.7" x2="883.6" y2=".5"/>
            <line class="cls-23" x1="944.4" y1="135.7" x2="944.4" y2=".5"/>
            <line class="cls-23" x1="1005.3" y1="135.7" x2="1005.3" y2=".5"/>
            <line class="cls-23" x1="1066.1" y1="135.7" x2="1066.1" y2=".5"/>
          </g>
        </g>
        <g id="ISLA_E">
          <g id="E-48" class="property__active" ng-class="tundraDos.inmovablesClassList[47]" ng-click="tundraDos.showPropertyData(73, '48')">
            <polyline id="EL-48" class="property pb-sprite-1" points="1195.7 .5 1364.9 .5 1360.9 76.8 1192.1 68 1195.7 .5"/>
            <g>
              <polyline class="cls-4" points="1210.8 35.1 1225.1 35.9 1217.6 42.6 1210.8 35.1"/>
              <polyline class="cls-1" points="1210.8 35.1 1218.3 28.3 1225.1 35.9 1210.8 35.1"/>
            </g>
            <text class="cls-9" transform="translate(1273.2 30.8)"><tspan class="cls-18" x="0" y="0">4</tspan><tspan x="5.1" y="0">8</tspan></text>
            <text class="cls-13" transform="translate(1203.4 46.6) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1358.9 50.3) rotate(-87)"><tspan class="cls-19" x="0" y="0">11.3</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1268.4 10.6)"><tspan class="cls-10" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">3</tspan></text>
            <text class="cls-14" transform="translate(1256.5 42)"><tspan class="cls-26" x="0" y="0">26</tspan><tspan x="10.6" y="0">6.28</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1288.1 42)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1297.1 38.8)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="E-49" class="property__active" ng-class="tundraDos.inmovablesClassList[48]" ng-click="tundraDos.showPropertyData(73, '49')">
            <polyline id="EL-49" class="property pb-sprite-2" points="1192.1 68 1360.9 76.8 1357.4 144.3 1188.6 135.5 1192.1 68"/>
            <g>
              <polyline class="cls-4" points="1207.3 102.6 1221.6 103.4 1214 110.2 1207.3 102.6"/>
              <polyline class="cls-1" points="1207.3 102.6 1214.8 95.8 1221.6 103.4 1207.3 102.6"/>
            </g>
            <text class="cls-9" transform="translate(1267.6 97.4)"><tspan class="cls-20" x="0" y="0">4</tspan><tspan x="5.1" y="0">9</tspan></text>
            <text class="cls-13" transform="translate(1199.8 114.1) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1355.1 122.2) rotate(-87)"><tspan class="cls-19" x="0" y="0">10.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1264.1 82) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-13" transform="translate(1261.3 136) rotate(3)"><tspan class="cls-19" x="0" y="0">25.0</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(1252.7 109.5)"><tspan class="cls-26" x="0" y="0">25</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(1284.4 109.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(1293.3 106.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-5" data-name="DIVISIONES">
            <line class="cls-23" x1="1192.1" y1="68" x2="1360.9" y2="76.8"/>
            <line class="cls-23" x1="1188.6" y1="135.5" x2="1357.4" y2="144.3"/>
          </g>
        </g>
        <g id="ISLA_F">
          <g id="F-50" class="property__active" ng-class="tundraDos.inmovablesClassList[49]" ng-click="tundraDos.showPropertyData(73, '50')">
            <polyline id="FL-50" class="property pb-sprite-2" points="647.7 268.2 647.7 214.1 766 214.1 766 268.2 647.7 268.2"/>
            <g>
              <polyline class="cls-4" points="749.1 241.1 734.7 241.1 741.9 234 749.1 241.1"/>
              <polyline class="cls-1" points="749.1 241.1 741.9 248.3 734.7 241.1 749.1 241.1"/>
            </g>
            <text class="cls-6" transform="translate(701.7 238.8)"><tspan x="0" y="0">50</tspan></text>
            <text class="cls-14" transform="translate(695 224.2)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(657.8 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(762.6 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(684.8 248.2)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(716.4 248.2)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(725.4 245)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-51" class="property__active" ng-class="tundraDos.inmovablesClassList[50]" ng-click="tundraDos.showPropertyData(73, '51')">
            <polyline id="FL-51" class="property pb-sprite-1" points="647.7 322.3 647.7 268.2 766 268.2 766 322.3 647.7 322.3"/>
            <g>
              <polyline class="cls-4" points="749.1 295.2 734.7 295.2 741.9 288.1 749.1 295.2"/>
              <polyline class="cls-1" points="749.1 295.2 741.9 302.4 734.7 295.2 749.1 295.2"/>
            </g>
            <text class="cls-9" transform="translate(701.7 292.9)"><tspan class="cls-20" x="0" y="0">5</tspan><tspan x="5.1" y="0">1</tspan></text>
            <text class="cls-14" transform="translate(657.8 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(762.6 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(695 278.3)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(684.8 302.3)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(716.4 302.3)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(725.4 299.1)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-52" class="property__active" ng-class="tundraDos.inmovablesClassList[51]" ng-click="tundraDos.showPropertyData(73, '52')">
            <polyline id="FL-52" class="property pb-sprite-2" points="647.7 376.4 647.7 322.3 766 322.3 766 376.4 647.7 376.4"/>
            <g>
              <polyline class="cls-4" points="749.1 349.3 734.7 349.3 741.9 342.1 749.1 349.3"/>
              <polyline class="cls-1" points="749.1 349.3 741.9 356.5 734.7 349.3 749.1 349.3"/>
            </g>
            <text class="cls-9" transform="translate(701.7 347)"><tspan x="0" y="0">52</tspan></text>
            <text class="cls-14" transform="translate(657.8 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(762.6 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(695 332.4)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(684.8 356.4)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(716.4 356.4)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(725.4 353.2)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-53" class="property__active" ng-class="tundraDos.inmovablesClassList[52]" ng-click="tundraDos.showPropertyData(73, '53')">
            <polyline id="FL-53" class="property pb-sprite-1" points="647.7 430.4 647.7 376.4 766 376.4 766 430.4 647.7 430.4"/>
            <g>
              <polyline class="cls-4" points="749.1 403.4 734.7 403.4 741.9 396.2 749.1 403.4"/>
              <polyline class="cls-1" points="749.1 403.4 741.9 410.6 734.7 403.4 749.1 403.4"/>
            </g>
            <text class="cls-9" transform="translate(701.7 401.1)"><tspan x="0" y="0">53</tspan></text>
            <text class="cls-14" transform="translate(657.8 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(762.6 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(695 386.5)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(695 427.1)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(684.8 410.5)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(716.4 410.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(725.4 407.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-54" class="property__active" ng-class="tundraDos.inmovablesClassList[53]" ng-click="tundraDos.showPropertyData(73, '54')">
            <polyline id="FL-54" class="property pb-sprite-2" points="529.3 376.4 647.7 376.4 647.7 430.4 529.3 430.4 529.3 376.4"/>
            <g>
              <polyline class="cls-4" points="560.6 403.4 553.4 410.6 546.2 403.4 560.6 403.4"/>
              <polyline class="cls-1" points="560.6 403.4 546.2 403.4 553.4 396.2 560.6 403.4"/>
            </g>
            <text class="cls-9" transform="translate(583.4 401.1)"><tspan x="0" y="0">54</tspan></text>
            <text class="cls-14" transform="translate(539.5 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(644.3 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(576.7 386.5)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(576.7 427.1)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(566.5 410.5)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(598.1 410.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(607.1 407.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-55" class="property__active" ng-class="tundraDos.inmovablesClassList[54]" ng-click="tundraDos.showPropertyData(73, '55')">
            <polyline id="FL-55" class="property pb-sprite-1" points="529.3 322.3 647.7 322.3 647.7 376.4 529.3 376.4 529.3 322.3"/>
            <text class="cls-9" transform="translate(583.4 347)"><tspan class="cls-18" x="0" y="0">5</tspan><tspan x="5.1" y="0">5</tspan></text>
            <text class="cls-14" transform="translate(539.5 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(644.3 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(576.7 332.4)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(566.5 356.4)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(598.1 356.4)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(607.1 353.2)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-56" class="property__active" ng-class="tundraDos.inmovablesClassList[55]" ng-click="tundraDos.showPropertyData(73, '56')">
            <polyline id="FL-56" class="property pb-sprite-2" points="529.3 268.2 647.7 268.2 647.7 322.3 529.3 322.3 529.3 268.2"/>
            <text class="cls-9" transform="translate(583.4 292.9)"><tspan x="0" y="0">56</tspan></text>
            <text class="cls-14" transform="translate(539.5 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(644.3 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(576.7 278.3)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(566.5 302.3)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(598.1 302.3)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(607.1 299.1)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="F-57" class="property__active" ng-class="tundraDos.inmovablesClassList[56]" ng-click="tundraDos.showPropertyData(73, '57')">
            <polyline id="FL-57" class="property pb-sprite-1" points="529.3 214.1 647.7 214.1 647.7 268.2 529.3 268.2 529.3 214.1"/>
            <g>
              <polyline class="cls-4" points="560.6 241.1 553.4 248.3 546.2 241.1 560.6 241.1"/>
              <polyline class="cls-1" points="560.6 241.1 546.2 241.1 553.4 234 560.6 241.1"/>
            </g>
            <text class="cls-9" transform="translate(583.4 238.8)"><tspan x="0" y="0">57</tspan></text>
            <text class="cls-14" transform="translate(576.7 224.2)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(539.5 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(644.3 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(566.5 248.2)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(598.1 248.2)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(607.1 245)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-6" data-name="DIVISIONES">
            <line class="cls-23" x1="529.3" y1="430.4" x2="766" y2="430.4"/>
            <line class="cls-23" x1="647.7" y1="430.4" x2="647.7" y2="214.1"/>
            <line class="cls-23" x1="529.3" y1="376.4" x2="766" y2="376.4"/>
            <line class="cls-23" x1="529.3" y1="322.3" x2="766" y2="322.3"/>
            <line class="cls-23" x1="529.3" y1="268.2" x2="766" y2="268.2"/>
          </g>
        </g>
        <g id="ISLA_G">
          <g id="G-58" class="property__active" ng-class="tundraDos.inmovablesClassList[57]" ng-click="tundraDos.showPropertyData(73, '58')">
            <polyline id="GL-58" class="property pb-sprite-2" points="450.9 268.2 332.6 268.2 332.6 214.1 450.9 214.1 450.9 268.2"/>
            <g>
              <polyline class="cls-4" points="434 241.1 419.7 241.1 426.8 234 434 241.1"/>
              <polyline class="cls-1" points="434 241.1 426.8 248.3 419.7 241.1 434 241.1"/>
            </g>
            <text class="cls-9" transform="translate(386.6 238.8)"><tspan x="0" y="0">58</tspan></text>
            <text class="cls-14" transform="translate(447.5 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(379.9 224.2)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(342.7 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(369.7 248.2)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(401.3 248.2)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(410.3 245)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-59" class="property__active" ng-class="tundraDos.inmovablesClassList[58]" ng-click="tundraDos.showPropertyData(73, '59')">
            <polyline id="GL-59" class="property pb-sprite-1" points="450.9 322.3 332.6 322.3 332.6 268.2 450.9 268.2 450.9 322.3"/>
            <text class="cls-9" transform="translate(386.6 292.9)"><tspan class="cls-18" x="0" y="0">5</tspan><tspan x="5.1" y="0">9</tspan></text>
            <text class="cls-14" transform="translate(447.5 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(379.9 278.3)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(342.7 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(369.7 302.3)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(401.3 302.3)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(410.3 299.1)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-60" class="property__active" ng-class="tundraDos.inmovablesClassList[59]" ng-click="tundraDos.showPropertyData(73, '60')">
            <polyline id="GL-60" class="property pb-sprite-2" points="450.9 376.4 332.6 376.4 332.6 322.3 450.9 322.3 450.9 376.4"/>
            <text class="cls-7" transform="translate(386.6 347)"><tspan x="0" y="0">60</tspan></text>
            <text class="cls-14" transform="translate(447.5 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(379.9 332.4)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(342.7 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(369.7 356.4)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(401.3 356.4)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(410.3 353.2)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-61" class="property__active" ng-class="tundraDos.inmovablesClassList[60]" ng-click="tundraDos.showPropertyData(73, '61')">
            <polyline id="GL-61" class="property pb-sprite-1" points="450.9 430.4 332.6 430.4 332.6 376.4 450.9 376.4 450.9 430.4"/>
            <g>
              <polyline class="cls-4" points="434 403.4 419.7 403.4 426.8 396.2 434 403.4"/>
              <polyline class="cls-1" points="434 403.4 426.8 410.6 419.7 403.4 434 403.4"/>
            </g>
            <text class="cls-9" transform="translate(386.6 401.1)"><tspan class="cls-18" x="0" y="0">6</tspan><tspan x="5.1" y="0">1</tspan></text>
            <text class="cls-14" transform="translate(447.5 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(379.9 386.5)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(379.9 427.1)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(342.7 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(369.7 410.5)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(401.3 410.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(410.3 407.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-62" class="property__active" ng-class="tundraDos.inmovablesClassList[61]" ng-click="tundraDos.showPropertyData(73, '62')">
            <polyline id="GL-62" class="property pb-sprite-2" points="214.3 376.4 332.6 376.4 332.6 430.4 214.3 430.4 214.3 376.4"/>
            <g>
              <polyline class="cls-4" points="245.5 403.4 238.4 410.6 231.2 403.4 245.5 403.4"/>
              <polyline class="cls-1" points="245.5 403.4 231.2 403.4 238.4 396.2 245.5 403.4"/>
            </g>
            <text class="cls-9" transform="translate(268.3 401.1)"><tspan class="cls-20" x="0" y="0">6</tspan><tspan x="5.1" y="0">2</tspan></text>
            <text class="cls-14" transform="translate(224.4 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(329.2 412.6) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(261.6 386.5)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(261.6 427.1)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(251.4 410.5)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(283 410.5)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(292 407.3)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-63" class="property__active" ng-class="tundraDos.inmovablesClassList[62]" ng-click="tundraDos.showPropertyData(73, '63')">
            <polyline id="GL-63" class="property pb-sprite-1" points="214.3 322.3 332.6 322.3 332.6 376.4 214.3 376.4 214.3 322.3"/>
            <text class="cls-9" transform="translate(268.3 347)"><tspan class="cls-20" x="0" y="0">6</tspan><tspan x="5.1" y="0">3</tspan></text>
            <text class="cls-14" transform="translate(224.4 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(329.2 358.5) rotate(-90)"><tspan class="cls-11" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(261.6 332.4)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(251.4 356.4)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(283 356.4)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(292 353.2)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-64" class="property__active" ng-class="tundraDos.inmovablesClassList[63]" ng-click="tundraDos.showPropertyData(73, '64')">
            <polyline id="GL-64" class="property pb-sprite-2" points="214.3 268.2 332.6 268.2 332.6 322.3 214.3 322.3 214.3 268.2"/>
            <text class="cls-9" transform="translate(268.3 292.9)"><tspan class="cls-20" x="0" y="0">6</tspan><tspan x="5.1" y="0">4</tspan></text>
            <text class="cls-14" transform="translate(224.4 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(329.2 304.4) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(261.6 278.3)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(251.4 302.3)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(283 302.3)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(292 299.1)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="G-65" class="property__active" ng-class="tundraDos.inmovablesClassList[64]" ng-click="tundraDos.showPropertyData(73, '65')">
            <polyline id="GL-65" class="property pb-sprite-1" points="214.3 214.1 332.6 214.1 332.6 268.2 214.3 268.2 214.3 214.1"/>
            <g>
              <polyline class="cls-4" points="245.5 241.1 238.4 248.3 231.2 241.1 245.5 241.1"/>
              <polyline class="cls-1" points="245.5 241.1 231.2 241.1 238.4 234 245.5 241.1"/>
            </g>
            <text class="cls-9" transform="translate(268.3 238.8)"><tspan x="0" y="0">65</tspan></text>
            <text class="cls-14" transform="translate(224.4 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(329.2 250.3) rotate(-90)"><tspan class="cls-15" x="0" y="0">8.0</tspan><tspan x="13.1" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(261.6 224.2)"><tspan class="cls-10" x="0" y="0">17.5</tspan><tspan x="18.4" y="0">0</tspan></text>
            <text class="cls-14" transform="translate(251.4 248.2)"><tspan class="cls-26" x="0" y="0">14</tspan><tspan x="10.6" y="0">0.00</tspan></text>
            <g>
              <text class="cls-14" transform="translate(283 248.2)"><tspan x="0" y="0">m</tspan></text>
              <text class="cls-12" transform="translate(292 245)"><tspan x="0" y="0">2</tspan></text>
            </g>
          </g>
          <g id="DIVISIONES-7" data-name="DIVISIONES">
            <line class="cls-23" x1="332.6" y1="214.1" x2="332.6" y2="430.4"/>
            <line class="cls-23" x1="214.3" y1="376.4" x2="450.9" y2="376.4"/>
            <line class="cls-23" x1="214.3" y1="322.3" x2="450.9" y2="322.3"/>
            <line class="cls-23" x1="214.3" y1="268.2" x2="450.9" y2="268.2"/>
            <line class="cls-23" x1="214.3" y1="430.4" x2="450.9" y2="430.4"/>
          </g>
        </g>
      </g>
      <g id="COMPLEMENTO">
        <g>
          <line class="cls-24" x1="857.5" y1="352.2" x2="952.1" y2="352.2"/>
          <line class="cls-24" x1="892.2" y1="301.7" x2="885.9" y2="263.9"/>
          <line class="cls-24" x1="917.4" y1="301.7" x2="923.7" y2="263.9"/>
          <line class="cls-24" x1="917.4" y1="301.7" x2="892.2" y2="301.7"/>
          <line class="cls-24" x1="942.6" y1="263.9" x2="942.6" y2="276.5"/>
          <line class="cls-24" x1="866.9" y1="263.9" x2="866.9" y2="276.5"/>
          <line class="cls-24" x1="876.4" y1="333.3" x2="933.2" y2="333.3"/>
          <line class="cls-24" x1="876.4" y1="371.1" x2="933.2" y2="371.1"/>
          <line class="cls-24" x1="892.2" y1="402.7" x2="885.9" y2="440.5"/>
          <line class="cls-24" x1="917.4" y1="402.7" x2="923.7" y2="440.5"/>
          <line class="cls-24" x1="917.4" y1="402.7" x2="892.2" y2="402.7"/>
          <line class="cls-24" x1="942.6" y1="440.5" x2="942.6" y2="427.9"/>
          <line class="cls-24" x1="866.9" y1="440.5" x2="866.9" y2="427.9"/>
          <path class="cls-24" d="M917.4,352.2c0-7-5.7-12.6-12.6-12.6s-12.6,5.7-12.6,12.6,5.7,12.6,12.6,12.6,12.6-5.7,12.6-12.6"/>
          <path class="cls-24" d="M917.4,301.7c0-7-5.7-12.6-12.6-12.6s-12.6,5.7-12.6,12.6,5.7,12.6,12.6,12.6,12.6-5.7,12.6-12.6"/>
          <path class="cls-24" d="M942.6,276.5c0,20.9-17,37.9-37.9,37.9s-37.9-17-37.9-37.9"/>
          <path class="cls-24" d="M917.4,402.7c0-7-5.7-12.6-12.6-12.6s-12.6,5.7-12.6,12.6,5.7,12.6,12.6,12.6,12.6-5.7,12.6-12.6"/>
          <path class="cls-24" d="M866.9,427.9c0-20.9,17-37.9,37.9-37.9s37.9,17,37.9,37.9"/>
          <line class="cls-24" x1="952.1" y1="440.5" x2="952.1" y2="263.9"/>
          <line class="cls-24" x1="952.1" y1="263.9" x2="857.5" y2="263.9"/>
          <line class="cls-24" x1="857.5" y1="263.9" x2="857.5" y2="440.5"/>
          <line class="cls-24" x1="857.5" y1="440.5" x2="952.1" y2="440.5"/>
          <line class="cls-24" x1="876.4" y1="295.4" x2="933.2" y2="295.4"/>
          <line class="cls-24" x1="933.2" y1="295.4" x2="933.2" y2="409"/>
          <line class="cls-24" x1="933.2" y1="409" x2="876.4" y2="409"/>
          <line class="cls-24" x1="876.4" y1="409" x2="876.4" y2="295.4"/>
          <line class="cls-24" x1="851.1" y1="257.5" x2="958.4" y2="257.5"/>
          <line class="cls-24" x1="958.4" y1="257.5" x2="958.4" y2="446.8"/>
          <line class="cls-24" x1="958.4" y1="446.8" x2="851.1" y2="446.8"/>
          <line class="cls-24" x1="851.1" y1="446.8" x2="851.1" y2="257.5"/>
        </g>
        <polyline class="cls-25" points="1356.7 178.1 1364.9 .5 .2 0 .2 704.4 1329.2 704.4 1348.8 328"/>
        <polyline class="cls-5" points="1264.7 198.8 1264.1 208.6 1263 208.7 1262 209.3 1261.4 210.1 1261.1 211.3 1261.2 212.3 1261.7 213.3 1262.5 214.1 1263.6 214.3 1262.8 224 1255.7 210.7 1264.7 198.8"/>
        <polyline class="cls-5" points="1259.3 295.9 1260.2 286.1 1261.3 286 1262.2 285.5 1262.9 284.6 1263.2 283.5 1263.1 282.4 1262.6 281.4 1261.6 280.6 1260.7 280.3 1261.4 270.7 1268.5 283.9 1259.3 295.9"/>
        <text class="cls-17" transform="translate(1271.3 229.7) rotate(-86.9) scale(1.1 1) skewX(-.4)"><tspan x="0" y="0">ACCESO</tspan></text>
        <text class="cls-16" transform="translate(1257 297.6) rotate(-86.6) scale(1.1 1) skewX(-.4)"><tspan x="0" y="0">SALIDA</tspan></text>
      </g>
    </g>
  </g>
</svg>
        </div>
    </div>
</body>
</html>