<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi vista</title>
</head>
<body>
	<h2>{{$saludo}}</h2>
	<form action="{{ route('ubigeo.import.excel') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button>Importar Ubigeo</button>
    </form>
    <form action="{{ route('comisarias.import.excel') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button>Importar Comisarias</button>
    </form>
</body>
</html>