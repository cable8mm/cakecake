<style>
    #content DIV.centerBox {
        width: 400px;
        height: 400px;
        border: 1px solid #CBCBCB;
        padding: 10px 30px 10px 30px;
        margin: auto;
    }
</style>
<div class="centerBox">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->form->create('User', ['url' => 'login']) ?>
    <?php echo $this->form->input('User.username', ['class' => 'form-control']) ?>
    <?php echo $this->form->input('User.password', ['class' => 'form-control']) ?>
    <?php echo $this->form->submit([], ['class' => 'btn btn-primary btn-block btn-flat']) ?>
    <?php echo $this->form->end() ?>
</div>