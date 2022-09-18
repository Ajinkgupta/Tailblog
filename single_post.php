<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?> 
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php $posts = getAllPosts(); ?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | TailBlog</title>
</head>
<body> 
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

 


	
	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>



<section class="w-4/5 m-auto"> 

				<div
    class="transition-all duration-150 flex w-full px-4 py-6 "
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
				href="<?php echo BASE_URL . $post['topic']['id'] .'/topic' ?>"
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
      
      
       <h2 class="text-2xl font-bold tracking-normal text-gray-800"><?php echo $post['title'] ?>  </h2>
	  </div>
      <div>
	  <div class="px-4 py-4">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
	  </div>
      <hr class="border-gray-300" />
      <section class="px-4 py-2 mt-2">
         
         
		<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://tailblog.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
           
         
      </section>
    </div>
  </div>
  </section>
















 
			<?php endif ?>
			</div>
		 
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<?php include( ROOT_PATH . '/includes/footer.php'); ?>
