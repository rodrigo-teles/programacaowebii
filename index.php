<?php
/* Importa o cabeçalho */
require('head.php');
?>
<title>EEEP Doutor José Iran Costa - Dashboard</title>
</head>
<body>
<?php
/* Importa o Rodapé */
require('menu-topo.php');
?>

<div class="wrapper">
  <div class="formulario">
    <?php require('formulario.php');?>
  </div>
  <?php
  require('sidebar.php');
  ?>
  <div class="content">
  <div id="main">
  </div>
  </div>

</div>

<?php
require('scripts.php');
?>
</body>
</html>