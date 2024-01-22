<div class="justify-self-start md:justify-self-start mt-2">
    <p class="text-center md:text-left text-white" id="ce">
        Axis is a product of our extensive experience working with business
    </p>
    <p class="text-center md:text-left text-white" id="ce">
        of all sizes at Belva Digital. We have first-hand
        knowledge
    </p>
    <p class="text-center md:text-left text-white" id="ce">of what growing business is going to be require to</p>
    <p class="text-center md:text-left text-white" id="ce">
        scale. Most marketing and communication platforms are
        designed for large
    </p>
    <p class="text-center md:text-left text-white" id="ce">
        businesses and come with complexities
        and an enterprise-level price-tag.
    </p>


</div>



</div>

<div class=" w-full md:w-1/2 p-4 text-center text-gray-700 lg:order-last md:justify-end absolute  md:-bottom-[350px]   -right-56 hidden md:hidden lg:block">
    <img class="animate__animated animate__slideInRight animate__repeat-0 animate__delay-1s min-h-[640px]  w-auto rounded-full" src="<?php echo home_url('/wp-content/uploads/2024/01/button.webp'); ?>" alt="" srcset="">
</div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const text = "About Axis";
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