<?php
include"./header.php";
?>

<?php 
if (!empty($_POST)){
    var_dump($_POST['nome']);

    echo "<div class='alert alert-success' role='alert'>
    <b>REGISTRO SALVO COM SUCESSO!</b> <br>
        Nome: {$_POST['nome']} <br>
        Email: {$_POST['email']} <br>
        Mensagem: {$_POST['mensagem']} 

  </div>";

}

?>

<div class="row">
    <div class="col">
        <h2> Contatos </h2>
       <form action="contato.php" method="POST">
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome </label>
            <input type="text" class="form-control" name="nome" placeholder="digite aqui seu nome">
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" placeholder="digite aqui seu email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        
    

       </form>
    </div>
</div>

<?php
include"./footer.php";
?>
