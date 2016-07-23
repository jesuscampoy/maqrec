<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->Html->script(['/js/jquery/jquery', '/js/bootstrap/bootstrap', '/js/bootstrap/bootstrap-datepicker', '/js/bootstrap/locales/bootstrap-datepicker.es.min'], ['block' => 'scriptTop']);
$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->Html->css('/css/bootstrap/bootstrap-datepicker', ['block' => true]);
echo $this->fetch('scriptTop');

$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>

     <?php
        echo $this->Navbar->create('MaqRec', ['fixed' => "top",
            'responsive' => true,
            'static' => true,
            'inverse' => true,
            'fluid' => true]);
        echo $this->Navbar->beginMenu();
        echo $this->Navbar->link(__('Clients'), ['controller' => 'clients', 'action' => 'index']);
        echo $this->Navbar->link(__('Machines'), ['controller' => 'machines', 'action' => 'index']);
        echo $this->Navbar->link(__('Collections'), ['controller' => 'collections', 'action' => 'index']);
        echo $this->Navbar->link(__('Loans'), ['controller' => 'loans', 'action' => 'index']);
        echo $this->Navbar->link(__('Donations'), ['controller' => 'donations', 'action' => 'index']);
        echo $this->Navbar->endMenu();
        echo $this->Navbar->end();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><?= $this->request->controller; ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');
