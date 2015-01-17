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

<div id="principal">

<!--  SECTION-1 -->  
<section id="topo-home">
    <div class="container">           
          
          
             
         
        
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-1 -->
<!--  SECTION-2 -->  
<section id="sobre">
    <div class="container">        
            
                <blockquote >Nulla ullamcorper tincidunt dui at laoreet. Duis scelerisque dignissim lorem, 
                in sagittis quam luctus convallis.  Fusce porttitor dui ultricies placerat adipiscing, 
                quam tortor ultricies sapien gravida molestie dolor nisl quis leo. </blockquote >                      
            
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-2 -->
<!--  SECTION-3 -->  
<section id="especialidades">
    <div class="container"> 
         <!-- tabs left -->
          <div class="tabbable tabs-left">           
            
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#a" data-toggle="tab">Especialidade 1</a></li>
                  <li ><a href="#b" data-toggle="tab">Especialidade 2</a></li>
                  <li><a href="#c" data-toggle="tab">Especialidade 3</a></li>
                </ul>             

                <div class="tab-content">
                 <div class="tab-pane active" id="a">
                    <h3>Especialidade 1</h3>
                    <p>Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</p>
                    <p>Maecenas etos sit amet, consectetur adipiscing elit. Terminal volutpat rutrum metro amet sollicitudin interdum. Suspendisse pulvinar, velit etos pharetra interdum, ante tellus gravida mollis tellus neque vitae elit. Mauris adipiscing mauris fringilla turpis interdum pulvinar nisi malesuada, consectetur adipiscing libero est cuprum.</p>
                    <p>Nulla ullamcorper tincidunt dui at laoreet. Duis scelerisque dignissim lorem, in sagittis quam luctus convallis. Fusce porttitor dui ultricies placerat adipiscing, quam tortor ultricies sapien gravida molestie dolor nisl quis leo. Vestibulum arcu leo, ornare in rutrum elite ultrices est justo nunc nulla gravida.</p>                    
                  </div>
                 <div class="tab-pane" id="b">
                    <h3>Especialidade 2</h3>                    
                    <p>Maecenas etos sit amet, consectetur adipiscing elit. Terminal volutpat rutrum metro amet sollicitudin interdum. Suspendisse pulvinar, velit etos pharetra interdum, ante tellus gravida mollis tellus neque vitae elit. Mauris adipiscing mauris fringilla turpis interdum pulvinar nisi malesuada, consectetur adipiscing libero est cuprum.</p>
                    <p>Nulla ullamcorper tincidunt dui at laoreet. Duis scelerisque dignissim lorem, in sagittis quam luctus convallis. Fusce porttitor dui ultricies placerat adipiscing, quam tortor ultricies sapien gravida molestie dolor nisl quis leo. Vestibulum arcu leo, ornare in rutrum elite ultrices est justo nunc nulla gravida.</p>
                    <p>Donec elementum, turpis eget rutrum rutrum, sem quam viverra ligula, ac tincidunt ligula leo metro cuprum. Vivamus felis elit, euismod vitae condimentum non, commodo adipiscing purus. Integer vitae molestie leo. Phasellus eget neque eget lectus suscipit varius in amet tortor est donec posuere euismod.</p>
                  </div>
                 <div class="tab-pane" id="c">
                    <h3>Especialidade 3</h3>
                    <p>Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.</p>
                    <p>Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</p>                    
                    <p>Donec elementum, turpis eget rutrum rutrum, sem quam viverra ligula, ac tincidunt ligula leo metro cuprum. Vivamus felis elit, euismod vitae condimentum non, commodo adipiscing purus. Integer vitae molestie leo. Phasellus eget neque eget lectus suscipit varius in amet tortor est donec posuere euismod.</p>
                  </div>
                </div>

          </div><!-- /tabs -->
        
     </div><!-- / CONTAINER-->
</section>


<!-- / SECTION-4 -->
<section id="extras">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Blog</h3>        
        <?php print views_embed_view('blog_home', 'block_1'); ?>
      </div>
      <div class="col-sm-6">
        <h3>Dra. Med. Sarah Ruckl</h3>
        <div class="curriculum">          
          <div class="foto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/sarah_ruckl.png" class="img-circle im-responsive" /></div>
          <div class="info">
            <p>A Clínica de Saúde Mental da Mulher é coordenada pela <strong>Dra Sarah Rückl</strong>, médica psiquiatra, especialista em Psiquiatria pela Associação Brasileira de Psiquiatria e Doutora em Psiquiatria pela Universidade de Heidelberg, Alemanha.</p>
          </div>
        </div>
      </div>
    </div>
        
  </div>
</section>
<!--  SECTION-4 -->  


</div><!-- principal -->
 
      
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
</div><!-- wrapper -->

<!-- / FOOTER -->

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>

<script src="<?php echo $directory; ?>/js/geral.js" type="text/javascript"></script>

