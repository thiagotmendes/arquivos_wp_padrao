<div class="form-pesquisa">
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class>
  <div class="input-group">
      <input type="text" name="s" id="s" class="form-control" placeholder="Pesquisar...">
      <span class="input-group-btn">
        <button class="btn btn-bos" type="submit"><i class="fa fa-search"></i></button>
      </span>
  </div>
  </form>
</div>
<?php 
// Inserindo uma área de Widgets
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral') ) :?>
  <p>Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>      
<?php 
endif; 
?>