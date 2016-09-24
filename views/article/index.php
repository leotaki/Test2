<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Последние статьи';
?>
<div class="container">
    <div class="row">
        <?php foreach ($articles as $article): ?>
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="article/view?r&id=<?= $article['id']; ?>">
                                <?= $article['title']; ?>
                            </a>
                        </h2>
                    </div>
                    <div class="meta">
                        <time class="published" datetime=""><?= $article['created_at']; ?></time>
                        <a href="/user/view?r&id=<?php echo $article['author_id'];?>" class="author"><span class="name">
                            <?= $article['author']['username'];?>
                            </span>
                        </a>
                    </div>
                </header>
                <div>
                    <img src="/upload/images/user/<?php echo $article['author_id'];?>.jpg" alt="" />
                </div>
                <p><?= $article['short_content'];?></p>
                <footer>
                    <ul class="actions">
                        <li><a href="view?r=id=<?= $article['id'];?>" class="button big">
                                Continue Reading
                            </a>
                        </li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#" class="icon fa-heart">28</a></li>
                        <li><a href="#" class="icon fa-comment">128</a></li>
                    </ul>
                </footer>
            </article>
        <?php endforeach; ?>
    </div>
</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>