<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <div class="card">
                <img src="{{URL::asset('/img/background.jpg')}}" class="card-img img-responsive" alt="Responsive image">
            
                    <div class="card-img-overlay">
                        
                        <h1 class="display-1 text-center  bg-white">Controle de Estoque</h1>                  
                    

                    
                        <h1 class="display-4 text-center bg-white">Bares:</h1>
                    

                        <form action="estoque" method="GET">
                                
                                <div class="text-center">
                                    @foreach ($bares as $bar)
                                        
                                            {{-- <input class="btn btn-primary" name="bar" type="submit" value="{{$bar->cod_bar}}"> --}}
                                            <a class="btn btn-primary" href="/estoque?bar={{$bar->cod_bar}}" role="button">{{$bar->coordenador}}</a>
                                        
                                    @endforeach
                                </div>
                                
                        </form>
                    </div>
            </div>
    </head>
</html>
