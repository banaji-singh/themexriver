<body>

    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> Your Website Name. All rights reserved.</p>
    </footer>

    <?php wp_footer(); ?>

    <!-- Scroll-based animation script -->
    <script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                entry.target.classList.remove('hidden');
            }
        });
    });

    document.querySelectorAll('.box').forEach((el) => observer.observe(el));
    </script>

    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800, // animation duration in ms
        once: true // only animate once per scroll
    });
    </script>
</body>
 <?php wp_footer();?> 
</html>