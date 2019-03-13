<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
      rel="stylesheet"
      href="<?=base_url('public/css/materialize.min.css')?>"
      media="screen,projection"/>
    <link
      rel="stylesheet"
      href="<?=base_url('public/css/main.css')?>"
      media="screen,projection"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"
      media="screen,projection"/>
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css"
      media="screen,projection"/>
    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>      
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
    <script
      src="<?=base_url('public/js/materialize.js')?>"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#!"
          class="brand-logo">
          <img
            class="logo-menu"
            src="<?=base_url('public/img/logo.png')?>" alt="">
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
        <ul class="right hide-on-med-and-down">
          <li><a href="<?=base_url('index.php/painel')?>">HOME</a></li>
          <li><a href="<?=base_url('index.php/cliente')?>">CLIENTES</a></li>
          <!-- <li><a href="produtos.html">PRODUTOS</a></li>
          <li><a href="vendas.html">VENDAS</a></li>
          <li><a href="graficos.html">GRÁFICOS</a></li> -->
        </ul>

      </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
      <div class="row">
        <div class="col s12 text-center">
          <div class="card" style="background-color: #ee6e73">
              <div class="card-content white-text">
                <img style="margin-top: 10px; width: 200px" src="<?=base_url('public/img/logo.png')?>" alt="">
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col s12 text-center">
            <li><a href="<?=base_url('index.php/painel')?>">HOME</a></li>
            <li><a href="<?=base_url('index.php/cliente')?>">CLIENTES</a></li>
            <!-- <li><a href="produtos.html">PRODUTOS</a></li>
            <li><a href="vendas.html">VENDAS</a></li>
            <li><a href="graficos.html">GRÁFICOS</a></li> -->
          </div>
        </div>
    </ul>

      <div class="row">
        <div class="col s12 responsive-table">
          <table id="example" class="display striped">
            <thead>
              <tr>
                <th>NOME</th>
                <th>TELEFONE</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($clientes as $c):?>
                <tr>
                  <td><?=$c->nome?></td>
                  <td><?=$c->telefone?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="preloader-background">
        <div class="preloader-wrapper active">
          <div class="spinner-layer spinner-red-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div><div class="gap-patch">
              <div class="circle"></div>
            </div><div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>

      <a
        class="btn-floating btn-large waves-effect waves-light btn-add modal-trigger"
        href="#modal-add"
        style="background-color: #ee6e73">
        <i class="material-icons">add</i></a>

      <div id="modal-add" class="modal">
        <div class="modal-content">
          
          <form id="form-add" method="post">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text"><br>
            
            <label for="telefone">Telefone</label>
            <input id="telefone" name="telefone" type="text"><br>
            
            <label for="data-nascimento">Data Nascimento</label>
            <input id="data-nascimento" name="data_nascimento" type="text" class="datepicker"><br>

            <BR>
            <button class="btn waves-effect waves-light right" type="submit">SALVAR
              <i class="material-icons right">send</i>
            </button>
            <BR>
            <br>
          </form>
        </div>
      </div>

  </body>
</html>


<script>
  document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(800).fadeOut('slow');
    $('.preloader-wrapper')
      .delay(800)
      .fadeOut();
  });

  $(document).ready(function(){
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('#example').DataTable({
      "paging":   false,
      "ordering": false,
      "info":     false,
      "language": {
            "lengthMenu": "",
            "search" : "Buscar",
            "zeroRecords": "Nenhum cliente cadastrado!",
            "info": "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty": "Nada encontrado!",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
  });
</script>