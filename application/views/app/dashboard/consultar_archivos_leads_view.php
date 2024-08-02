<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos del Lead</title>
    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/analytics.js"></script>
</head>
<body ng-controller="DashboardCtrl as dashboard">

    <div class="container">
        <div class="row mt-20">
            <div class="col s12">
                <h3 class="blue-txt futura-book">Archivos del Lead</h3>
            </div>
        </div>

        <div class="divider"></div>
        <div class="row mt-40">
            <div class="col s12">
                <ul class="collection">
                <li class="collection-item" ng-repeat="file in dashboard.leadFiles">
                        <div>
                       
                            <a ng-href="{{file.URL}}" target="_blank">{{file.URL}}</a>
                            <a href="#!" class="secondary-content">
                                <i class="material-icons red-text" ng-click="dashboard.deleteFile(file.idArchivo)">delete</i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <form ng-submit="dashboard.uploadFile()">
                    <div class="file-field input-field">
                        <div class="btn blue darken-4">
                            <span>Archivo</span>
                            <input type="file" id="newFile" name="newFile" ng-model="dashboard.newFile" onchange="angular.element(this).scope().dashboard.fileChanged(this.files)">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Subir nuevo archivo">
                        </div>
                    </div>
                    <button class="btn blue darken-4 waves-effect waves-light" type="submit">Subir
                        <i class="material-icons right">file_upload</i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
    <script type="text/javascript" src="media/assets/js/analytics.js"></script>
    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
</body>
</html>
