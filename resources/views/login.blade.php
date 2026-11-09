<!DOCTYPE html>
<html lang="pt-BR">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <script src="https://jquery.com" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    @vite('resources/js/login.js')

</head>
<body class="bg-inverse">
    
<div class = "container mt-5"> 
    <div class="row justify-content-center  ">
        <div class="col-6  rounded borderp-3 shadow-sm mt-5 p-3" style="background-color: #e4e1e1;">
            <h3 class="text-center mt-5 fg-black">Login</h3>
            <div class="mb-3">
                <label for="email" class="form-label fg-black">Email </label>
                <input type="email" class="form-control form-control-sm bg-inverse" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text fg-black">Informe seu email cadastrado</div>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label fg-black">Senha</label>
                <input type="password" class="form-control form-control-sm bg-inverse text-fg-black" id="senha">
            </div>
        
            <button type="button" class="btn-solid theme-primary" style="background-color: #007bff; border-color: #007bff;">Entrar</button>


        </div>
    </div>
        

        
    
    

</div>
    
</body>
</html>