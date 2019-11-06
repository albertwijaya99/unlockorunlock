<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  left: 0;
  background-color: #FFF;
  overflow-x: hidden;
  transition: 0.5s;
  border: 1px solid black;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #000;
  display: block;
  transition: 0.3s;
  border-bottom: 1px solid black;
}


.sidenav a:hover {
  color: #3399ff;
}


#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left:300px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<script>
$(".sidenav a").after("<hr>");
</script>