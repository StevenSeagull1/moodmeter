<head>
  <style>
    .mood{
        margin-top:5%;
        border:1px solid white;
        display:inline-grid;
        width:33%;
        background-image: url("<?php "http://".$_SERVER['HTTP_HOST']?>///llimages/background.jpg"); 
     background-size: cover;
    }
    h3{
        color:white;
    }
    p{
        color:white;
    }
    /*@keyframes bgcolor {
    0% {
        background-color: #45a3e5
    }

    30% {
        background-color: #66bf39
    }

    60% {
        background-color: #eb670f
    }

    90% {
        background-color: #f35
    }

    100% {
        background-color: #864cbf
    }
} */
.debug-view, .show-view{
    border:none !important;
}
#toolbarContainer{
    visibility:hidden;
}
.debug-view-path{
    visibility:hidden;
}
canvas{
    position:absolute;
    margin-left:90%;
}
body {
    -webkit-animation: bgcolor 20s infinite;
    animation: bgcolor 10s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
    background-image: url("<?php "http://".$_SERVER['HTTP_HOST']?>/images/walter.jpg");
    background-size: cover;
}
    </style>
</head>
<h2>uw mood</h2><canvas id="myCanvas" width="175" height="150" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canesfsefvas tag.</canvas>
 
<?php if (! empty($mood) && is_array($mood)): ?>

    <?php foreach ($mood as $mood_item): ?>

    <div class='mood'>
        <h3><?= esc($mood_item['user']) ?></h3>

    <div class="main">
        <h3> u was <?= esc($mood_item['mood']) ?> </h3>
    </div>
    
    <h3> op <?= esc($mood_item['plek']) ?></h3>

        <h3><?= esc($mood_item['datum']) ?></h3>

       
        
        <img height="200px" width="150px" src='<?php "http://".$_SERVER['HTTP_HOST']?>/images/<?php echo ($mood_item['mood']);?>.jpg'>
        
    </div>
    <?php endforeach ?>
   
<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(100, 75, 50, 0, .25* Math.PI);
ctx.lineTo(100,75);
ctx.arc(100, 75, 50, 0, -.25* Math.PI);
ctx.lineTo(100,75);
ctx.stroke();
</script>
<?php else: ?>

    <h3>No Mood</h3>

    <p>Unable to find any mood for you.</p>

<?php endif ?>