<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'GPL';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
<div class="row">
    <div class="columns large-6">
        <ul>
            <li class="bullet"><?= $this->Html->link('Tournaments','/tournaments',['class' => 'button']); ?> </li>
            <li class="bullet"><?= $this->Html->link('Matches','/matches',['class' => 'button']); ?> </li>
            <li class="bullet"><?= $this->Html->link('Players','/players',['class' => 'button']); ?> </li>
            <li class="bullet"><?= $this->Html->link('Countries','/countries',['class' => 'button']); ?> </li>
            <li class="bullet"><?= $this->Html->link('Club-States','/club-states',['class' => 'button']); ?> </li>
            <li class="bullet"><?= $this->Html->link('Teams','/teams',['class' => 'button']); ?> </li>
        </ul>
    </div>
</div>
</body>
</html>
