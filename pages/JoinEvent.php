<?php $row = mysql_result(mysql_query("SELECT * FROM events, users WHERE `id` = '".parameter('id')."' AND events.uid = users.uid"), 0, 'fname'); ?>
<div class="row">
	<div class="large-4 small-6 columns">
		Event Host: <?php echo mysql_result(mysql_query("SELECT * FROM events, users WHERE `id` = '".parameter('id')."' AND events.uid = users.uid"), 0, 'fname'); echo " ".mysql_result(mysql_query("SELECT * FROM events, users WHERE `id` = '".parameter('id')."' AND events.uid = users.uid"), 0, 'lname'); ?>
	</div>
	<div class="large-4 small-6 columns">
		Event Date: <?php echo date('m/d/Y H:i:s', mysql_result(mysql_query("SELECT * FROM events WHERE `id` = '".parameter('id')."'"), 0, 'event_time')); ?>
	</div>
</div>
<div class="row">
<form name="joinEvent" data-abide novalidate="novalidate" method="POST" action="index.php">
<div class="row">
	<fieldset>
	<legend>What are you planning on bringing?</legend>
	<label>Tools</label>
	<div class="large-8 small-12 columns">
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Hammer</label>
      <input id="checkbox2" type="checkbox"><label for="checkbox2">Drill</label>
      <input id="checkbox3" type="checkbox"><label for="checkbox1">Saw</label>
      <input id="checkbox4" type="checkbox"><label for="checkbox2">Nails</label>
	</div>
	</fieldset>
</div>
<div class="row">
	<fieldset>
	<div class="large-8 small-12 columns">
	<label>Alcohol</label>
      <input id="checkbox5" type="checkbox"><label for="checkbox1">6 Pack of Beer</label>
      <input id="checkbox6" type="checkbox"><label for="checkbox2">12 Pack of Beer</label>
      <input id="checkbox7" type="checkbox"><label for="checkbox1">36 Pack of Beer</label>
      <input id="checkbox8" type="checkbox"><label for="checkbox2">Handle of Vodka</label>
	</div>
	</fieldset>
</div>
<div class="row">
    <div class="large-8 columns">
      <label>Information about Event
        <textarea placeholder="Enter the details about the event" id="eventInfo" name="eventInfo"></textarea>
      </label>
    </div>
</div>
<input name="eventID" type="hidden" value="<?php echo parameter('id'); ?>" />
<input name="JoinEvent" type="submit" class="button small radius" value="Submit" />
</form>
</div>