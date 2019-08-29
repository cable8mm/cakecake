<div class="cakecake form">
    <?php echo $this->Form->create('User', ['url' => 'install']);?>
    <fieldset>
        <legend><?php __('Add User');?>
        </legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirm', ['type' => 'password']);
    ?>
    </fieldset>
    <?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->html->link(__('List Users', true), ['action' => 'index']);?>
        </li>
    </ul>
</div>