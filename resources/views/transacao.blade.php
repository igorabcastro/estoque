<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="card">
                <img src="{{URL::asset('/img/background.jpg')}}" class="card-img img-responsive" alt="Responsive image">
            <div class="card-img-overlay">
            
            
                <h1 class="display-1 text-center">Controle de Estoque</h1>
            
                <h1 class="display-4 text-center">Transação:</h1>
            
    
            
                <form action="/" method="GET">
                    <div class="form-group col-md-4 mx-auto">
                        <select class="form-control" id="selecaoOrigem">
                            <option selected>Origem</option>
                            @foreach ($bares as $bar)
                                <option value="{{$bar->cod_bar}}">{{$bar->coordenador}} {{$bar->nome}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="form-group col-md-4 mx-auto">
                        <select class="form-control" id="selecaoDestino">
                            <option selected>Destino</option>
                            @foreach ($bares as $bar)
                                <option value="{{$bar->cod_bar}}">{{$bar->coordenador}}  {{$bar->nome}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="form-group col-md-4 mx-auto">
                            <select class="form-control" id="selecaoProduto">
                                <option selected>Produto</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{$produto->cod_produto}}">{{$produto->nome}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                    <div class="col-md-4 mx-auto">
                        <input class="form-control" type="text" placeholder="Digite a quantidade" id="Quantidade">
                    </div>

                    <div class="form-check text-center">
                        <input class="form-check-input" type="checkbox" value="0" id="selecaoTipo">
                        <label class="form-check-label" for="defaultCheck1">
                        Unidade
                        </label>
                    </div>
                    <div class="form-check text-center">
                        <input class="form-check-input" type="checkbox" value="1" id="selecaoTipo">
                        <label class="form-check-label" for="defaultCheck1">
                        Caixa
                        </label>
                    </div>

                    <div class="text-center">
                            <button class="btn btn-primary" type="submit">Efetuar!</button>
                    </div>
                    
                </form>
            </div>            
            
    </head>
</html>
