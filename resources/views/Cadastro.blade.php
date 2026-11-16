<!DOCTYPE html>
<html lang="pt-BR">
<head>
  
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/js/funcionario.js')
</head>
<body class="bg-body-inverse">

    <div class="container">
        <div class="col-6 row">
            <h3 class="text-center mt-5 fg-black">Cadastro</h3>
                <div class="mb-3 col-6">
                    <label for="nome" class="form-label fg-black">Nome</label>
                    <input type="text" class="form-control form-control-sm bg-light" id="nome" >
               
                </div>
                <div class="mb-3 col-6">
                    <label for="cargo" class="form-label fg-black">Cargo</label>
                    <input type="text" class="form-control form-control-sm bg-light" id="cargo" >
                </div>
                <div class="mb-3 col-6">
                    <label for="nif" class="form-label fg-black">NIF</label>
                    <input type="number" class="form-control form-control-sm bg-light" id="nif" >
                </div>
                <div class="mb-3 col-6">
                    <label for="usuario" class="form-label">Usuario</label>
                    <select class="from-select form-select-sm" id="usuario">
                    @foreach($usuarios as $u)
                        <option value="{{ $u['id'] }}">{{ $u['nome'] }}</option>
                    @endforeach
                    </select>
                </div>
                                
                <button type="button" class="btn-btn-primary btn-sm-mt-2" id = "cadastrar">Cadastrar</button>

            </div>
        </div>
    </div>
                    
</body>
</html>