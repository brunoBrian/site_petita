
<!-- Navbar (sit on top) -->
<div class="container menu">
  <div class="menu-container" id="myNavbar">
    <a href="#" class="menu-logo">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small header-menu">
      <a href="#about" class="menu-item">Sobre</a>
      <a href="#produtos" class="menu-item"><i class="fa fa-user"></i> Produtos</a>
      <a href="#portfolio" class="menu-item"><i class="fa fa-th"></i> Portfolio</a>
      <a href="#pricing" class="menu-item"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contato" class="menu-item"><i class="fa fa-envelope"></i> Contato</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large hide-menu" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Fechar X</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Sobre</a>
  <a href="#produtos" onclick="w3_close()" class="w3-bar-item w3-button">Produtos</a>
  <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contato" onclick="w3_close()" class="w3-bar-item w3-button">Contato</a>
</nav>
