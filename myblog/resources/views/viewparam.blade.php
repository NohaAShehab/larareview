<html>
    <head></head>
    <body>
        <h1>welcome to param view </h1>
        <h1> {{$myname}} </h1>
        @foreach ($info as $key=>$val)
           <p> {{$key}} ... {{$val}} </p>
        @endforeach
        @for($i=0; $i<5; $i++)
            {{$i}}
        @endfor
    </body>
</html>
