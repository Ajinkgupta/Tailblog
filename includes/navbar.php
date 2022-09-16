<nav class="p-1 fixed sticky top-0 z-30 w-full px-2 py-2 bg-white bg-white z-10 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
       <a href="./"> <img class="h-10 inline"
          src="logo.png">
        </a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>
<div class="">
    <ul class="md:flex md:items-center w-4/5 p-10 mx-4 md:border-none border-solid border-2  shadow-2xl md:shadow-none z-9 md:z-auto md:static absolute bg-white  left-0 md:w-auto md:py-0 py-6 md:pl-0 pl-3 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 rounded">
      
	  <?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>

	  <?php foreach ($topics as $topic): ?>
		<li class="mx-4 my-6 md:my-0"><a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>" class="text-xl hover:text-cyan-500 duration-500">
							<?php echo $topic['name']; ?>
						</a> </li>
					<?php endforeach ?>
     
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">CONTACT</a>
      </li>
     

       <?php if (isset($_SESSION['user']['username'])) { ?>
	  <a href="logout.php"> <button class="bg-purple-600  text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-purple-500 rounded ">
     Logout   </button>  </a> 
	 
<?php }else{ ?>
	<a href="login.php"> <button class="bg-purple-600  text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-purple-500 rounded ">
     Log in   </button>  </a> 
	<?php } ?>
    
    </ul></div>
  </nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script> 
