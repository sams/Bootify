    <?php
          if(empty($brand))
            $brand = (!Configure::read('Bootify.brand')) ?
              array(
                    'display' => 'Bootify for Cake 2.0',
                    'url' => array(
                        'controller' => 'pages',
                        'action' => 'display',
                        'home'
                    )
              ) : $brand;
              
    ?><div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#"></a>
          <?php echo $this->Html->link($brand['display'], $brand['url'], array('class' => 'brand')); ?>
          <?php
          
          if(empty($nav)) $nav = Configure::read('Bootify.nav_bar');
          
          if(!empty($nav)):
            ?>
            <ul class="nav"><?php
              foreach($nav as $item => $data):
                $link = $this->Html->link($item, $data['url']);
                echo $this->Html->tag('li', $link, ((Router::url($data['url']) === $this->request->here) ? array('class' => 'active') : array()));
              endforeach;
            endif;
            ?>
          </ul><?php
            if(!empty($form)):
                echo $form;
            endif;
          ?>
        </div>
      </div>
    </div>