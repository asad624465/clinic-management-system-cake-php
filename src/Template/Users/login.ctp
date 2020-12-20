<div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo $this->Form->create();?>
              <h1>Login Form</h1>
                <?php echo $this->Form->input('email',['class'=>'form-control','type'=>'email','placeholder'=>'Enter your email'])?>
                <?php echo $this->Form->input('password',['class'=>'form-control','type'=>'password','placeholder'=>'Enter your password'])?>
                <?php echo $this->Form->submit('login',['class'=>'btn btn-info btn-success'])?>
            <?php echo $this->Form->end();?>
          </section>
        </div>