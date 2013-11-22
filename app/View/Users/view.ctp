<h2> <?php echo $user['User']['first_name']; ?>  </h2>
<p> Username :  <?php echo $user['User']['username']; ?>    
    <br> Password : <?php echo $user['User']['password']; ?>  
    
 <br><br><br><?php echo $this->Html->link('Back',array('action'=>'userdata')); ?></p>