<?php

/*

type: layout

name: Jumbotron

description: Layout

position: 2

*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron allow-drop">
                    <h1> Hello, world! </h1>
                    <p> This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a
                        starting
                        point to create something more unique. </p>
                    <p><a class="btn btn-primary btn-large" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>