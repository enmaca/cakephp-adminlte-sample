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
echo $this->Form->create('TwoSideSelect');

$selected_options = array(
    'Items Group 1' => array(
        1 => 'Item 1',
        2 => 'Item 2',
        3 => 'Item 3',
        4 => 'Item 4',
        5 => 'Item 5'
    ),
    6 => 'Item 6',
    7 => 'Item 7',
    'Items Group 2' => array(
        8 => 'Item 8',
        9 => 'Item 9'
    )
);

$current_value = array(
    3,
    6,
    8
);

$two_side_html = $this->Form->input('multiselect', array(
    'type' => 'select',
    'value' => $current_value,
    'options' => $selected_options,
    'label' => __('MultiSelect Box'),
    'two-side' => array(
        'search' => array(
            'left' => '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            'right' => '<input type="text" name="q" class="form-control" placeholder="Search..." />'
        )
    ),
    'fireSearch' => 'function(value) { return value . length > 3;}'
));
FB::info($two_side_html, __METHOD__);

print $two_side_html;
$this->Html->contentBlockEnd();
$this->Html->sectionEnd();