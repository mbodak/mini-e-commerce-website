<div class="things t1">
    <img src="<?=$date['img']?>">
    <h1><?=$date['name']?></h1>
    <p><?=$date['age']?></p>
    <p>Weight: <?=$date['weight']?> kg</p>
    <p>Skills: <?=$date['skills']?></p>
    <p>Status: <?=$date['status']?></p>
    <p>Level: <?=$date['level']?></p>
    <p>Forces: <?=$date['forces']?> month</p>
    <p class="com">
        <?php if ($date['comment'] != "")
        {
            echo "Comment: ".$date['comment'];
        }?>
    </p>
    <h5 class="price"><?=$date['price']?> USD</h5>
    <form>
        <input type="button" name="submit" value="Order" class="buy" onclick="buy(<?=$val['tid']?>, 1);">
    </form>
</div>