<div class="things t1">
    <img src="<?=$date['img']?>">
    <h1><?=$date['name']?></h1>
    <p>Caliber: <?=$date['caliber']?></p>
    <p>Rate of fire: <?=$date['fire']?> RPM</p>
    <p>Length: <?=$date['length']?> mm</p>
    <p>Weight: <?=$date['weight']?> kg</p>
    <p class="com">
        <?php if ($date['comment'] != "")
        {
            echo "Comment: ".$date['comment'];
        }?>
    </p>
    <h5 class="price"><?=$date['price']?> USD</h5>
    <form>
        <input type="button" name="submit" value="Order" class="buy" onclick="buy(<?=$val['tid']?>, 2);">
    </form>
</div>