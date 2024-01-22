<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-axis
 */

?>



<?php wp_footer(); ?>



<script>
    document.addEventListener("alpine:init", () => {
        Alpine.store("accordion", {
            tab: 0
        });

        Alpine.data("accordion", (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab =
                    this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? "-rotate-45" : "";
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` :
                    "";
            }
        }));
    });
</script>

<script>
    const openButton = document.getElementById('open-button');
    const closeButton = document.getElementById('close-button');
    const target = document.getElementById('target');

    openButton.addEventListener('click', () => {
        target.style.display = 'block';
    });

    closeButton.addEventListener('click', () => {
        target.style.display = 'none';
    });
</script>

<script>
    const modalToggleButtons = document.querySelectorAll('[data-modal-target]');
    const body = document.body;

    modalToggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.dataset.modalTarget;
            const modal = document.getElementById(target);

            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                body.classList.add('modal-open');
            } else {
                modal.classList.add('hidden');
                body.classList.remove('modal-open');
            }
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target.dataset.modalHide !== undefined) {
            const targetModal = document.getElementById(event.target.dataset.modalHide);
            if (targetModal !== null && !targetModal.classList.contains('hidden')) {
                targetModal.classList.add('hidden');
                body.classList.remove('modal-open');
            }
        }
    });

    document.getElementById('extralarge-modal').addEventListener('click', (event) => {
        event.stopPropagation();
    });
</script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>