<?php 
/**
 * Include if exists CSS Styles
 */
if (file_exists(dirname(__FILE__) . '/css/' . basename(__FILE__, 'ctp') . 'css')) {
    $this->start('cssHead');
    include_once dirname(__FILE__) . '/css/' . basename(__FILE__, 'ctp') . 'css';
    $this->end();
}
/**
 * Include if exists JS Code
 */
if (file_exists(dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js')) {
    $this->start('scriptBody');
    include_once dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js';
    $this->end();
}
$this->Html->controlSideBarStart();
?>
Control Side Bar
<?php
$this->Html->controlSideBarEnd();
$this->Html->sectionStart(array(
    'class' => 'content-header'
));
?>
<h1>
	Fixed Layout <small>Blank example to the fixed layout</small>
</h1>
<?php
if (defined('AdminLTE_Breadcrumb'))
    echo AdminLTE_Breadcrumb;

$this->Html->sectionEnd();

$this->Html->sectionStart(array(
    'class' => 'content'
));

echo $this->Flash->render();

$this->Html->contentBlockStart(array(
    'header' => array(
        'title' => 'Title',
        'icon' => 'th',
        'border' => true
    ),
    'box-tools' => array(
        'label' => 'test',
        'collapsable' => true,
        'remove' => true
    ),
    // 'variant' => 'info',
    'footer' => 'Footer'
));

echo $this->Form->inputRow($this->Form->inputButtonBefore('field_id', array(
    "label" => 'Label',
    'button' => array(
        'label' => _('ButtonLabel'),
        'id' => 'buttonId'
    )
)));

echo $this->Form->inputRow($this->Form->input('field_id', array(
    'data-role' => 'tagsinput',
    'label' => __('Label')
)));

echo $this->Form->inputRow($this->Form->input('field_radio', array(
    'label' => __('Radio Label:'),
    'options' => array(
        'option1' => __('Option 1'),
        'option2' => __('Option 2')
    ),
    'type' => 'radio'
)));


$this->Html->contentBlockEnd();
$this->Html->sectionEnd();