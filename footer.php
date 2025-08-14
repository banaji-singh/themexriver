<body>

</body>
 <?php wp_footer();?> 
</html>

<?php
/**
 * The template for displaying the footer
 */
?>

   <footer id="site-footer" class="bg-dark pt-5 pb-3">
  <div class="container">
    <div class="row">
      
      <!-- Column 1: About -->
      <div class="col-md-4 mb-4">
        <h4>About Us</h4>
        <p>
          Stratosphere Networks helps businesses bypass the traditional sales process and quickly identif.
        </p>
      </div>
      
      
      <div class="col-md-4 mb-4">
        <h4>Contact Us</h4>
        <ul class="list-unstyled ">
          <li><i class="fas fa-envelope"></i> <a href="mailto:info@example.com" class="footer-link"> info@example.com</a></li>
          <li><i class="fas fa-phone"></i> <a href="tel:+911234567890" class="footer-link"> +91 12345 67890</a></li>
          <li><i class="fas fa-map-marker-alt"></i> Jaipur, Rajasthan, India</li>
        </ul>
      </div>
      
      <!-- Column 3: Extra Links -->
      <div class="col-md-4 mb-4">
        <h4>Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Terms & Conditions</a></li>
          <li><a href="#" class="footer-link">Support</a></li>
        </ul>
      </div>
      
    </div>
    
    <hr class="bg-light">
    <div class="text-center">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>


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

    <?php wp_footer(); ?>
</body>
</html>
