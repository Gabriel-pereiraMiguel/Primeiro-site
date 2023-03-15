<!DOCTYPE html>
<html lang="pt-BR">
  <head>
   
  <title>Cadastro</title>
  <link href="estilo.css" rel="stylesheet"> 
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
  </head>
  <body>
	  <header>
 	
		 
		  <div>
	 
		  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="logo"> <img src="logo.jfif" width="100px"> </div> <a class="navbar-brand" href="index.php"><font color="#5a0e34">Home</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?page=novo"><font color="#5a0e34">Pré Matricula</font></a><span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="uni.html"><font color="#5a0e34">Unidades</font></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="?page=listar"><font color="#5a0e34">Listagem</font></a>
        </li>
    </ul>
  
		  
		  </div>
<div><H1><font color="#5a0e34">Jardim Escola Vovó Mercedes</font></H1></div>
		  </nav>
</div>


              

			
                  
			

</div></div>
</a></a></a>
</header>
<div class="pai">

<main>
<div class="container">
    <div class="row">
        <div class="col mt-5"> 
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="DSCN1758.jpg" alt="First slide" style=" border-radius: 30px 30px 30px 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="DSCN1761.jpg" alt="Second slide" style=" border-radius: 30px 30px 30px 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="DSCN1784.jpg" alt="Third slide" style=" border-radius: 30px 30px 30px 30px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
    include("config.php");
    
    switch(@$_REQUEST["page"]){
        case "novo";
        include("novo-usuario.php");
        break;
        case "listar":
            include("listar-usuario.php");
            break;
        case "salvar":
            include("salvar-usuario.php");
            break;
            default:
           // print "<h1>Bem vindo</h1>";
    }
?>
        </div>
</div>
</div>
  </div>

              
                  
               
            
            
            <div class="cxpai">
                
				<section id="section">     
                  <aside class="aside">
                  	<div class="container">
					  <h5>Fundaram a escola em 1988. E ficaram até os atuais diretores assumirem em 2018, devido ao falecimento do antigo diretor Marcos, a escola ficou nas mãos só da Diretora Ieda até 2018.
					  <img src="fund.jpg" width="400px" height="450px" style=" border-radius: 30px 30px 30px 30px; display: block;"></h5></div>
                  </aside></section>
					   <section id="section">     
                  <aside class="aside">
					 <div class="responsivo"> <h5>Assumiram a escola em 2018. Conseguiram passar pela pandemia em conjunto com as professoras e estão na direção até hoje.
                  <img src="DSCN1773.jpg" width="360px" style=" border-radius: 30px 30px 30px 30px; float: left; display: flex;justify-content: flex-end;"></h5></div>
					  </div>
					  
		
			</aside>
                  
                          
              </section>
</div>
  </main>
  </div>
<footer>
				<div class="footer">
			<div class="caixa3"></div>
			<div class="caixa4"></div>
			<div class="caixa5"></div>
			
		
					<div class="padrasto">
				  <a href="https://www.facebook.com/profile.php?id=100047287975864"><img src="iconface.png" >
                  <a href="https://www.instagram.com/jevm.rj/"><img src="iconinsta.png">
                  <a href="#"><img src="iconwpp.png">
					<img src="logo.jfif">
						</div></div>	

				

</footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>