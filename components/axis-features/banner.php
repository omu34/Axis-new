<div class="justify-self-start md:justify-self-start mt-2 md:mt-4">
    <p class="text-center md:text-left text-white" id="ce">
        We are a complete customer communications platform with bots, apps and
    </p>
    <p class="text-center md:text-left text-white" id="ce">
        more—like email, messages, so you can build great customer
    </p>
    <p class="text-center md:text-left text-white" id="ce">
        relationships,every step of the way.
    </p>
</div>


</div>

<div class=" w-full md:w-1/2 p-4 text-center  lg:order-last md:justify-end absolute  md:-bottom-[400px]   -right-60 hidden md:hidden lg:block">
    <img class="animate__animated animate__slideInRight animate__repeat-0 animate__delay-1s min-h-[640px]  w-auto rounded-full" src="<?php echo home_url('/wp-content/uploads/2024/01/Ellipse-4.webp'); ?>" alt="" srcset="">
</div>
</div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const text = "Do more with axis";
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