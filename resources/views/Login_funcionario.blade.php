<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/js/funcionario.js')
</head>

   
  
<body class="bg-body-tertiary">
     <h3 class="text-center mt-5 fg-black">Bem-vindo admin!></h3>
    
<div class = "container mt-5"> 
    <div class="row justify-content-center  ">
        <div class="col-6  rounded borderp-3 shadow-sm mt-5 p-3" style="background-color: #e4e1e1;">
            <h3 class="text-center mt-5 fg-black">Login</h3>
            <div class="mb-3">
                <label for="cargo" class="form-label fg-black">Cargo</label>
                <input type="text" class="form-control form-control-sm bg-light" id="cargo" aria-describedby="cargoHelp" >
                <div id="cargo" class="form-text fg-black">Informe seu cargo</div>
            </div>
            <div class="mb-3">
                <label for="nif" class="form-label fg-black">NIF</label>
                <input type="text" class="form-control form-control-sm bg-light " id="nif">
            </div>
            
        
        <button type="button" class="btn-solid theme-primary" style="background-color: #007bff; border-color: #007bff;" id = "entrar">Entrar</button>
    
</body>
</html>