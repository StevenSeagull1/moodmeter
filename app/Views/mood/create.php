<style>
  select {

background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;


margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;
}
option{
  border:solid 1px purple;
}
body{
  background-image: url("<?php "http://".$_SERVER['HTTP_HOST']?>/images/jumbo.jpg"); 
}
  </style>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/mood/create" method="post">
    <?= csrf_field() ?>

    <label for="datum">datum</label>
    <input type="date" name="datum" value="<?= set_value('datum') ?>">
    <br>

    <!-- <label for="mood">mood</label>
    <textarea name="mood" cols="45" rows="4"><?= set_value('mood') ?></textarea>
    <br> -->

    <label for="mood">kies een mood</label>
  <select id="mood" name="mood" size="4">
    <option <?= set_value('mood') ?>>blij</option>
    <option <?= set_value('mood') ?>>boos</option>
    <option <?= set_value('mood') ?>>hongerig</option>
    <option  <?= set_value('mood') ?>>verdrietig</option>
    <option  <?= set_value('mood') ?>>cool</option>
  </select>

  <img src="<?php echo base_url('images/ja.jpg'); ?>" alt=""/>

  <select id="plek" name="plek" size="4">
    <option <?= set_value('plek') ?>>thuis</option>
    <option <?= set_value('plek') ?>>school</option>
    <option <?= set_value('plek') ?>>werk</option>
    <option <?= set_value('plek') ?>>stage</option>
  </select>

    <input type="submit" name="submit" value="Create news item"><br>
    <img width="150px" height="150px" src='<?php "http://".$_SERVER['HTTP_HOST']?>/images/gus.jpg'>
</form>