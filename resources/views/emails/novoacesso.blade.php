<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h4>Seja bem vindo(a) {{$nome}}</h4>
    <p>Você acabou de acessar o sistema utilizando o seu e-mail: {{$email}}</p>
    <p>Data/Hora do acesso: {{$datahora}}</p>
    <div>
      <img src="{{ $message->embed( public_path() . '/img/laravel.png')}}" width="10%" height="15%" alt="Laravel Logo">
    </div>
  </body>
</html>