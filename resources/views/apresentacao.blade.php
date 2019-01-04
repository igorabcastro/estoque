<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="card">
                <img src="{{URL::asset('/img/background.jpg')}}" class="card-img img-responsive" >
            <div class="card-img-overlay">
                <h1 class="display-1 text-center">Controle de Estoque</h1>
            
                <h1 class="display-4 text-center">Bares:</h1>
            
    
            
                <form action="transacao" method="GET">
                    
                    <div class="text-center">
                        @foreach ($bares as $bar)
                            <a class="btn btn-primary" href="/estoque?bar={{$bar->cod_bar}}" role="button">{{$bar->coordenador}}</a>
                        @endforeach
                    </div>
                        
                    <div class="text-center">
                        <h1 class="display-6">Transação:</h1>           
                        <button class="btn btn-success btn-lg" type="submit" value="">Transação</button>
                    </div>
                </form>
            

                <div>
                    <table class="table-sm table-hover table-bordered table-dark" align="center">
                        <tbody>
                            {{$i=0}}
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td scope="row">{{$produto->nome}}</td>
                                    <td scope="row">{{$estoque[$i]->quantidade}}</td>                                    
                                </tr>
                                {{$i++}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            
    </head>
</html>
