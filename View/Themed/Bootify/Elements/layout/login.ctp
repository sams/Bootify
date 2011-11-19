<?php
    if(!isset($this->Form)) $this->loadHelper('Form');
    echo $this->Form->create('User', array('url' => '/users/login'), array('class' => 'form-search navbar-form pull-right'));
    echo $this->Form->input('User.username', array('label' => false, 'class' => 'input-small', 'div' => false, 'placeholder' => 'username'));
    echo $this->Form->input('User.password', array('label' => false, 'class' => 'input-small', 'type' => 'password', 'div' => false, 'placeholder' => 'password'));
    echo $this->Form->input('User.submit', array('label' => false, 'class' => 'btn', 'type' => 'submit', 'div' => false, 'value' => 'sign in'));
    echo $this->Form->end();

?>