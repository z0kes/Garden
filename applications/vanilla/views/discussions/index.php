<?php if (!defined('APPLICATION')) exit();
include($this->FetchViewLocation('helper_functions', 'discussions', 'vanilla'));

WriteFilterTabs($this);
if ($this->DiscussionData->NumRows() > 0 || (property_exists($this, 'AnnounceData') && $this->AnnounceData->NumRows() > 0)) {
?>
<ul class="DataList Discussions">
   <?php
   include($this->FetchViewLocation('discussions'));
   ?>
</ul>
<?php
   echo $this->Pager->ToString('more');
} else {
   ?>
   <div class="Empty"><?php echo T('No discussions were found.'); ?></div>
   <?php
}
