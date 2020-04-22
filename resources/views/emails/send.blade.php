<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('sendemail/send')}}" method="POST">
        {{ csrf_field() }}
        <h5>SUSISIEKIME</h5>
                        <p>Cia mums galite parasyti greita uzklausa iskilus klausimams:</p>
                        <div class="form-group">
                            <input type="email" name="title" class="form-control" placeholder="Jusu elektroninis pastas">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="body" placeholder="Jusu pranesimas.." rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">SIUSITI</button>
    </form>
</body>
</html>