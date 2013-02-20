<div class="alert alert-success"><strong>Permalink: </strong><a href="<?= base_url() ?>/index.php/<?=$location?>" rel="tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Only active for <?= 60 - date('i') ?> minutes" class="nohover"><?= base_url() ?>/index.php/<?=$location?></a></strong>
<div class="span12">
<div class="span6">
<h3>Input<hr /></h3>
<pre class="span12 prettyprint linenums"><?= htmlspecialchars($data) ?></pre>
</div>
<div class="span6">
<h3>Output<hr /></h3>
<pre class="span12 prettyprint language-html linenums"><?= htmlspecialchars($output) ?></pre>
</div>
</div>
