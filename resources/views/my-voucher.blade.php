<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://www.novelsol.com/wp-content/uploads/2014/12/flaticon-grad.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">



    <link rel="stylesheet" href="{{ URL::asset('css/style-index.css') }}">
<title>Music School</title>
</head>
<body>
    @include('layouts._navbar')
    <div class="container">
        <div class="row">
            <div  style="background-color: green;margin:0 auto; margin-top: 7rem;" >
                <h1 id="my-course" style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;"> My Voucher</h1>
            </div>
        </div>
        <hr>

        <table class="table table-striped table-bordered" style="text-align: center;">
          <tr>
            <th style="text-align: center;">Discount Percent</th>
            <th style="text-align: center;">Code</th>
          </tr>
          @if(!$vouchers->isEmpty())
          @foreach ($vouchers as $voucher)  
          <tr>
            <td>{{ $voucher->percent }}</td>
            <td>{{ $voucher->voucherCode }}</td>
          </tr>
          @endforeach
          @endif
        </table>

    </div>
    @include('layouts._popup-checkin')
    @include('layouts._footer')





</body>
</html>
