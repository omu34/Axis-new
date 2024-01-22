<div class="justify-self-start md:justify-self-start mt-2 md:mt-4">
     <p class="text-center md:text-left text-white" id="ce">
      Engage your customers and potential prospects at scale on
      </p>
      <p class="text-center md:text-left text-white" id="ce">
       WhatsApp  using WhatsApp Chatbot.It’s built using the
      </p>
	<p class="text-center md:text-left text-white" id="ce">
        official WhatsApp Business API.
      </p>
    
	
    </div>

    <div class="flex md:justify-start justify-center mt-2 md:mt-4">
      <a href="<?php echo home_url('/signup'); ?>" id="p-l7" class="animate-pulse">
        <button type="button" class="" id="button-s">
          <div class="flex items-center text-sm">
            <span class="pr-2" id="g2">Get Started</span>
          </div>
        </button>
        <span class="relative flex h-3 w-3">
          <span style="animation: ping 2.5s linear infinite;" class="absolute inline-flex h-full w-full">
            <img class="" src="<?php echo home_url('/wp-content/uploads/2024/01/Vector_1.webp'); ?>" alt="" srcset="">
          </span>
        </span>
      </a>
    </div>
  </div>

  <div class=" w-full md:w-1/2 p-4 text-center text-gray-700 lg:order-last md:justify-end absolute  md:-bottom-[380px]   -right-48 hidden md:hidden lg:block">
    <img class="animate__animated animate__slideInRight animate__repeat-0 animate__delay-1s min-h-[670px]  w-auto rounded-full" src="<?php echo home_url('/wp-content/uploads/2024/01/robot.webp'); ?>" alt="" srcset="">
  </div>
</div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
     const text = "WhatsApp Chatbot";
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





      