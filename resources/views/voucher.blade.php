<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voucher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <hearder>
        <div style="text-align: center;">
            <img src="{{asset('dist/img/bmsd.svg')}}" alt="logoBluemall" class="" style="width: 60%;">
        </div>
    </hearder>
    <div class="container-fluid">
        <div style="text-align: center;">
            <h4>** ORIGINAL **</h4>

            <p><b>ID de Factura: </b>{{$factura->id}}</p>
            <p><b>Número de Factura: </b>{{$factura->invoiceNumber}}</p>
            <P><b>Números de Tickets Generados: </b>{{count($factura->tickets)}}</P>
            <br>
            <p><b>Cliente: </b>{{$factura->users->name}} {{$factura->users->lastName}}</p>
            <p><b>{{$factura->users->documentType}}: </b>{{$factura->users->documentNumber}}</p>
            <p><b>Promoción: </b>{{$factura->raffle->name}}</p>
            <br>
            <small>Muchas gracias por participar en la plataforma “All fod Dad” de BlueMall Santo Domingo. Puedes verificar tus facturas registradas y tickets generado en tu perfil y más detalles sobre el premio en las bases del concurso en <a href="https://www.bluemall.com.do" target="_blank">www.bluemall.com.do</a></small>

        </div>
        <br>
        <div style="text-align: center;">
            <p>Patrocinadores</p>
            <p>{{$factura->raffle->voucherMessage}}</p>
        </div>
        <footer style="text-align: center; background-color: #0055B8; padding: 20px;">
            <small style="color: white;">Promoción valida desde <b>{{$factura->raffle->start}}</b> hasta el <b>{{$factura->raffle->end}}</b></small>
        </footer>
    </div>

</body>
</html>
