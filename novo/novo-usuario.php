<h1>Pré Matricula</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="matricula">
    <div class="mb-3">
        <label><font color="white">Nome</font></label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label><font color="white">Idade</font></label>
        <input type="text" name="idade" class="form-control">
    </div>
    <div class="mb-3">
        <label><font color="white">Genero</font></label>
        <input type="text" name="genero" class="form-control">
    </div>
    <div class="mb-3">
        <label><font color="white">Serie</font></label>
        <input type="text" name="serie" class="form-control">
    </div>
   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>