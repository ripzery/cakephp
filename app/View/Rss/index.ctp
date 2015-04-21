<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Search News</h1>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of News
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Search Links</h2>

                        <form>
                            <select onchange="showRSS(this.value)">
                                <option value="">Select an RSS-feed:</option>
                                <option value="googlenews">Google News</option>
                                <option value="sanooknews">Sanook News</option>
                                <option value="blognonenews">Blognone News</option>
                            </select>
                        </form>
                        <br>

                        <div id="rssOutput"></div>


                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->

                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<script type="text/javascript">
    function showRSS(str) {
        console.log(str);
        if (str.length == 0) {
            document.getElementById("rssOutput").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rssOutput").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "/assignment2/rss/" + str, true);
        xmlhttp.send();
    }
</script>