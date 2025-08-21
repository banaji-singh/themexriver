
<section class="container-fluid p-lg-5 p-4 mb-5">
  <div class="accordion contanier">
    <p class="text-align-center text-primary ">Popular Question</p>
    <h1 class="theme-color pro-sec4-headin-1">Frequently Asked Questions</h1>
    <div class="accordion-item">
      <div class="accordion-header">
        1. How do your IT solutions benefit my business?
        <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>Yes, we offer fully customized IT solutions tailored to your business needs. Our team conducts a thorough analysis of your goals, challenges, and existing systems. Based on that, we design and implement technology strategies that deliver real results.</p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
       2. Do you offer customized IT solutions?
        <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>Yes, we offer fully customized IT solutions tailored to your business needs. Our team conducts a thorough analysis of your goals, challenges, and existing systems. Based on that, we design and implement technology strategies that deliver real results.</p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        3. What’s included in your managed IT services?
        <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>Yes, we offer fully customized IT solutions tailored to your business needs. Our team conducts a thorough analysis of your goals, challenges, and existing systems. Based on that, we design and implement technology strategies that deliver real results.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header">
        4. Do you offer remote work solutions?
        <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
        Yes, we offer fully customized IT solutions tailored to your business needs. Our team conducts a thorough analysis of your goals, challenges, and existing systems. Based on that, we design and implement technology strategies that deliver real results.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header">
        5. What cloud platforms do you work with?
        <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
        Yes, we offer fully customized IT solutions tailored to your business needs. Our team conducts a thorough analysis of your goals, challenges, and existing systems. Based on that, we design and implement technology strategies that deliver real results.</p>
      </div>
    </div>
  </div>

  <script>
    const items = document.querySelectorAll(".accordion-item");

    items.forEach(item => {
      const header = item.querySelector(".accordion-header");
      const icon = item.querySelector(".icon");

      header.addEventListener("click", () => {
        item.classList.toggle("active");

        if (item.classList.contains("active")) {
          icon.textContent = "–"; // minus when open
        } else {
          icon.textContent = "+"; // plus when closed
        }
      });
    });
  </script>
</section>

