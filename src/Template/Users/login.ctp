<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email',['class'      => 'form-control',
					            'placeholder'=> 'Username']) ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>