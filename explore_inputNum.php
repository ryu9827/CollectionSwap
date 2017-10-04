<?php
	include_once 'includes/header.php';	
?>
<!--<script>-->
<!--    slimbox.option({-->
<!--        overlayOpacity: 0.6,-->
<!--        resizeEasing: "easeOutElastic",-->
<!--        captionAnimationDuration: 1,-->
<!--        counterText: "Image {x} sur {y}",-->
<!--        closeKeys: [27, 70],-->
<!--        nextKeys: [39, 83]-->
<!--    })-->
<!--</script>-->
<script>
    function GetQueryString(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }

//    if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry/i.test(navigator.userAgent)) {
//        jQuery(function ($) {
            $(document).ready(function () {
                var set_id = GetQueryString("set_id");

                $.getJSON('includes/search.php?set_id=' + set_id, function (data) {
                    var html = '';
                    $.each(data, function (i, item) {
                        html = cards(item);
                        $('#title').after(html);
                    });
                });
            });
//        });

        function cards(item) {
            var html = '';
            html +=
                '<div class="col-md-3">' +
                '<div class="thumbnail">' +
                '<a href="' + item.card_img + '" rel="lightbox">' +
                '<img src="' + item.card_img + '" alt="">' +
                '</a>' +
                '<ul class="list-group">' +
                '<li class="list-group-item list-group-item-info"> Card Name: ' + item.card_name + ' </li>' +
                '<li class="list-group-item list-group-item-success">' + item.extranum + ' spares </li>' +
                '<li class="list-group-item list-group-item-warning"> ' + item.missnum + ' missings</li>' +
                '</ul>' +
                '</div>' +
                '</div>'
            return html;
        }
//    }

    $("a[rel^='lightbox']").slimbox({/* Put custom options here */}, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
//注:可以是item.address,也可以是item['address'] 
//firefox报 json文件中 “语法错误 [”,单能加载数据 //ie chrome 无法加载数据 
</script> 

<!-- <script type="text/javascript">
function sendSearch(){
	var input = document.getElementById('search').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/bestmatch2.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('search='+input);
};
</script> -->
<?php
include 'includes/dbh.inc.php';
$set_id = @$_GET['set_id'];
$card_id = @$_GET['name'];

//$card_id = mysqli_real_escape_string($conn, $_POST['card_id']);
//$card_id = 'a001';

$num1 = search('cards_status', $card_id,1,$set_id);//card for missing
$num2 = search('cards_status', $card_id,2,$set_id);//card for extra
$num3 = search('charity_card', $card_id,3,$set_id);//card for charity
function search($table,$card_name, $status,$set_id){

    global $conn;
    $sql = "SELECT * FROM $table WHERE card_name = '$card_name' AND set_id = '$set_id' AND card_status = '$status'";
    if (mysqli_query($conn, $sql)){
        $res = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($res);
        return $num;
    } else{
        return $num=0;

    }
}
?>

	<div style="text-align: center">
		<h2>Collection list</h2>
	</div><br/>

<!--    <p class="clearfix">-->
<!--        <a href="images/cardImages/card-1.png" rel="lightbox" title="333" class="thumbnail pull-left">-->
<!--            <img src="images/cardImages/card-1.png" rel="lightbox"  alt="123"/>-->
<!--        </a>-->
<!--    </p>-->
<!--<p class="clearfix">-->
<!--    <a href="images/cardImages/card-6.png" rel="lightbox" title="The Gilles, one of the Belgian cultural traditions. Here at Barvaux." class="thumbnail pull-left">-->
<!--        <img src="images/cardImages/card-6.png"  alt="Gilles at Barvaux">-->
<!--    </a>-->
<!--</p>-->

<div id="title"></div>



	
	
	<div style="height: 200px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>