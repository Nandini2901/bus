<?php if(isset($_SESSION['login_id'])) include 'emp_navbar.php'; else include 'navbar.php'; ?>
 <section id="bg-bus" class="d-flex align-items-center">
 
    <div class="container">
      <?php if(!isset($_SESSION['login_id'])): ?>
     <!-- 	<center><button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>  -->
     <?php else: ?>
       
       
      <?php endif; ?>
    </div>
    
  </section>
   
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>