    <div id="push"></div>
    </div><!-- /container -->
     <!-- Footer
      ================================================== -->
      

      <footer id="footer">
		<div class="container">
		<hr>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <div class="links">
          <a href="http://www.vaibhav-gupta.com">Website</a>
          <a href="http://www.github.com/kacxdak/sample">Github</a>
          <a href="#">Sorry you can't Donate</a>
        </div>
        Made by <a target="_blank" href="#" onclick="pageTracker._link(this.href); return false;">Stephen Chiang & Vaibhav Gupta</a>. Sorry you can't contact us.<br/>
	    </div><!-- /container -->
      </footer>
</div><!-- /wrap -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootswatch.js"></script>
    <script>
		$(document).ready(function() {
			$('a[rel="tooltip"]').tooltip({trigger:'hover', placement:'top', html:'true'});
			function updateTime(){
				var currentTime = new Date()
				var minutes = 60 - currentTime.getMinutes();
				if (minutes < 10 && minutes > 1){
					minutes = "<font class=\"error\">0" + minutes + " minutes</font>"
				} else if ( minutes == 1 ) {
					minutes = 60 - currentTime.getSeconds();
					minutes = "<font class=\"error\">" + minutes + " seconds</font>"
				} else {
					minutes = "<font class=\"error\">" + minutes + " minutes</font>"
				}
				document.getElementById('time_span').innerHTML = minutes;
			}
			setInterval(updateTime, 1000);
    	});
	</script>
  </body>
</html>
