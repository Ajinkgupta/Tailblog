<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once('includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $posts = getPublishedPosts(); ?>
	<title>TailBlog | Home </title>
</head>
<body> 
<?php include('includes/navbar.php') ?>
		<!-- // navbar -->
<!-- banner -->
<?php include('includes/banner.php') ?>
		<!-- Page content -->
		 
			
			
<!-- This is an example component -->
<section class="flex flex-row flex-wrap mx-auto"> 

<?php foreach ($posts as $post): ?>
	  
	<!-- Card Component -->
	<div
    class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3"
  >
    <div
      class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl"
    >
      <div class="md:flex-shrink-0">
        
        
        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="object-fill w-full rounded-lg rounded-b-none md:h-56"  >
      
        
        
        
      </div>
      <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
      
      
      
      <?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				 <span class="text-xs font-medium text-blue-600 uppercase">
        <?php echo $post['topic']['name'] ?>
        </span>
			</a>
		<?php endif ?>
      
      
        
        <div class="flex flex-row items-center">
          <div
            class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2"
          >
            <svg
              class="w-4 h-4 mr-1"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
              ></path>
            </svg>
            <span>1.5k</span>
          </div>

          <div
            class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2"
          >
            <svg
              class="w-4 h-4 mr-1"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
              ></path>
            </svg>
            <span>25</span>
          </div>

          <div
            class="text-xs font-medium text-gray-500 flex flex-row items-center"
          >
            <svg
              class="w-4 h-4 mr-1"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"
              ></path>
            </svg>
            <span>7</span>
          </div>
        </div>
      </div>
      <hr class="border-gray-300" />
      <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
      
      
      <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" class="hover:underline">
			 
			 <h2 class="text-2xl font-bold tracking-normal text-gray-800"><?php echo $post['title'] ?>  </h2>
	  </div>
      
      <hr class="border-gray-300" />
      <section class="px-4 py-2 mt-2">
        <div class="flex items-center justify-between">
          <div class="flex items-center flex-1">
            <img
              class="object-cover h-10 rounded-full"
              src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
              alt="Avatar"
            />
            <div class="flex flex-col mx-2">
              <a href="" class="font-semibold text-gray-700 hover:underline">
                Ajink Gupta
              </a>
              <span class="mx-1 text-xs text-gray-600"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
            </div>
          </div>
      <a  href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
      
      <button
        type="button"
        class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
      >
Read
      </button>
      </a>
        </div>
      </section>
    </div>
  </div>
  <!-- Card Component -->
<?php endforeach ?>
 











</section>


















		<!-- footer -->
<?php include('includes/footer.php') ?>
		<!-- // footer -->

	</div>
	<!-- // container -->
</body>
</html>