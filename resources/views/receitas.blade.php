<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($receitas) == 0)
    <h3>Sem receitas</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome da Receita</th>
    </tr>  
      @foreach ($receitas as $receita)
      <tr>
          <td>{{$receita->descricao}}</td>
          <td>
            <form method="POST" action="/deletar_receita/{{$receita->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete receita">
            </form>
          </td>
        </tr>
      @endforeach
    
  </table>       
  @endif


</body>
</html>