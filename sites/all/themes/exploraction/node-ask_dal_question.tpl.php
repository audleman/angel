<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <h2>Question</h2>
    <?php print $node->field_question[0]['view']; ?>
    <p>
        <em>Submitted by <?php print $node->field_submitted_by[0]['view'];?></em>
    </p>
    <h2>Answer</h2>
    <?php print $node->field_answer[0]['view'];?>

    <?php //print_r($node);?>
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
