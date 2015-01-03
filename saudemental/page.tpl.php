<header>    
  <div class="container">
    <div class="row">
      
      <div class="col-sm-3">
        <h1><a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>          
      </div>
      
      <div class="col-sm-9">      
        <div class="contatos">
          <span>41 3057-3306  |  sarasruckl@gmail.com</span>
        </div>                      

        <div id="menu-principal">                                  
                <nav class="navbar navbar-default" role="navigation">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navbar-ex1-collapse">         
                    <div class="menu-principal">
                      <?php print render($page['menu']); ?>     
                    </div>
                    </div>
                </nav>                                  
          </div><!-- menu principal -->

    </div>
  </div><!-- container -->
</header>
<!-- PAGE-HEADER-->


<?php if (($title)&&(!$is_front)): ?>
		<div class="titulo-pagina">
			<div class="container">
				<h1 class="title" id="page-title"><?php print $title; ?></h1>          
          	</div>
      	</div>
     <?php endif; ?>

<section id="principal">

	<div class="container">
		
		<div class="row">

			<div id="conteudo" class="col-sm-9">								
				 <?php if ($messages): ?>
		          <div id="messages">
		          	<div class="section clearfix">
		            <?php print $messages; ?>
		          </div></div> <!-- /.section, /#messages -->          
		          <?php endif; ?>
		          <?php if ($tabs): ?>
		            <div class="tabs">
		              <?php print render($tabs); ?>
		            </div>
		          <?php endif; ?>      		    
		          
		          <?php print render($page['content']); ?>		      	
	        </div> <!-- conteudo -->

			<div id="sidebar" class="col-sm-3">				
				<?php print render($page['sidebar']); ?>
			</div><!-- sidebar -->

		</div>	   
	</div><!-- container -->
</section><!-- principal -->
 
<!-- FOOTER -->
<footer id="footer">
    <div class="container"> 
          <p>      
          Avenida Getúlio Vargas, 3620, cj. 402 <br />
          Edifício GV Office Center<br />
          Curitiba/PR . 80240-041<br />
          41 3057-3306 | 41 9107-3006<br />
          sarasruckl@gmail.com      
          </p>
    </div>
</footer>
<!-- / FOOTER -->

</div>	 
 
</div> <!-- /container -->
<!--/ CONTENT -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/geral.js" type="text/javascript"></script>
