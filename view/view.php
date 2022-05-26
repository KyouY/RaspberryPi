<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>文字识别</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='view.css'>
    <script src='./vue/vue.js'></script>
</head>
<body>
<?php  
	
	$data = shell_exec('cd /home/pi/opencv-scan && cat write.txt');
	
?>
      <div id="app">
      <form id = "rec" action="control.php">
	<button class="check" @click = "btnClick">识别</button>
      </form>
      <form id = "show" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<button type="submit" class="check" @click = "showClick">展示</button>
      </form>
      <h2>查询结果:</h2>
      <textarea class="text">
        <?php 
		echo $data;	
	?>
      </textarea>
    </div>
    <script>
      const app = new  Vue({
        el :"#app",
        methods : {
          btnClick(){
            alert('确定识别吗？');
            
          },
	  showClick(){
	    alert('确定展示吗？');
  	  }
        }
      })  
    </script>
</body>
</html>
