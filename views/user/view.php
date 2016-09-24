<?php

/* @var $this yii\web\View */
use yii\widgets\Menu;
use yii\helpers\Html;
$this->title = $name;
?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <div class="panel-group category-products" id="accordian">
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                        <?php echo Menu::widget([
                                'items' => [
                                    ['label' => 'Мой профиль', 'url' => ["user/update?r&id=$id"]],
                                    ['label' => 'Друзья', 'url' => ["user/friends?r&id=$id"]],
                                    ['label' => 'Сообщения', 'url' => ["user/message?r&id=$id"]],
                                    ['label' => 'Статьи', 'url' => ["user/articles?r&id=$id"]],
                                    ['label' => 'Галлерея', 'url' => ["user/gallery?r&id=$id"]],
                                    ['label' => 'Настройки', 'url' => ["user/update?r&id=$id"]],
                                ],
                                'activeCssClass'=>'active',
                                'firstItemCssClass'=>'fist',
                                'lastItemCssClass' =>'last',
                            ]); ?>
                                        </h4>
                                    </div>
                                 </div> 
                            </div>
                        </div>
                    </div>

                      <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="view-product">
                                        <img src="/upload/images/user/<?= $id;?>.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information">
                                        <h2><?= $name;?></h2>
                                        <p>Email: <?= $email;?></p>
                                        <p>Дата рождения: <?= $birth_date;?></p>
                                        <span>
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Редактировать
                                            </button>
                                        </span>
                                        <p><b>Место работы:</b> <?= $work_place;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>О себе</h5>
                                    <p><?= $my_interests;?></p>
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Список статей</h5>
                                    <?php foreach ($articles as $article): ?>
                                    <p><a href="/article/view?r&id=<?= $article['id'];?>">
                                        <?= $article['title'];?></a></p>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>