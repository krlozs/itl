<html><head></head><body class="  pace-done" id="portal-cliente"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><input type="hidden" name="security_code" id="security_code" value="a70a01f2eccfed4bf76248835f043fb0">




	<meta charset="utf-8">
	<title>Acceso Clientes</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="Mikrowisp" name="author">
	<link rel="shortcut icon" type="image/ico" href="../favicon.ico">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../css/default/app.min.css" rel="stylesheet" id="theme">
	<link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="../plugins/gritter/css/jquery.gritter.css" rel="stylesheet">
	<link href="../css/mikrowisp.css?v=6.62" rel="stylesheet">
	<link href="../css/extra.css?t=1745414432" rel="stylesheet">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../plugins/pace/pace.min.js"></script>
    <script>
	var timechar,interval,startTimer;
	</script>
	<!-- ================== END BASE JS ================== -->

  
<style type="text/css">
.alerta-error .gritter-bottom,.alerta-error .gritter-item,.alerta-error .gritter-top {
background: rgba(220, 51, 18, 0.9)!important;
}

.alerta-error .gritter-item p {
    color: #FFF;
    font-size: 11px;
}

.alerta-error .gritter-title {
    font-size: 13px!important;
	font-weight:bold !important;
}

.login-cover, .login-cover-bg, .login-cover-image {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    transition: background .2s linear;
    -webkit-animation: background_zoom 120s infinite linear;
    animation: background_zoom 120s infinite linear;
}



.login.login-v2 .login-header, .login.login-v2 .login-header .brand, .login.login-v2 .login-header .brand small {
    color: #fff;
}

	
.login.login-v2 .form-control {
    background: rgba(0,0,0,.5);
    border: 1px solid transparent;
    color: #fff;
}
	
@-webkit-keyframes background_zoom{
  0% {transform:scale(1) rotate(0deg)}
  50% {transform:scale(1.4) rotate(0.3deg)}
  100% {transform:scale(1) rotate(0deg)}
}

@keyframes background_zoom{
  0% {transform:scale(1) rotate(0deg)}
  50% {transform:scale(1.4) rotate(0.3deg)}
  100% {transform:scale(1) rotate(0deg)}
}
	
.form-control.form-control-lg, .form-control.input-lg {
    font-size: 14px;
}

.form-control {
    border: 1px solid #d3d8de;
    box-shadow: none;
    font-size: 12px;
    line-height: 1.42857143;
    height: 34px;
    padding: 6px 12px;
}
.form-control-lg, .input-group-lg>.form-control, .input-group-lg>.input-group-append>.btn, .input-group-lg>.input-group-append>.input-group-text, .input-group-lg>.input-group-prepend>.btn, .input-group-lg>.input-group-prepend>.input-group-text {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}
.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.form-control-lg{
    height: 46px;
    padding: 10px 16px;
    line-height: 1.3333333;
    border-radius: 6px;
}

.login-cover-bg {
    background: rgba(0, 0, 0, 0.39);
}

.btn.btn-lg, .input-group-lg>.input-group-append>.btn, .input-group-lg>.input-group-prepend>.btn {
    font-size: 16px;
    line-height: 24px;
    padding: 10px 16px;
}

.btn-block {
    display: block;
    width: 100%;
}

</style>
	



<div id="page-loader" class="fade show d-none"><span class="spinner"></span></div>
<div id="page-container" class="fade show">
<div class="login login-v1">
<div class="login-container">
<div class="login-header">
<div class="brand">
<img src="../admin/images/logo.png?t=1745414432" alt="" class="img-responsive" style="max-width:95%; height:auto">
</div>
</div>
<div class="login-body">
<div class="login-content">
<form method="post" action="/cliente/login?" id="loginForm" class="margin-bottom-0">
<input type="hidden" id="token" value="8b89abc793d413befbea162f0b0022eb">

<div class="form-group m-b-20">
<input type="text" id="login" class="form-control form-control-lg no inverse-mode" placeholder="Nº de usuario,Email o cédula" required="" readonly="" value="" autocomplete="off" autofocus="">
</div>
<div class="form-group m-b-20">
<input type="password" class="form-control form-control-lg no inverse-mode" id="password" placeholder="Contraseña" required="" autocomplete="off" value="">
</div>
<div class="checkbox checkbox-css m-b-20">
<input type="checkbox" id="remember_login"> 
<label for="remember_login">Recordar datos</label>
</div>
<div class="login-buttons">
<button type="submit" class="btn btn-success btn-block btn-lg">Ingresar</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../plugins/moment/moment.min.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../js/datatables.min.js?v=6.62"></script>
	<!--[if lt IE 9]>
		<script src="../admin/crossbrowserjs/html5shiv.js"></script>
		<script src="../admin/crossbrowserjs/respond.min.js"></script>
		<script src="../admin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../plugins/js-cookie/js.cookie.js"></script>
	
	<!-- ================== END BASE JS ================== -->

<script src="../plugins/gritter/js/jquery.gritter.min.js"></script>
<script src="../js/app.js?v=6.62"></script>
<script src="../js/theme/default.min.js"></script>
<script type="text/javascript" src="../js/mikrowisp.js?v=6.62"></script>
<script type="text/javascript" src="../js/extra.js?t=.1745414432"></script>

<script>
function startTimer(){

}
console.log('TU IP: 8.242.143.133');
	
//$(document).ready(function() {	
$('#loginForm').submit(function() {
        var l = $('#login').val();
        if (l.length < 1) {
            $('#login').focus();
            return false;
        }
        var p = $('#password').val();
        if (p.length < 2) {
            $('#password').focus();
            return false;
        }
	var remenber=false;
	if ($('#remember_login').is(':checked')) {
	remenber=true;
	}

        var tokenlogin = $('#security_code').val();
        var code = password_hash(p,tokenlogin);
		var tk=$('#token').val();
        var url = '/cliente/login';
        var return_url = '';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'login': l,
				'remenber':remenber,
				'token': tk,
                'code': code
            },
            dataType: 'json',
            success: function(data) {
                if (data.estado == 'error') {
                 alerta('error',data.salida);
				$('#token').val(data.token);
				$('#security_code').val(data.code); 
                } else if (data.estado == 'success') {
                    top.location.href = '/cliente/#ajax/dashboard';
				}
            }
        });
        return false;
    });

//});


  </script>
  
  
</body></html>