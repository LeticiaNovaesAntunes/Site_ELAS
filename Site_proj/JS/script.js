  // ---------Responsive-navbar-active-animation-----------
  function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = '../navbar.php';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});
/*                  <?php
  if(isset($_POST['nome']) && !empty($_POST['nome']) && 
  isset($_POST['cidade']) && !empty($_POST['cidade']) && 
  isset($_POST['rua']) && !empty($_POST['rua']) && 
  isset($_POST['bairro']) && !empty($_POST['bairro']) && 
  isset($_POST['estado']) && !empty($_POST['estado']) && 
  isset($_POST['tipo']) && !empty($_POST['tipo']) && 
  isset($_POST['email']) && !empty($_POST['email']) && 
  isset($_POST['telefone']) && !empty($_POST['telefone']) && 
  isset($_POST['link']) && !empty($_POST['link'])){
      
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $link = $_POST['link'];
    $tipo = $_POST['tipo'];

    if($p->solicitacoes($nome,$telefone,$email,$rua,$cidade,$bairro,$estado,$link,$tipo) == true){
        echo '<p style="color:green; text-align: center;"> Solicitação realizada com sucesso !!</p>';

    }else{
        echo ' <div class="alert alert-danger" role="alert"> Falha ao enviar solicitação !!</div>';
    }

}
?>