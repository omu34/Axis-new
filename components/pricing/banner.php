<div class="justify-self-start md:justify-self-start mt-2 md:mt-4">
      <p class="text-center md:text-left text-white" id="ce">
      Pay-as-you-use allows you to easily adapt to changing   
      </p>
      <p class="text-center md:text-left text-white" id="ce">
       business needs without over-committing budgets
      </p>
	<p class="text-center md:text-left text-white" id="ce">
         and improving your responsiveness to customer needs.
      </p>
      
	
    </div>

   
  </div>

  <div class=" w-full md:w-1/2 p-4 text-center text-gray-700 lg:order-last md:justify-end absolute  md:-bottom-[370px]   -right-64 hidden md:hidden lg:block">
    <img class="animate__animated animate__slideInRight animate__repeat-0 animate__delay-1s min-h-[620px]  w-auto rounded-full" src="<?php echo home_url('/wp-content/uploads/2024/01/button.webp'); ?>" alt="" srcset="">
  </div>
</div>
</div>


<script>
   document.addEventListener('DOMContentLoaded', function () {
     const text = "Pay As You Use. No software subscription";
     const speed = 100; 

     const typewriter = document.getElementById('typewriter');

     let i = 0;

     function typeWriter() {
       if (i < text.length) {
         typewriter.innerHTML += text.charAt(i);
         i++;
         setTimeout(typeWriter, speed);
       }
     }

     typeWriter();
   });
 </script>






 