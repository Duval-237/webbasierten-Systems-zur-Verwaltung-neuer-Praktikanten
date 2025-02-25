      </div>
      <div class="foot_container">
        <span>©2023 Inov Cameroon All rights reserved</span>
      </div>
    </div>
    
    <script>
      let menu = document.querySelector(".menu");
      let close = document.querySelector(".close");
  
      menu.addEventListener('click', function() {
        document.body.classList.add('toggle');
      });
  
      close.addEventListener('click', function() {
        document.body.classList.remove('toggle');
      });
  
    </script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>