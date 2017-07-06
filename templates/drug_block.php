<div class="things t1">
    <img src="<?=$date['img']?>">
    <h1><?=$date['name']?></h1>
    <p>Purity: <?=$date['purity']?> %</p>
    <p>Time keep: <?=$date['time']?> hour</p>
    <p>Weight: <?=$date['weight']?> mg</p>
    <p class="com">
        <?php if ($date['comment'] != "")
        {
            echo "Comment: ".$date['comment'];
        }?>
    </p>
    <h5 class="price"><?=$date['price']?> USD</h5>
    <form>
        <input type="button" name="submit" value="Order" class="buy" onclick="buy(<?=$val['tid']?>, 3);">
    </form>
</div>

