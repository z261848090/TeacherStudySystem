<?php
include_once 'template/index_header.php'; 
?>
<div class="container">
    <div class="jumbotron">
        <h1 class = "text-center">配置环境</h1>
        <div class="bs-docs-example">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                    <li class="" data-slide-to="1" data-target="#myCarousel"></li>
                    <li class="active" data-slide-to="2" data-target="#myCarousel"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img class="text-center" alt="" src="../image/html5.png">
                        <div class="carousel-caption">
                            <h4>Html5 简介</h4>
                            <p>HTML5是用于取代1999年所制定的 HTML 4.01 和 XHTML 1.0 标准的 HTML 标准版本，现在仍处于发展阶段，但大部分浏览器已经支持某些 HTML5 技术。HTML 5有两大特点：首先，强化了 Web 网页的表现性能。其次，追加了本地数据库等 Web 应用的功能。广义论及HTML5时，实际指的是包括HTML、CSS和JavaScript在内的一套技术组合。它希望能够减少浏览器对于需要插件的丰富性网络应用服务（plug-in-based rich internet application，RIA)，如Adobe Flash、Microsoft Silverlight，与Oracle JavaFX的需求，并且提供更多能有效增强网络应用的标准集。</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="text-center" alt="" src="../image/php.jpg">
                        <div class="carousel-caption">
                            <h4>PHP 简介</h4>
                            <p>PHP，是英文超文本预处理语言Hypertext Preprocessor的缩写。PHP 是一种 HTML 内嵌式的语言，是一种在服务器端执行的嵌入HTML文档的脚本语言，语言的风格有类似于C语言，被广泛地运用。</p>
                        </div>
                    </div>
                      <div class="item">
                        <img class="text-center" alt="" src="../image/win7.png">
                        <div class="carousel-caption">
                            <h4>win7 简介</h4>
                            <p>开发操作系统支持位32位win7操作系统，2G内存，2.20GHz主屏</p>
                        </div>
                    </div>
                    <div class="item active">
                        <img alt="" src="../image/mysql.jpg">
                        <div class="carousel-caption">
                            <h4>MySQL 简介</h4>
                            <p>MySQL是一个关系型数据库管理系统，由瑞典MySQL AB公司开发，目前属于Oracle公司。MySQL是一种关联数据库管理系统，关联数据库将数据保存在不同的表中，而不是将所有数据放在一个大仓库内，这样就增加了速度并提高了灵活性。MySQL的SQL语言是用于访问数据库的最常用标准化语言。MySQL软件采用了双授权政策（本词条“授权政策”），它分为社区版和商业版，由于其体积小、速度快、总体拥有成本低，尤其是开放源码这一特点，一般中小型网站的开发都选择MySQL作为网站数据库。由于其社区版的性能卓越，搭配PHP和Apache可组成良好的开发环境。</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#myCarousel">‹</a>
                <a class="right carousel-control" data-slide="next" href="#myCarousel">›</a>
            </div>
        </div>
    </div>
<?php 
include_once 'template/index_footer.php';
?>