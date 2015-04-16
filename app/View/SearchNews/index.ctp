<head>

    <?php
    echo $this->html->script('get-feed');
    echo $this->fetch('script');
    ?>

</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Search News</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-newspaper-o fa-fw"></i>
            List of News
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Search Links</h2>

                    <!--                    <form method="get" action="index.ctp">-->
                    <?php echo $this->Form->create('SearchNews'); ?>
                    <?php
                    echo $this->Form->input('select_rss', array(
                        'id' => 'select_rss',
                        'type' => 'select',
                        'options' => array('DailyNews' => 'Daily News - Popular News', 'Sanook' => 'Sanook Football News', 'Android' => 'Android Central'),
                        'style' => 'margin:10px;',
                        'controller' => 'searchnews',
                        'action' => 'news',
                        'empty' => 'Choose a rss'

                    ));

                    ?>
                    <!--                    <select id="select_rss" onchange="getFeed()">-->
                    <!--                        <option value>Select an RSS-feed:</option>-->
                    <!--                        <option value="DailyNews">DailyNews - Popular News</option>-->
                    <!--                        <option value="Sanook">Sanook Football News</option>-->
                    <!--                        <option value="Android">Android Central</option>-->
                    <!---->
                    <!--                    </select>-->
                    <?php echo $this->Form->end(); ?>
                    <!--                    </form>-->
                    <br>

                    <div id="rssOutput">
                        <?php
                        foreach ($data as $temp_item) {
                            echo "<h3><a href='" . $temp_item['link'] . "'>" . $temp_item['title'] . "</a>

                        </h3>" . $temp_item['pubDate'] . "<p>" . $temp_item['description'] . "</p>";

                            echo "</div><br/>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>


