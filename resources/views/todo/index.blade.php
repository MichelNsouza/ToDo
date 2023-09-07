<!doctype html>
<html lang="pt br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>ToDo List</title>
</head>

<body>

    <div class="container">
        <div class="col-md-12">
            <h1 class="mt-5 mb-5">Lista de Tarefas </h1>
                <ul class="list-group">
                    @foreach($listaDetarefas as $item)
                        <li class="list-group-item">
                            {{$item->descricao}} -
                            <a class="btn btn-sm btn-primary" href="/editar/{{$item->id}}">Editar</a> -
                            <a class="btn btn-sm btn-danger" href="/excluir/{{$item->id}}">Excluir</a>
                        </li>
                    @endforeach
                </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-2 mb-5">Cadastrar tarefa</h2>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" id=tarefa" name="tarefa" rows="3">{{$tarefa->descricao ?? ""}}</textarea>
                        <a  class="btn btn-primary mt-3" href="/">Novo</a>
                        <button class="btn btn-primary mt-3">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>
