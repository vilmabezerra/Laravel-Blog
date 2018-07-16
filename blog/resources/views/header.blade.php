<!-- Header -->
<script type="text/javascript">
	
	/*
	 *  OnClick header created by me 
	 */
	function headerClick(id){
	  var list = document.getElementsByTagName("ul")[0];
	  var elem = list.getElementsByTagName("li");
	  for (var i = 0;i < elem.length; i++)
	  {
	    elem[i].classList.remove('is-active');
	    //console.log(elem[i]);
	  }
	  console.log(id);
	  document.getElementById(id).className = "is-active";
	}
</script>
<section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
            <!--<img src="/resources/images/bulma.png" alt="Logo">-->
            <h1 class="content" style= "font-size: 150%">Laravel Blog</h1>
          </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
            <span></span>
                        <span></span>
                        <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>
                                    <li class="" id="read" onclick="headerClick(this.id)"><a href="{{ url('/')}}">Home</a></li>
                                    
                                    <li class="" id="create" onclick="headerClick(this.id)"><a href="{{ url('posts/create/')}}">Create Post</a></li>

                                    <li id="help" onclick="headerClick(this.id)" class=""><a href="">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

