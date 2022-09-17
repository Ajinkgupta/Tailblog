<?php  include('../config.php'); ?>

            <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-gray-200">
   
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
      <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        
      
 <!-- Loading screen -->
 <div
          x-ref="loading"
          class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800"
        >
         Admin Panel
        </div>
        <!-- Sidebar -->
       
           
 
          <?php include(ROOT_PATH . '/admin/includes/menu.php') ?>




        <div class="flex flex-col flex-1">
         
          <div class="flex flex-1">
            <!-- Main -->
            <main class="flex items-center justify-center flex-1 px-4 py-8">
             
             
             
             
             
             
             
             
             
             
             
             
             
              <!-- Content -->
            </main>
          </div>
        </div>
      </div>

      <!-- Panels -->

    



   </div>
    </div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            return {
            isSidebarOpen: false,
            currentSidebarTab: null,
            isSettingsPanelOpen: false,
            isSubHeaderOpen: false,
            watchScreen() {
                if (window.innerWidth <= 1024) {
                this.isSidebarOpen = false
                }
            },
        }
      }
    </script>
</body>
</html>
