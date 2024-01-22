<div class="justify-self-start md:justify-self-start mt-2 md:mt-4">
  <p class="text-center md:text-left text-white" id="ce">
    Whatsapp has really revolutionized communication.
  </p>
  <p class="text-center md:text-left text-white" id="ce">
    As of January 2022, data from Statista shows that it is one of the most used apps.
  </p>


</div>

<div class="flex md:justify-start justify-center mt-2">
  <div class=" mt-4 md:justify-normal justify-center">
    <div class="flex flex-row content-between justify-start">
      <div class="">
        <img src="<?php echo home_url('/wp-content/uploads/2024/01/logo.webp'); ?>" class="h-12">
      </div>
      <div class="">
        <p id="sb-1" class="">
          Posted by<br>
          James Ng'ang'a
        </p>

      </div>
      <div class="ml-4 md:ml-6  ">
        <p id="sb-1" class="">
          published<br>
          May 03,2021
        </p>

      </div>

    </div>
  </div>
</div>
</div>

<div class=" w-full md:w-1/2 p-4 text-center text-gray-700 lg:order-last md:justify-end absolute  md:-bottom-[380px]   -right-48 hidden md:hidden lg:block">

  <img class="animate__animated animate__slideInRight animate__repeat-0 animate__delay-1s min-h-[700px]  w-auto rounded-full" src="https://axis.africa/wp-content/uploads/2023/01/whatsapp-business.jpg" alt="" srcset="">
</div>
</div>
</div>








<script>
  document.addEventListener('DOMContentLoaded', function() {
    const text = 'The AXIS Whatsapp Unified Inbox Increases Customer Engagement';
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