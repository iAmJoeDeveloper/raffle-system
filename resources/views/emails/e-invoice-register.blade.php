<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura Registrada</title>
</head>
<body>
<h1>Factura Registrada</h1>

<p>Su factura número {{$invoice->invoiceNumber}} ha sido registrada con éxito en nuestro sistema y ha generado {{$tickets}} tickets</p>
<p>para ver sus tickets generados vaya a la sección <b>Tickets Generados</b> en nuestra plataforma</p>

<p>Muchas gracias por participar en la plataforma “All fod Dad” de BlueMall Santo Domingo. Puedes verificar tus facturas registradas y tickets generado en tu perfil y más detalles sobre el premio en las bases del concurso en <a href="https://www.bluemall.com.do" target="_blank">www.bluemall.com.do</a></p>
<footer style="text-align: center; background-color: #0055B8; padding: 20px;">
    <small style="color: white;"><b>Bluemall Santo Domingo</b></small>
</footer>
</body>
</html>