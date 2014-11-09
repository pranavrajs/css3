	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<script type="text/javascript">
(function($){
	$.fn.textareaCounter = function(options) {
		var defaults = {
			limit: 500
		};	
		var options = $.extend(defaults, options);
 
		// and the plugin begins
		return this.each(function() {
			var obj, text, wordcount, limited;
			
			obj = $(this);
			obj.after('<span style="font-size: 11px; clear: both; margin-top: 3px; display: block;" id="counter-text">Max. '+options.limit+' words</span>');

			obj.keyup(function() {
			    text = obj.val();
			    if(text === "") {
			    	wordcount = 0;
			    } else {
				    wordcount = $.trim(text).split(" ").length;
				}
			    if(wordcount > options.limit) {
			        $("#counter-text").html('<span style="color: #DD0000;">0 words left</span>');
					limited = $.trim(text).split(" ", options.limit);
					limited = limited.join(" ");
					$(this).val(limited);
			    } else {
			        $("#counter-text").html((options.limit - wordcount)+' words left');
			    } 
			});
		});
	};
})(jQuery);

</script>
<style type="text/css">
input,textarea
{
	padding:2px;
}
input[type="text"],[type="email"]
{
	height:30px;
	width:200px;
	border-radius:5px;
font-family: 'Philosopher', sans-serif;	
}
textarea
{
	border-radius:5px;
	padding:5px;
	height:100px;
	width:300px;
	
font-family: 'Philosopher', sans-serif;	
}
label
{
font-family: 'Philosopher', sans-serif;	
padding:5px;
}
input[type="submit"]
{
	height:40px;
	width:100px;font-family: 'Philosopher', sans-serif;	
	font-weight: bolder;
	box-shadow:none;
	border-radius:5px;
	color: #fff;
	text-transform: uppercase;
	background-color: red;
}
.error
{
	color: red;
}
</style>
<div style='margin-left:45%;margin-top:10%;color:#fff;'>	<?php         $this->load->helper('form');
        echo form_open('tedx/reg');
?>
		<p>
			<label for="name">Name&nbsp;</label>
			<input type="text" name="name"/>
			<?php echo form_error('name'); ?>
		</p>      
		<p>
			<label for="email">Email&nbsp;</label>
			<input type="email" name="email"/>
			<?php echo form_error('email'); ?>
		</p>      
		<p>
			<label for="phone">Sex&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="phone"/>
			<?php echo form_error('sex'); ?>
		</p>      
		<p>
			<label for="age">Age&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="age"/>
			<?php echo form_error('age'); ?>
		</p>      
		<p>
			<label for="q1">Q1 : Statement of Purpose:<br/>
			
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What do you think is society&#39;s major challenge? <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And how can today's youth help initiate change?<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We&#39;d love to hear your take!<br/></label><br/>		<textarea id="text1"name="q1"></textarea>
		<script type="text/javascript">
			$("#text1").textareaCounter();
		</script>   

			<?php echo form_error('q1'); ?>
		</p>      
		<p>
			<label for="q2">Q2 : What is more important to you , Success or respect ?</label><br/><br/>
			<textarea id="text2" name="q2" ></textarea>
 <script type="text/javascript">
			$("#text2").textareaCounter();
		</script>   
   	
			<?php echo form_error('q2'); ?>
		</p>   
		
<p>
			

		<p>
		<input type="submit" class="submit"value="Submit" />
		</p>
	</div>
	<?php echo form_close(); ?>
	<br/>
		
		</form>