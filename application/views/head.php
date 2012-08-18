<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>        
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/adminia.css" rel="stylesheet"> 
    <link href="<?= base_url() ?>assets/css/adminia-responsive.css" rel="stylesheet"> 
    <link href="<?= base_url() ?>assets/css/pages/login.css" rel="stylesheet"> 
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function initialize() {            
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    $("#latitude").val(position.coords.latitude);
                    $("#longitude").val(position.coords.longitude);    
                }, function() {
                    handleNoGeolocation(true);
                });
            } else {          
                handleNoGeolocation(false);
            }
        }

        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
                alert('Error: The Geolocation Service Failed.');
            } else {
                alert('Error: Your Browser Does Not Support GeoLocation.');
            }        
        }            
    </script>
</head>
